<?php

namespace App\Model;


class cbdd 
{
public static $url = parse_url($_ENV['DATABASE_URL'] ?? getenv('DATABASE_URL'));



private static string $servername = $url['host'];
private static string $username = $url['user']; 
private static string $password = $url['pass']; 
private static string $dbname = ltrim($url['path'], '/');
private static string $port =  $url['port'];

 public static $conn;

    private function GetServername()
    {
        return self::$servername;
    }

    private function GetUsername()
    {
        return self ::$username;
    }

    private function GetPassword ()
    {
        return self ::$password;
    }

    private function GetDbname ()
    {
        return self ::$dbname;
    }


     public static function init() 
    {
     $conn = pg_connect("host=".self::$servername. "port=".self::$port. "dbname=".self::$dbname. "user=".self::$username. "password=".self::$password);
    }

     public static function executequery(string $query)
    {
        $result = pg_query(self::$conn, "'$query'");
        var_dump(pg_fetch_all($result));
    }

    

}
?>