<?php
// Verifica se existe a variável
if (isset($_GET["codigoOs"])) {
    $codigoOs = $_GET["codigoOs"];
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
// Conexao com o banco de dados
$server = "dbsysman8.mysql.uhserver.com"; //nome do servidor host
$user = "auxiliar1"; //nome do usuário
$senha = "senha@senha1"; //senha do banco de dados
$base = "dbsysman8"; //nome da base de dados
$conexao = mysqli_connect($server, $user, $senha, $base) or die("Erro na conexão!");
////////////////////////////////////////////////
//Converte os tados para UTF8
// $descricao_utf8 = utf8_decode($descricao);
$descricaoExecutado_utf8 = utf8_decode($descricaoExecutado);
$executante_utf8 = utf8_decode($executante);
//Atualiza os dados da tabela ordem de serviço
$sql = "UPDATE tbOs SET dataPrevistaOs=' $dataPrevistaOs',
  horaPrevistaOs='$horaPrevistaOs',
  dataConclusaoOs=' $dataConclusaoOs',
  horaConclusaoOs=' $horaConclusaoOs',
  executante='$executante_utf8',
  descricaoExecutado='$descricaoExecutado_utf8 ',
  situacao='$situcaoOs',
  gravidade=5,
  urgencia=5,
  tendencia=5,
  imagem='imagem.jpg'

   WHERE codigoOs=$codigoOs";
/////////////////////////////////////
echo ("O.S atualizada com sucesso!");
// Verifica se a variável está vazia
if (empty($nome)) {
}
sleep(1);
$result = mysqli_query($conexao, $sql);
$cont = mysqli_affected_rows($conexao);
