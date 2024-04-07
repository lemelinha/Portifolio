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

    function Select($statement, $parameters = []){
        try {
            $query = $this->executeStatement($statement, $parameters);
            return $query->fetchAll();
        } catch (Exception $e) {
            throw $e;
        }
    }

    function Insert($statement, $parameters = []){
        try {
            $this->executeStatement($statement, $parameters);
        } catch (Exception $e) {
            throw $e;
        }
    }

    function Update($statement, $parameters = []){
        try {
            $this->executeStatement($statement, $parameters);
        } catch (Exception $e) {
            throw $e;
        }
    }

    function Delete($statement, $parameters = []){
        try {
            $this->executeStatement($statement, $parameters);
        } catch (Exception $e) {
            throw $e;
        }
    }

    function executeStatement($statement, $parameters){
        try {
            $query = $this->connection->prepare($statement);
            $query->execute($parameters);
            return $query;
        } catch (Exception $e) {
            throw $e;
        }
    }
}