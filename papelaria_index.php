<?php
include "acesso.php";
 
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
      $("#formulario").hide();
    });
</script>
    
    <title>Papelaria </title>
</head>
<body>

<h1>PAPELARIA </h1>

<!--FORMULÁRIO PARA CADASTRAR PRODUTOS OU SERVIÇOS NO SISTEMA-->
<div>
<h2>CADASTRAR PRODUTOS</h2>
<form action="inserindoservicos.php" method="POST" id="formulario">
<div class="fechar">
 <Label>
 <p>Código do Produto ou serviço: <input type="number" name="codigprod" /></p>
 </label>

 <label>
 <p>Nome do Produto ou Serviço: <input type="text" name="nomeprod" /></p>
 </label>

 <label>
 <p>Quantidade do Produto: <input type="number" name="quantprod" /></p>
 </label>

 <label>
 <p>Valor Unitário do Produto ou Serviço: <input type="text"  name="valorprod"/></p>
 </label>

 <p><button type="submit" value="Salvar" id="salvar" name="salvar">CADASTRAR</button></p>
 
</form>
</div>

<button id="hide">Fechar Formulário</button>
</div>


<!---------------------------------------------------------------->


<H2>SERVIÇOS</H2>
<tr>
    <td>Código</td> 
    <td>Nome</td>
    <td>Valor Unitário</td>
</tr>
<br>

  <?php

  //CÓDIGO DE BUSCAR OS DADOS DA TABELA SERVICOS
$buscar = "SELECT * FROM servicos_informatica";


$linhas="";
$dados = $pdo->query($buscar);
if ($dados->rowcount()>0){
  foreach($dados->fetchall((PDO::FETCH_ASSOC)as $servico){

     // TR - linhas//
     // TD - Colunas//
     
     $linhas.= "<br> <br> <tr data-id=".$servico['cod'].">";
     $linhas.="<td data-cod='". $servico['cod_serv_infor']."'>". $servico['cod_serv_infor']. "</td> &nbsp";
     $linhas.="<td data-nome=". $servico['nome_serv'].">". $servico['nome_serv']. "</td> &nbsp";
     $linhas.="<td data-quantd=". $servico['quant_serv'].">". $servico['quant_serv']. "</td> &nbsp";
     $linhas.="<td data-valor='". $servico['valor_unit_serv']."'>". $servico['valor_unit_serv']. "</td> &nbsp";

 $linhas.="<td>";
     $linhas.="<button onclick='salvar()' action='venda.php'>COMPRAR</button>";
      $linhas.="</td>";
      "&nbsp";

      echo "$linhas";"<br>";
    
 
    }
  }

    ?>

</body>
</html>
