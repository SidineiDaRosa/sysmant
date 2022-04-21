<?php
// Verifica se existe a variável
if (isset($_GET["dataEmissaoOs"])) {
    $dataEmissaoOs = $_GET["dataEmissaoOs"];
    $horaEmissaoOs = $_GET["horaEmissaoOs"];
    $dataPrevistaOs = $_GET["dataPrevistaOs"];
    $horaPrevistaOs = $_GET["horaPrevistaOs"];
}
if (empty($_GET["dataConclusaoOs"])) {
    $dataConclusaoOs = "00/00/0000";
} else {
    $dataConclusaoOs = $_GET["dataConclusaoOs"];
}

if (empty($_GET["horaConclusaoOs"])) {
    $horaConclusaoOs = "00:00:00";
} else {
    $horaConclusaoOs = $_GET["horaConclusaoOs"];
}
$patrimonio = $_GET["patrimonio"];
$emissor = $_GET["emissor"];

if (empty($_GET["executante"])) {
    $executante = "";
} else {
    $executante = $_GET["executante"];
}

$descricao = $_GET["descricao"];

$descricao = $_GET["descricao"];

if (empty($_GET["executante"])) {
    $descricaoExecutado = "";
} else {
    $descricaoExecutado = $_GET["descricaoExecutado"];
}

$situcaoOs = $_GET["situcao"];
/// Conexao com o banco de dados
$server = "localhost"; //nome do servidor host
$user = "root"; //nome do usuário
$senha = ""; //senha do banco de dados
$base = "dbsysman8"; //nome da base de dados
$conexao = mysqli_connect($server, $user, $senha, $base) or die("Erro na conexão!");
$descricao_utf8 = utf8_decode($descricao);
$descricaoExecutado_utf8 = utf8_decode($descricaoExecutado);
$patrimonio_utf8 = utf8_decode($patrimonio);
$emissor_utf8 = utf8_decode($emissor);
$executante_utf8 = utf8_decode($executante);
//envia sql
$sql = "INSERT INTO tbOs VALUES(null,'$dataEmissaoOs','$horaEmissaoOs',' $dataPrevistaOs',' $horaPrevistaOs','$dataConclusaoOs','$horaConclusaoOs',
    ' $patrimonio_utf8 ','$emissor_utf8','$executante_utf8','$descricao_utf8','$descricaoExecutado_utf8','$situcaoOs',5,5,5);";
echo ("O.S gravado com sucesso!");
// Verifica se a variável está vazia
if (empty($nome)) {
}
sleep(1);
$result = mysqli_query($conexao, $sql);
$cont = mysqli_affected_rows($conexao);
