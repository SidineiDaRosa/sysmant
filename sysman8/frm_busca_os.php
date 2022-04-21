<?php
// Verifica se existe a variável
echo  "<script>alert('Email enviado com Sucesso!);</script>";
if (isset($_GET["dataEmissaoOs"])) {
    $dataEmissaoOs = $_GET["dataEmissaoOs"];
    $horaEmissaoOs = $_GET["horaEmissaoOs"];
    $dataPrevistaOs = $_GET["dataPrevistaOs"];//data prevista
    $horaPrevistaOs = $_GET["horaPrevistaOs"];
    $dataConclusaoOs = $_GET["dataConclusaoOs"];//data da conclusão
    
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

$situcaoOs = $_GET["situcao"];
// Conexao com o banco de dados
$server = "localhost"; //nome do servidor host
$user = "root"; //nome do usuário
$senha = ""; //senha do banco de dados
$base = "dbsysman8"; //nome da base de dados
$conexao = mysqli_connect($server, $user, $senha, $base) or die("Erro na conexão!");


// $sql = "SELECT * FROM tbOs";
//} else {
// $nome .= "%";
//-----------------------------------------------------------------------------------------------//
//Busca O.S pelos critérios de intervalo de datas e sitação
//-----------------------------------------------------------------------------------------------//
$sql = "SELECT * FROM tbOs WHERE dataPrevistaOs >='$dataPrevistaOs' AND dataConclusaoOs <=' $dataConclusaoOs'AND situacao='$situcaoOs'
ORDER BY dataPrevistaOs,horaPrevistaOs asc";
//}
sleep(1);
$result = mysqli_query($conexao, $sql);
$cont = mysqli_affected_rows($conexao);
// Verifica se a consulta retornou linhas
if ($cont > 0) {
    // Atribui o código HTML para montar uma tabela
    //<th>Data emissao</th>
    $tabela = "<table id='minhaTabela' border='0'>
                <thead>
                    <tr>
                        <th>Código O.S</th>
                        <th hidden>Data emissao</th>
                        <th hidden>Hora emissao</th>
                        <th>Data prevista</th>
                        <th>hora prevista</th>
                        <th>Data conclusão</th>
                        <th>hora conclusão</th>
                         <th>Patrimônio</th>
                        <th>Emissor</th>
                        <th>Executante</th>
                        <th>Descrição</th>
                        <th>Executado</th>
                        <th>Situação</th>
                        <th hidden>imagem</th>
                    </tr>
                </thead>
                <tbody>
                <tr>";
    $return = "$tabela";
    // Captura os dados da consulta e inseri na tabela HTML
    while ($linha = mysqli_fetch_array($result)) {
        $return .= "<td>" . utf8_encode($linha["codigoOs"]) ."</td>";
        $return .= "<td hidden>" . utf8_encode($linha["dataEmissaoOs"]) ."</td>";
        $return .= "<td hidden>" . utf8_encode($linha["horaEmissaoOs"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["dataPrevistaOs"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["horaPrevistaOs"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["dataConclusaoOs"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["horaConclusaoOs"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["patrimonio"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["emissor"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["executante"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["descricao"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["descricaoExecutado"]) . "</td>";
        $return .= "<td>" . utf8_encode($linha["situacao"]) . "</td>";
        $return .= "<td hidden>" . utf8_encode($linha["imagem"]) . "</td>";
        $return .= "</tr>";
    }
    echo $return .= "</tbody></table>";
} else {
    // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
    echo "Não foram encontrados registros!";
  
   
}

