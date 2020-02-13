<?php
class Database{
    private static $connection_status = null;

    public function __construct(){
        die('Init function is not allowed');
    }

    public static function connect()
    {
        if(self::$connection_status == null)
        try{
	   $ini = parse_ini_file("config");
           self::$connection_status = new PDO('mysql:host='.$ini["database_host"].';dbname='.$ini["database_name"].'', $ini["database_user"], $ini["database_password"]);

        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection_status;
    }
    public static function disconnect()
    {
        self::$connection_status = null;
    }
}

?>