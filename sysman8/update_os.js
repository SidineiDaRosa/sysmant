/**
  * Função para criar um objeto XMLHTTPRequest
  */

    function ConfUpdateOs(){ 
        let situacao = document.getElementById("situacao").value;
      var x;
      var r = confirm("Deseja atualizar este registro de ordem de serviço para: "+situacao+"?");
      if (r == true) {
        

        updateOs()
        x="você pressionou OK!";
      } else {

      }
    }
function CriaRequest() {
    try {
        request = new XMLHttpRequest();
    } catch (IEAtual) {

        try {
            request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (IEAntigo) {

            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (falha) {
                request = false;
            }
        }
    }

    if (!request)
        alert("Seu Navegador não suporta Ajax!");
    else
        return request;
}
/**
 * Função para enviar os dados
 */
function updateOs() {

    // Declaração de Variáveis
    var codigoOs = document.getElementById("codigoOs").value;
    var dataEmissaoOs = document.getElementById("dataEmissaoOs").value;
    var horaEmissaoOs = document.getElementById("horaEmissaoOs").value;
    var dataPrevistaOs = document.getElementById("dataPrevistaOs").value;
    var horaPrevistaOs = document.getElementById("horaPrevistaOs").value;
    var dataConclusaoOs = document.getElementById("dataConclusaoOs").value;
    var horaConclusaoOs = document.getElementById("horaConclusaoOs").value;
    var patrimonio = document.getElementById("patrimonio").value;
    var emissor = document.getElementById("emissor").value;
    var executante = document.getElementById("executante").value;
    var descricao = document.getElementById("descricao").value;
    var descricaoExecutado = document.getElementById("descricaoExecutado").value;
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis

    var result = document.getElementById("Resultado2");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "update_os.php?codigoOs="+codigoOs+
        "&dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&descricao=" + descricao +
        "&descricaoExecutado=" + descricaoExecutado +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de os
    xmlreq.onreadystatechange = function () {

        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                result.innerHTML = xmlreq.responseText;
            } else {
                result.innerHTML = "Erro: " + xmlreq.statusText;
            }
        }
    };
    xmlreq.send(null);
}


