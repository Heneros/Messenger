<?php


class db    {
    private $host = "127.0.0.1";
    private $dbname = "messenger";
    private $username = "root";
    private $password = "";

    protected $con;

    public function __construct()
    {
     try {
         $this->con = new PDO("mysql:hosts=" . $this->host . ";dbname=". $this->dbname,$this->username, $this->password );
         echo "connection is successfully created";
     } catch (Exception $e){
      echo "Database Connection Problem: " . $e->getMessage();
     }
    }

 } 


?>
