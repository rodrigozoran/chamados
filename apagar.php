<?php
    include_once("head.php");
    include_once("conexao.php");

    $id = $_GET["del"];
    $query = "DELETE FROM chamados WHERE id = " . $id;
    $consult = $mysqli->query($query) or die($mysqli->error);

?>      

        <script type="text/javascript">
                function confirmaExclusao(){
                    location.href = "/index.php";
                }
        </script>