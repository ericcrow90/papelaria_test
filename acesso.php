<?php
try {
$pdo=new PDO("mysql:host=localhost;dbname=papelaria","root","");
}catch(PDOException $e){

    echo $e->getMessage();

}

?>
