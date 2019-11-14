<?php


class Database{

    private $host = "docker-mysql-app";
    private $username = "smileeypin";
    private $password = "dockersql";
    private $dbname = "docker_db";

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }else{
            //echo "connected successfully";
            return $this->conn;
        }
    }


}





?>