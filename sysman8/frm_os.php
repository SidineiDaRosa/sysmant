<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SYSMAN 8</title>
  <link rel="stylesheet" type="text/css" href="indexEstilo.css" media="screen" />
  <script type="text/javascript" src="grava_os.js"></script>

</head>

<body>
  <h2><a href="index.html">Home</a></h2>
  <h3>Cadastrar ordem de serviço</h3>
  <div id="continer-div">
    <div class="Continer-inp">
      <label for="codigoOs">Código O.S:</label>
      <input type="number" id="codigoOs" name="codigoOs" placeholder="Código automático" disabled>
      <label for="dataEmissaoOs">Data emissão O.S:</label>
      <input type="date" id="dataEmissaoOs" name="dataEmissaoOs" placeholder="Data da emissão" required 
      value="<?php
      $hoje = date('Y-m-d');
      echo $hoje;
    ?>" disabled>
      <label for="horaEmissaoOs">Hora Emissão O.S:</label>
      <!--Busca a hora atual e atualiza dentro do campo hora emissao-->
      <input type="time" id="horaEmissaoOs" name="horaEmissaoOs" placeholder="Hora da emissão" required disabled>
      <script type="text/javascript" src="atualiza_hora.js"></script>
      
      <label for="dataPrevistaOs">Data prevista/Início O.S:</label>
      <input type="date" id="dataPrevistaOs" name="dataPrevistaOs" placeholder="Data da Prevista">
      <label for="horaPrevistaOs">Hora prevista/Início O.S:</label>
      <input type="time" id="horaPrevistaOs" name="horaPrevistaOs" placeholder="Hora da Prevista">
      <label for="dataConclusaoOs">Data conclusão O.S:</label>
      <input type="date" id="dataConclusaoOs" name="dataConclusaoOs" placeholder="Data da conclusão">
      <label for="horaConclusaoOs">Hora conclusão O.S:</label>
      <input type="time" id="horaConclusaoOs" name="horaConclusaoOs" placeholder="Hora da conclusão">

    </div>
    <div class="Continer-inp">
      <label for="patrimonio">Patrimônio:</label>
      <input type="texto" id="patrimonio" name="patrimonio" placeholder="Patrimônio" required>
      <!--Emissor da ordem e serviço-->
      <label for="emissor">Emissor:</label>
      <!--<input type="texto" id="emissor" name="emissor" placeholder="Emissor" required>-->
      <select type="c" name="emissor" id="emissor" placeholder="Digite o emissor">
        <option value="Sidinei da Rosa">Sidinei da Rosa</option>
        <option value="Claudiomir de Souza">Claudiomir de Souza</option>
        <option value="Elvis Missel">Elvis Missel</option>
        <option value="Osmar Júnior Marini">Osmar Júnior Marini</option>
        <option value="Gustavo">Gustavo</option>
        <option value="Reginaldo">Reginaldo</option>
        <option value="Alair Vaz">Alair Vaz</option>
        <option value="Osório">Osório</option>
        <option value="Zuizão">Zuizão</option>
        <option value="Jean">Jean</option>
        <option value="Segurança">Segurança</option>
        <option value="Secador">Secador</option>
        <option value="João Guedes">João Guedes</option>
        <option value="Joarez">Joarez</option>
        <option value="Deniz">Deniz</option>
        <option value="Cristian Gotardo">Cristian Gotardo"</option>
        <option value="Carlos">Carlos</option>
        <option value="Alceu">Alceu</option>

      </select>
       <!------------------------------------------------------------------------------------>
<!--Executante da ordem e serviço-->
      <label for="executante">Executante:</label>
      <!--<input type="texto" id="executante" name="executante" placeholder="Executante">-->
      <select type="c" name="executante" id="executante" placeholder="Digite o executante">
        <option value="Sidinei da Rosa">Sidinei da Rosa</option>
          <option value="Edno Fragoso">Edno Fragoso</option>
          <option value="Sidnei Czrny">Sidnei Czrny</option>
          <option value="Fernando H Cardoso">Fernando H Cardoso</option>
          <option value="Alessnadro Mendes">Alessnadro Mendes</option>
          <option value="Cristian Gotardo">Cristian Gotardo</option>
          <option value="Patrik">Patrik</option>
          <option value="Eletricista">Eletricista</option>
          <option value="Terceiro">Terceiro</option>
      </select>
    </div>
    <div class="Continer-inp">
      <label for="descServico">Descrição:</label>
      <textarea class="TextArea" name="descServico" id="descricao" cols="30" rows="5"
        placeholder="Descrição dos serviços a serem executados" required></textarea>
      <label for="descricaoExecutado">Descrição executado:</label>
      <textarea class="TextArea" name="descricaoExecutado" id="descricaoExecutado" cols="30" rows="5"
        placeholder="Descrição dos serviços executados"></textarea>
      <label for="situacao">Situação da O.S:</label>
      <select type="c" name="situacao" id="situacao" placeholder="Digite a situação">
        <option value="aberto">aberto</option>
        <option value="indefinido">indefinido</option>
        <option value="fechado">fechado</option>
        <option value="em execucao">em andamento</option>
      </select>
    </div>
  </div>
  <div class="continer-bt">
    <input class="inpbotao" type="button" id="btsalvar" name="btsalvar" value="Salvar" onclick="ConfSalvaOs();">
    <input class="inpbotao" type="button" id="btexcluir" name="btsalvar" value="Excluír" onclick="">
    <input class="inpbotao" type="button" id="bteditar" name="btsalvar" value="Editar" onclick="">

  </div>
  <h2>Resultado!</h2>
  <div id="Resultado"></div>
  <script>
    function ConfSalvaOs(){
      var x;
      var r = confirm("Deseja Salvar esta O.S...?");
      if (r == true) {
        PostDadosOs()
        //x="você pressionou OK!";
      } else {

      }
    }
  </script>
</body>
<footer>
</footer>

</html>