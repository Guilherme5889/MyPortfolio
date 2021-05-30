<?php

class DB{
    private static $pdo;

    public static function connect(){
        if(self::$pdo == null){
            try{
                self::$pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
            }catch(PDOException $ex){
                die($ex->getMessage());
            }
        }
        return self::$pdo;
    }
   
}