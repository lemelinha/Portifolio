<?php

namespace app\database;
use PDO;

class Connection {
    private $connection = null;
    function __construct($host='localhost', $dbname, $user='root', $pwd=''){
        try{
            $this->connection = new PDO("mysql:host={$host};dbname={$dbname};", $user, $pwd);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
        } catch(Exception $e){
            throw $e;
        }
    }

    function Select($statement, $parameters){
        try {
            //code...
        } catch (Exception $e) {
            throw $e;
        }
    }
}
