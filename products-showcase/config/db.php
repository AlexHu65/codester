<?php

/**
 * Config database file
 */
class db
{

    private $host = 'localhost';

    private $username = 'root';

    private $password = '';

    private $dbName = 'products';

    private $conn = '';


    public function getConnection()
    {
        $this->conn = null;
        try {

            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->username,
                $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

            return $this->conn;

        } catch (PDOException $e) {

            return "connection errors: " . $e->getMessage();

        }


    }

}