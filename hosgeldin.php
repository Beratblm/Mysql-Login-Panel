<?php 
session_start();

 if(!isset($_SESSION['isim']) && !isset($_SESSION['parola'])){
     header("Location:login.php");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Giris Paneli</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <body>
        <style>

        
        </style>
       
        <h1 class="text-center"><?php echo "Hosgeldin... ".$_SESSION['isim'];?></h1>
        <div class="container">
           <div class="card">
            <div class="col-lg-6">
            <div class="form-group">
            <a href="control/cikis.php">Çıkıs</a>
        </div>
                <ul>
                    <?php 
                     for($i=1;$i<=5;$i++){
                        echo "<li>$i</li>";
                     }

                    
                    ?>
                </ul>
             </div>
           </div>        
        </div>
    </body>
</html>
