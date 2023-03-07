<?php

abstract class Model{
    private static $pdo;

    protected static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=restaurant;port=8890charset=utf8","root","root");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}
