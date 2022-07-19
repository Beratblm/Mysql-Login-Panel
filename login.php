<?php 
session_start();

if(isset($_SESSION['isim']) && isset($_SESSION['parola'])){
  header("Location:hosgeldin.php");
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
    


    <form method="POST" name="frm" class="form" action="control/login_control.php">
        <div class="container d-flex justify-content-center w-50">
     <img src="images/hacker.jpg" class="w-50" alt="hacker.jpg">
      </div>

        <div class="container-fluid d-flex justify-content-center mt-3">
        <div class="col-lg-6">
            <div class="card">
  <div class="form-group">
    <label for="exampleInputEmail1">Email Adresi</label>
    <input type="text" name="isim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">E-postanız Gizlidir.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parola</label>
    <input type="password" class="form-control" name="parola" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" name="beni_hatirla">Beni Hatırla</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Giris</button>
</form>
</div>
</div>
</div>



        
    </body>
</html>