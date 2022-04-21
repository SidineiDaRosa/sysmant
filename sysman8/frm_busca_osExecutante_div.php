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


$executante = $_GET["executante"];


$situcaoOs = $_GET["situcao"];
// Conexao com o banco de dados
$server = "localhost"; //nome do servidor host
$user = "root"; //nome do usuário
$senha = ""; //senha do banco de dados
$base = "dbsysman8"; //nome da base de dados
$conexao = mysqli_connect($server, $user, $senha, $base) or die("Erro na conexão!");

// linha de comando sql
$executante .= "%";
//$sql = "SELECT * FROM tbOs WHERE executante like '$executante'AND dataPrevistaOs >='$dataPrevistaOs'AND dataConclusaoOs <=' $dataConclusaoOs'AND situacao='$situcaoOs'
//ORDER BY dataPrevistaOs ASC";
$sql="SELECT * FROM tbOs INNER JOIN tb_colaboradores  ON tbOs.executante=tb_colaboradores.nomeColaborador WHERE 
executante like '$executante'AND dataPrevistaOs >='$dataPrevistaOs'AND dataPrevistaOs <=' $dataConclusaoOs'AND situacao='$situcaoOs'
ORDER BY dataPrevistaOs ASC";

sleep(1);
$result = mysqli_query($conexao, $sql);
$cont = mysqli_affected_rows($conexao);
// Verifica se a consulta retornou linhas
if ($cont > 0) {
    // Atribui o código HTML para montar uma tabela
  
    while ($linha = mysqli_fetch_array($result)) {
        //$return .= "<td>" . utf8_encode($linha["codigoOs"]) . "</td>";
       // $return .= "<td hidden>" . utf8_encode($linha["dataEmissaoOs"]) . "</td>";
       // $return .= "<td hidden>" . utf8_encode($linha["horaEmissaoOs"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["dataPrevistaOs"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["horaPrevistaOs"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["dataConclusaoOs"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["horaConclusaoOs"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["patrimonio"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["emissor"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["executante"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["descricao"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["descricaoExecutado"]) . "</td>";
       // $return .= "<td>" . utf8_encode($linha["situacao"]) ."</td>";
        // $return .= "<td>" . "<input type='button' id='btEditar' name='btEditar' value='Editar'>" . "</td>";
        
        $return.="<div id='div-Os'>".
        "<h1 id='h1-cod-os'>".utf8_encode($linha["codigoOs"])."</h1>".'&nbsp'.
        'Data de emissão da os'.'hora de emissão da os'."<br>".
        utf8_encode($linha["dataEmissaoOs"]). utf8_encode($linha["horaEmissaoOs"])."<br>".
        utf8_encode($linha["dataPrevistaOs"])."<br>".
        utf8_encode($linha["horaPrevistaOs"])."<br>".
        utf8_encode($linha["dataConclusaoOs"])."<br>".
        utf8_encode($linha["horaConclusaoOs"])."<br>".
        utf8_encode($linha["dataEmissaoOs"])."<br>".
        utf8_encode($linha["patrimonio"])."<br>".
        utf8_encode($linha["emissor"])."<br>".
        utf8_encode($linha["descricao"])."<br>".
        "</div>";
        echo $return .="</div>";
    }
       
  
} else {
    // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
    echo "Não foram encontrados registros!";
}
