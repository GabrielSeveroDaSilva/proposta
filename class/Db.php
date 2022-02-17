<?php

class Db 
{

    public static $conn;
    
    public static function connect ()
    {

        self::$conn = new PDO('mysql:host=localhost;dbname=proposta', 'gabriel', '9957');

    }

    public static function query($query, $params=[])
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

}