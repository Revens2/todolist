<?php

namespace App\Model;


class cbdd 
{
private static string $servername = "localhost";
private static string $username = "root";
private static string $password = "root";
private static string $dbname = "todolist";
private static string $port = "5434";

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
     $conn = pg_connect("host='self::servername' port='self::port'' dbname='self::dbname' user='self::username' password='self::password'");
    }

     public static function executequery(string $query)
    {
        $result = pg_query($conn, "'$query'");
        var_dump(pg_fetch_all($result));
    }

    

}
?>