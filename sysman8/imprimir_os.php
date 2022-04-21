<?php
// Verifica se existe a variável

//$dataPrevistaOs = $_GET["dataPrevistaOs"];
//$horaPrevistaOs = $_GET["horaPrevistaOs"];
//$dataConclusaoOs = $_GET["dataConclusaoOs"];
//$horaConclusaoOs = $_GET["horaConclusaoOs"];
//$patrimonio = $_GET["patrimonio"];
//$emissor = $_GET["emissor"];
//$executante = $_GET["executante"];
//$descricao = $_GET["descricao"];
//$descricao = $_GET["descricao"];
//$descricaoExecutado = $_GET["descricaoExecutado"];
?>
<html>
<div id="logomarca">
    <img src="logomarini.jpg" alt="">
</div>
<h2>Ordem de serviço</h2>
<?php
echo ("Código da OS..:");
echo $_POST['codigoOsImprimir'];
echo ("------Data da emissão Os..:");
echo $_POST['dataEmissaoOsImprimir'];

echo ("------");
echo ("Hora da emissão os..:");
echo $_POST['horaEmissaoOsImprimir'];
echo ("------");
echo ("Data inicio os..:");
echo $_POST['dataPrevistaOsImprimir'];
echo ("------");
echo ("Hora inicio os..:");
echo $_POST['horaPrevistaOsImprimir'];
?>
<html>
<h4>Patrimonio:</h4>

</html>
<?php
echo $_POST['patrimonioImprimir'];
?>
<html>
<h4>Executante:</h4>

</html>
<?php
echo $_POST['executanteImprimir'];

?>
<html>
<h3>Descrição dos serviços a serem executados</h3>

</html>
<?php
$descricao = $_POST["descricaoImprimir"];
echo $descricao;

?>
<html>
<br>
-------------------------------------------------------------------------------------------------------------------------------------
<br>
<h3>Descrição dos serviços xecutados</h3>

</html>
<?php
$descricaoExecutado = $_POST["descricaoExecutadoImprimir"];
echo $descricaoExecutado;
?>
<html>
<p>
    -------------------------------------------------------------------------------------------------------------------------------------
    <br>
    Situação da OS.......:
<h3>

</html>

<?php
$situacao = $_POST["situacaoImprimir"];
echo $situacao;
?>
</h3>
<input type="button" value="Imprimir" onclick="print()">

</html>