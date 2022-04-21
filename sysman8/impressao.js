function ConfirmarImpressao()
{
var x;
var r=confirm("Deseja imprimir esta pagina?");
if (r==true)
  {
  //x="você pressionou OK!";
  VisualizarIpressao()
  }
else
  {
 // x="Você pressionou Cancelar!";
  }
document.getElementById("demo").innerHTML=x;
}
//Habilita a edição da ordem de
function HabilitarEdicao()
{

var x;
var r=confirm("Deseja habilitar edição?");
if (r==true)
  {
  //x="você pressionou OK!";
  selectedRowToInput()
  }
else
  {
 // x="Você pressionou Cancelar!";
  }
document.getElementById("demo").innerHTML=x;
}

////////////////////////////////////////////////////////////////////////////////////
function Grava_impressao(){
 var codigoOs=document.getElementById("codigoOs").value
var dataEmissaoOs=document.getElementById("dataEmissaoOs").value
 var horaEmissaoOs=document.getElementById("horaEmissaoOs").value
 var dataPrevistaOs=document.getElementById("dataPrevistaOs").value
var horaPrevistaOs=document.getElementById("horaPrevistaOs").value
 //var horaEmissaoOs=document.getElementById("dataConclusaoOs").value
 //var horaEmissaoOs=document.getElementById("horaConclusaoOs").value
// var patrimonio=document.getElementById("horaConclusaoOs").value
var patrimonio=document.getElementById("patrimonio").value
var executante=document.getElementById("executante").value

var descricao=document.getElementById("descricao").value;
var descricaoExecutado=document.getElementById("descricaoExecutado").value;
var situacao=document.getElementById("situacao").value;


document.getElementById("codigoOsImprimir").value =codigoOs;  
document.getElementById("dataEmissaoOsImprimir").value=dataEmissaoOs;
document.getElementById("horaEmissaoOsImprimir").value=horaEmissaoOs;
document.getElementById("dataPrevistaOsImprimir").value=dataPrevistaOs;
document.getElementById("horaPrevistaOsImprimir").value =horaPrevistaOs;
//document.getElementById("dataConclusaoOs").value =dataConclusaoOs;
//document.getElementById("horaConclusaoOs").value =horaConclusaoOs;
document.getElementById("patrimonioImprimir").value =patrimonio;
// document.getElementById("emissor").value=emissor=executante;
document.getElementById("executanteImprimir").value=executante ;
document.getElementById("descricaoImprimir").value =descricao;
document.getElementById("descricaoExecutadoImprimir").value =descricaoExecutado;
document.getElementById("situacaoImprimir").value=situacao ;

}