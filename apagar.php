<?php
    include_once("head.php");
    include_once("conexao.php");


    $id = $_GET["del"];
    $query = "DELETE FROM chamados WHERE id = " . $id;
    $consult = $mysqli->query($query) or die ($mysqli->error);


    if($id != null){
        header('Location:index.php');
    }else{
        echo ("Erro ao apagar dados.");
    }



?>      

