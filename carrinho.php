<?php
include "acesso.php";
session_start();

echo 'essa putaria será meu carrinho de compras do caralho';
$_SESSION ['id'] = 'cod';
$_SESSION['add'] = "nome_serv";

echo'<br/><a href="carrinho.php">CLIQUE RA ENVAR ESSE SATANÁS</a>'



?>

<?php
echo $_SESSION['iten'];
?>
