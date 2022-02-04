<?php

$host = "localhost";
$dbname = "helpdsk";
$user = "root";
$passwd = "";

$mysqli = new mysqli($host, $user, $passwd, $dbname);
if($mysqli->connect_errno){
    echo "Falha na conexão com o banco de dados: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    $rowCount=mysqli_num_rows($result);
}
?>