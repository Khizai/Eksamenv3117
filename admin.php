<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eksamen V3.1 2017 - Admin</title>
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway" rel="stylesheet">
  <!-- GOOGLE FONTS -->
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- BOOTSTRAP -->
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- CUSTOM CSS -->
</head>
<body>
  <header class="col-md-12">
    <div id="top" class="col-md-12 text-center">
      <h1 class="col-xs-6 col-sm-7 col-md-10">Islændere i DK</h1>
      <img src="img/medlem-emblem.png" alt="" class="pull-right">
    </div>
    <div id="bottom" class="col-md-12 pull-right">
      <ul class="col-md-7" id="navigation">
        <li><a href="index.php">Forside</a></li>
        <li><a href="news.php">Nyheder</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Print</a></li>
        <li><a href="contact.php">Kontakt</a></li>
        <?php if(isset($_SESSION['username']) && $_SESSION['Permission'] == '3') {
          echo "<li><a href='admin.php' class='activelink'>Admin</a></li>";
        } ?>
      </ul>
      <div id="imaginary_container"> 
        <div class="input-group stylish-input-group">
          <input type="text" class="form-control pull-right"  placeholder="Søg på sitet..." >
          <span class="input-group-addon">
            <button type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>  
          </span>
        </div>
      </div>
      <!-- LOGIN SYSTEM -->
      <div id="login" class="col-md-12 pull-right noGutter">
        <?php
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
        <div class="col-xs-6 pull-right text-right"><h4>Welcome <?php echo $_SESSION['username']; ?></h4><a href="logout.php?logout=true">Log ud</a></div>
        <?php
      }
      else{
      } 
      ?>
    </div>
    <!-- LOGIN SYSTEM -->
  </header>
  <main class="container">
    <?php include "getusers.php" ?>
  </main>
  <footer class="col-md-12">
    <div id="info">
      <ul class="text-center col-xs-12 col-sm-3 col-sm-offset-1 border-right xs-noborder">
        <li>Islændere i DK</li>
        <li>Tågehornvej 32</li>
        <li>9300 Ølstykke</li>
        <li>islandere(at)live.com</li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i>12345678</li>
      </ul>
      <ul class="text-center col-xs-12 col-sm-3 border-right xs-noborder">
        <li>Mandag-fredag:</li>
        <li>08:00-13:00</li>
        <li>Lørdag:</li>
        <li>09:00</li>
      </ul>
      <ul class="col-xs-12 col-sm-4 text-center">
        <li><img src="img/guy.jpg" alt="Billede af Thomas Karse">Thomas Karse</li>
      <li><img src="img/guy2.jpg" alt="Billeder af Bjarne Arm">Bjarme Arm</li>
      <li><img src="img/guy3.jpg" alt="Billede af Lisbeth Grøn">Lisbeth Grøn</li>
      </ul>
    </div>
  </footer>
  <!-- JQUERY/BOOTSTRAP -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- JQUERY/BOOTSTRAP -->
</body>
</html>