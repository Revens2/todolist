<?php

namespace App\Controller;

use PDO;

class cbdd 
{
private static string $servername = "localhost:5434";
private static string $username = "root";
private static string $password = "root";
private static string $dbname = "todolist";

 public static $conn;

    private function GetServername()
    {
        return self ::servername;
    }

    private function GetUsername()
    {
        return self ::username;
    }

    private function GetPassword ()
    {
        return self ::password;
    }

    private function GetDbname ()
    {
        return self ::dbname;
    }



    

     public static function init()
    {
        SELF ::$conn = new pdo(SELF ::$servername , self::$username, self::$password, self:: $dbname);
    }


?>