<?php

class Db{
    protected function connect(){
        try{
            $connect = new PDO('mysql:host=localhost;dbname=crud;charset=utf8;', 'root', 'password');
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connect;
        }catch(Exception $e){
            die("Error db (connect) " . $e->getMessage());
        }
    }
}