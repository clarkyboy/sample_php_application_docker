<?php


function connect(){

    $host = "docker-mysql-app";
    $username = "smileeypin";
    $password = "dockersql";
    $dbname = "docker_db";

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        //echo "connected successfully";
        return $conn;
    }


}




?>