<?php 
include 'header_func.php';
include 'baglanti.php';
include 'secure.php';
session_start();

if(isset($_POST['submit'])){
    
    $isim = $_POST["isim"];
    $parola = $_POST["parola"];
    $isim = secure($isim);
    $parola = secure($parola);
    $check = $_POST['check'];

    
    
    if((empty($email)) && (empty($parola))){
        echo "<h1 style='color:brown;'>isim ve parola bos olamaz</h1>";
        comeback(1,"login.php");
    }

     


    else{
        $sorgu = $baglanti->prepare("SELECT isim,parola FROM kullanicilar");
        $sorgu->execute();
        while($sonuc = $sorgu->fetch(PDO::FETCH_ASSOC)){
            if($isim == $sonuc['isim'] && $parola == $sonuc['parola']){
                //echo "Geçerli isim";
                
                    $_SESSION['isim'] = $isim;
                    $_SESSION['parola'] = $parola; 
                    header("Location:../hosgeldin.php");
                   

                    
                }
                else{
                    header("Location:../login.php");
                }

               
                
            }
             
        }
    
    




}else{
   // header("Location:../login.php",true,303);
    comeback(1,"login.php");
    echo "<h1>Yetkisiz erisim sağladiniz</h1>";
   exit;
}




?>