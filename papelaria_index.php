<?php
session_start();
include "acesso.php";
 

?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
      
       
        
        <title>Papelaria Estação das Folhas</title>
    </head>
    <body>
    
    <h1>PAPELARIA ESTAÇÃO DAS FOLHAS</h1>
    
    <!--FORMULÁRIO PARA CADASTRAR PRODUTOS OU SERVIÇOS NO SISTEMA-->
    <div>
    <h2>CADASTRAR PRODUTOS</h2>
    <form action="inserindoservicos.php" method="POST" id="formulario">
    
    <div id="formulario1">
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
  

    <input type="button"  id="fechar_abrir_form" onclick="mudarNome();" value="Fechar Formulário"/>
  </div>
    
    
    
    <!---------------------------------------------------------------->
    
    
    <H2>SERVIÇOS</H2>
    <tr>
        <td>Código</td> 
        <td>Nome</td>
        <td>Quantidade</td>
        <td>Valor Unitário</td>
    </tr>
    <br>



 <?php

    //CÓDIGO DE BUSCAR OS DADOS DA TABELA SERVICOS
  $buscando = 'SELECT * FROM servicos_informatica';
  
  foreach ($pdo->query($buscando) as $servicos)
    echo $servicos['cod_serv_infor']."\t";
    echo $servicos['nome_serv'] . "\t";
    echo $servicos['quant_serv'] . "\t";
    echo $servicos['valor_unit_serv'] . "\t";

?>

</body>
</html>
