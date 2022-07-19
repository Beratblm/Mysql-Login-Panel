<?php 

$dsn = "mysql:host=localhost;dbname=deneme";
$username = "root";
$password = "BeratBerat1_";

try{

    $baglanti = new PDO($dsn,$username,$password);
    echo "Baglanti basarili";
}catch(PDOException $e){
    echo "Baglanti hatasi... ".$e->getMessage();
    die;
}



?>