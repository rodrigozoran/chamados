<?php
include_once("head.php");
include_once("navbar.php");
include_once("conexao.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);

//Pegar a Data para abertura e fechamento dos chamados
$dataAtual = date('Y-m-d');
$dataFechamento = date('Y-m-d');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $param_setor = $_POST["setor"];
    $param_resp_setor = $_POST["resp_setor"];
    $param_contato = $_POST["contato"];
    $param_desc_abert = $_POST["desc_abertura"];
    $param_fechamento = $_POST["fechamento"];
    $param_desc_fechamento = $_POST["desc_fechamento"];
    $param_resp_chamado = $_POST["resp_chamado"];

    $sql = "INSERT INTO chamados (setor, resp_setor, contato, desc_abert, fechamento, desc_fech, resp_chamado)
        VALUES (?,?,?,?,?,?,?)";

    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param(
            $stmt,
            "sssssss",
            $param_setor,
            $param_resp_setor,
            $param_contato,
            $param_desc_abert,
            $param_fechamento,
            $param_desc_fechamento,
            $param_resp_chamado
        );

        if (mysqli_stmt_execute($stmt)) {
?>
            <script type="text/javascript">
                window.alert("Registro Salvo com Sucesso!");
            </script>
<?php
            $mysqli->close();
        } else {
            echo "Erro: " . $sql . "<br>" . $mysqli->error;
        }
    }
}
?>

<body>
    <main>
        <h3 class="text-center">Novo Chamado</h3><br />
        <div class="container">
            <form name="cadastro_chamados" action="" method="POST">
                <div class="row g-3">
                    <div class="col text-center">
                        <label>Digite seu nome</label>
                        <input type="text" placeholder="Digite seu nome" name="resp_setor" class="form-control" required>
                    </div>
                    <div class="col text-center"  required>
                        <label>Escolha sua Secretaria</label>
                        <select id="inputState" class="form-select" name="setor">
                            <option selected></option>
                            <option>Secretaria de Governo</option>
                            <option>Secretaria de Fazenda</option>
                            <option>Secretaria de Cont. Interno</option>
                            <option>Secretaria de Obras</option>
                            <option>Secretaria de Urbanismo</option>
                            <option>Secretaria de Comunicação</option>
                            <option>Secretaria de Educação</option>
                            <option>Secretaria de Assis. Social</option>
                        </select>
                    </div>
                </div><br />
                <div class="row g-3">
                    <div class="col text-center">
                    <label>Telefone</label>
                        <input type="tel" name="contato" class="form-control" placeholder="Telefone com DDD" required minlength="10" maxlength="11">
                    </div>
                    <div class="col text-center">
                    <label>Descreva o problema (brevemente)</label>
                        <input type="textarea" name="desc_abertura" class="form-control" placeholder="Descreva o problema" required maxlength="250">
                    </div>
                </div><br />
                <div class="row g-3">
                    <div class="col text-center">
                    <label>Data de Fechamento</label>
                        <input type="date" name="fechamento" class="form-control">
                    </div>
                    <div class="col text-center">
                    <label>Providência Tomada</label>
                        <input type="text" name="desc_fechamento" class="form-control" placeholder="Descreva as ações">
                    </div>
                    <div class="col text-center">
                    <label>Responsável pelo atendimento</label>
                        <select id="inputState" class="form-select" name="resp_chamado">
                            <option selected></option>
                            <option>Pedro</option>
                            <option>Henrique</option>
                            <option>Gabriel</option>
                            <option>Estagiário 1</option>
                            <option>Estagiário++ </option>
                        </select>
                    </div>
                </div><br />
                <button type="submit" class="btn btn-primary" name="send_cadastro_chamados">Salvar</button>
            </form>
        </div>

    </main>

</body>

</html>