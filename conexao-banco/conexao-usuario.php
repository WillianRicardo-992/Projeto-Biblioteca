<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "Biblioteca";

$mysql = new mysqli($host, $user, $pass, $bd);

if($mysql->connect_errno){
    echo "Connect failed: " . $mysqli->connection_error;
    exit();
}