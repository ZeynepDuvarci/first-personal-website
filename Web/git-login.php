<!doctype html>
<html lang="tr">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Zeynep Duvarcı</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background:rgba(255, 255, 102,0.7)">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: Raleway;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Ana Sayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hakkımda.html">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
      <main>

<div class="container" style="font-family:Raleway">
    
    <?php 

        include("kullanicilar.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("Hoşgeldiniz 'b201210082'");
    
        }
    
        else 
        {
                echo "<br><br>Girilen email yada şifre yanlış tekrar giriş yapınız.<br>";
                header("Refresh: 1; url=login.php");
        }
    
    ?>
    
</div>

</main>
  
<img class="rounded mx-auto d-block" src="limon.jpg" alt="..." style="width: 75px; height: 75px;">

<footer class="text-black text-center"style="background-color:rgba(255, 255, 102,0.7); font-family: Raleway;">
  <br><br>
       Zeynep Duvarcı © 2020
  <br><br><br>
</footer>


</body>
</html>