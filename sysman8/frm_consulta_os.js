//Seleciona o tipo de consulta
function TipoDeConsulta() {
    let tipoDeConsulta = document.getElementById("tipoDeConsulta").value;
    let tipoConsultaInt = parseInt(tipoDeConsulta)

    switch (tipoConsultaInt) {

        case 1:
            BuscaPelaDataEmissao();
            break;
        case 2:
            BuscaPeloExecutante();
            break;
        case 3:
            ConsultaOsDataFinal()
            break;
        case 4:
            ConsultaOsDataInicial()
            break;
        case 5:
            CodOs();
            break;
        case 6:
            ConsultaOsEntreDataInicial();
            break;
        case 7:
            ConsultaOsEntreDataInicialDiv();
            break;
        default:
            alert("não foi possivel a seleção")

    }
};

//BUSCA OS PELO CÓDIGO.
function CodOs() {

    let codOs = document.getElementById("codigoOs").value;
    alert("Deseja buscar a OS :" + codOs)
    buscaOsPeloCodigo();

}
//BUSCA OS POR UM INTERVALO DE DATAS E SITUAÇÃO.
function BuscaPelaDataEmissao() {
    BuscaOsDtSituacao()
}
//BUSCA OS POR EXECUTANTE E DATAS
function BuscaPeloExecutante() {
    Get_Executante()
}


/**
  * Função para criar um objeto XMLHTTPRequest
  */
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
function BuscaOsDtSituacao() {

    // Declaração de Variáveis
    var dataEmissaoOs = document.getElementById("dataEmissaoOs").value;
    var horaEmissaoOs = document.getElementById("horaEmissaoOs").value;
    var dataPrevistaOs = document.getElementById("dataPrevistaOs").value;
    var horaPrevistaOs = document.getElementById("horaPrevistaOs").value;
    var dataConclusaoOs = document.getElementById("dataConclusaoOs").value;
    var horaConclusaoOs = document.getElementById("horaConclusaoOs").value;
    var patrimonio = document.getElementById("patrimonio").value;
    var emissor = document.getElementById("emissor").value;
    var executante = document.getElementById("executante").value;
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis

    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "frm_busca_os.php?dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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
/**
 * Função para enviar os dados
 */
function Get_Executante() {

    // Declaração de Variáveis
    var dataEmissaoOs = document.getElementById("dataEmissaoOs").value;
    var horaEmissaoOs = document.getElementById("horaEmissaoOs").value;
    var dataPrevistaOs = document.getElementById("dataPrevistaOs").value;
    var horaPrevistaOs = document.getElementById("horaPrevistaOs").value;
    var dataConclusaoOs = document.getElementById("dataConclusaoOs").value;
    var horaConclusaoOs = document.getElementById("horaConclusaoOs").value;
    var patrimonio = document.getElementById("patrimonio").value;
    var emissor = document.getElementById("emissor").value;
    var executante = document.getElementById("executante").value;
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis
    alert(executante)
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "frm_busca_osExecutante.php?dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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
function buscaOsPeloCodigo() {
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
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "frm_busca_os_cod.php?codigoOs=" + codigoOs + "&dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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
function ConsultaOsDataInicial() {

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
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "consulta_os_data_inicial.php?codigoOs=" + codigoOs + "&dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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
//Consulta os entre data inicial
function ConsultaOsEntreDataInicial() {

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
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "consulta_os_data_prevista.php?codigoOs=" + codigoOs + "&dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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
//Consulta os entre data inicial div
function ConsultaOsEntreDataInicialDiv() {

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
    var situacao = document.getElementById("situacao").value;
    //fim das variáveis
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();

    // Exibi a imagem de progresso
    result.innerHTML = '<img src="loading.gif"/>';
    // Iniciar uma requisição
    xmlreq.open("GET", "frm_busca_osExecutante_div.php?codigoOs=" + codigoOs + "&dataEmissaoOs=" + dataEmissaoOs +
        "&horaEmissaoOs=" + horaEmissaoOs +
        "&dataPrevistaOs=" + dataPrevistaOs +
        "&horaPrevistaOs=" + horaPrevistaOs +
        "&dataConclusaoOs=" + dataConclusaoOs +
        "&horaConclusaoOs=" + horaConclusaoOs +
        "&patrimonio=" + patrimonio +
        "&emissor=" + emissor +
        "&executante=" + executante +
        "&situcao=" + situacao, true);

    // Atribui uma função para ser executada sempre que houver uma mudança de ado
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

