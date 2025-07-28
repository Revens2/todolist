<?php

namespace App\Model;

use pdo;
use PDOException;

class cbdd 
{

private static ?PDO $conn = null;

    /*-------------------------------------------------*/
    private static function connect(): void
    {
        if (self::$conn !== null) {
            return;
        }

        // 1) lit DATABASE_URL et le convertit en DSN
        $u  = parse_url($_ENV['DATABASE_URL'] ?? getenv('DATABASE_URL'));
        if (!$u) {
            throw new \RuntimeException('DATABASE_URL manquant ou invalide');
        }

        $dsn = sprintf(
            'pgsql:host=%s;port=%s;dbname=%s',
            $u['host'],
            $u['port'] ?? 5432,
            ltrim($u['path'], '/')
        );

        try {
            self::$conn = new PDO($dsn, $u['user'], $u['pass'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            throw new \RuntimeException('Connexion PDO PGSQL impossible : '.$e->getMessage());
        }
    }



    public static function selectlogin(string $email, string $password) {
        self::connect();
  $stmt = self::$conn->prepare('SELECT * FROM utilisateur WHERE email = ? AND password = ?');
$stmt->execute([$email, $password]);
return $stmt->fetch();

    }

}
?>