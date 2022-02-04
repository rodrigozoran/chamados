<?php
    include_once("head.php");
    include_once("navbar.php");
    // include_once("apagar.php");

?>

<body>

<?php
    include_once("conexao.php");



    $consultaDb = "SELECT * FROM chamados";
    $consult = $mysqli->query($consultaDb) or die($mysqli->error);

    if ($mysqli = mysqli_query($mysqli, $consultaDb)) {
        $rowcount = mysqli_num_rows($mysqli);
    }
?>



    <!--Parte Principal da Página><-->
    <main>
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total de Chamados</h5>
                        <h5 class="card-text"><?php echo $rowcount ?><br /></h5>
                        <a href="#" class="btn btn-primary">Ver Todos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chamados em Aberto</h5>
                        <h5 class="card-text">1<br /></h5>
                        <a href="#" class="btn btn-primary">Ver Todos</a>
                    </div>
                </div>
            </div>
        </div><br />

        <!--Lista Chamados Recentes><-->
        <div class="card">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Setor</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Abertura</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Fechamento</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($dados = $consult->fetch_array()) { ?>
                    <tr>
                        <td><a href='editar.php?=$dados[id]'><?php echo $dados['id'] ?></a></td>
                        <td><?php echo $dados['setor'] ?></td>
                        <td><?php echo $dados['resp_setor'] ?></td>
                        <td><?php echo $dados['contato'] ?></td>
                        <td><?php echo date('d/m/y', strtotime($dados['abertura'])) ?></td>
                        <td><?php echo $dados['desc_abert'] ?></td>
                        <td><?php echo date('d/m/y', strtotime($dados['fechamento'])) ?></td>
                        <td><?php echo $dados['desc_fech'] ?></td>
                        <td><?php echo $dados['resp_chamado'] ?></td>
                        <td><a type="submit" class="btn btn-danger btn-sm" href="apagar.php?del=<?php echo $dados['id'] ?>" onclick="confirmaExclusao()"><i class="material-icons">delete_forever</i></a></td>
                    </tr>
                <?php } 

                ?>
            </tbody>
        </table>
        </div>
    </main>


</body>

</html>