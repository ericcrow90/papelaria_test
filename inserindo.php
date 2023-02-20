<?php
require "acesso.php";

//============================DADOS DO FORMULÁRIO========================================================//      
  
if(isset($_POST['salvar'])){
$cdg= $_POST['codigprod'];
  $nom = $_POST['nomeprod'];
  $quantd = $_POST['quantprod'];
  $vlrprod = $_POST['valorprod'];
  

  if($cdg == '' || $nom == '' || $quantd == '' || $vlrprod == ''){
    echo 'Preencha os campos.';
}else{
    $inserindo = $pdo->prepare("INSERT INTO servicos_informatica (cod_serv_infor, nome_serv, quant_serv, 
    valor_unit_serv)
    VALUES ('$cdg','$nom','$quantd','$vlrprod')");
    $inserindo->execute();
    echo 'Produto cadastrado com sucesso';

    //var_dump($inserindo);
  }
}

//=======================DADOS DO FORMULÁRIO==========================================================//
