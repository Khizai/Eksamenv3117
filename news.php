<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
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
        <li><a href="#" class="activelink">Nyheder</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Print</a></li>
        <li><a href="#">Kontakt</a></li>
        <?php if(isset($_SESSION['username']) && $_SESSION['Permission'] == '3') {
          echo "<li><a href='admin.php'>Admin</a></li>";
        } ?>
      </ul>
      <input type="text" placeholder="Søg på sitet" class="pull-right">
      <div id="login" class="col-md-12 pull-right noGutter">
        <?php
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
        <div class="col-xs-6 pull-right textright hidden-xs"><h4>Welcome <?php echo $_SESSION['username']; ?></h4><a href="logout.php?logout=true">Log off</a></div>
        <?php
      }
      else{
        ?>
        <form class="pull-right" method="post" action="login.php">
          <input type="name" name="username" id="username" placeholder="Bruger" class="" required>
          <input type="password" name="password" id="password" placeholder="Password" class="" required>
          <input type="submit" class="btn btn-default" value="Log Ind">
        </form>
        <a href="#" class="col-xs-12 text-right">Registrér dig her..</a>
      </div>
      <?php
    } 
    ?>
  </div>
</header>
  <main class="container">
    <section class="col-xs-12 col-md-9">
      <form class="form-horizontal" id="inputform" action="writepost.php" method="post" id="newPost">
      <div class="form-group">
        <label class="control-label col-sm-3" for="imgsrc">Image Source:</label>
        <div class="col-sm-8">
          <input type="text" name="imgsrc" class="form-control" id="imgsrc" placeholder="Enter the Image name and type">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="imgalt">Image alt text:</label>
        <div class="col-sm-8">
          <input type="text" name="imgalt" class="form-control" id="imgalt" placeholder="Enter Image alt text">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="heading">Heading:</label>
        <div class="col-sm-8">
          <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Blog Heading" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="content">Blog text:</label>
        <div class="col-sm-8"> 
         <!--  <input type="text" name="content" class="form-control" id="content" placeholder="Enter Blog Text" required> -->
         <textarea name="content" id="content" cols="50" rows="10"></textarea>
        </div>
      </div>
      <input class="btn btn-default" type="submit" name="submit" value="Submit" id="submit"/>
    </form>
    <?php include "readpost.php" ?>
    </section>
    <aside class="col-md-3 hidden-xs">
      <div id="sponsors" class="col-xs-12">
        <div id="text">
          <h4>Vores sponsorer</h4>
        </div>
        <img src="img/sponsor1.jpg" alt="" class="col-xs-12">
        <img src="img/sponsor2.jpg" alt="" class="col-xs-12">
        <img src="img/sponsor3.jpg" alt="" class="col-xs-12">
        <img src="img/sponsor4.jpg" alt="" class="col-xs-12">
      </div>
    </aside>
  </main>
  <footer class="col-md-12">
    <div id="info">
      <ul class="text-center col-xs-12 col-sm-3 col-sm-offset-1 border-right">
        <li>Islændere i DK</li>
        <li>Tågehornvej 32</li>
        <li>9300 Ølstykke</li>
        <li>islandere(at)live.com</li>
        <li><i class="fa fa-phone-square" aria-hidden="true"></i>12345678</li>
      </ul>
      <ul class="text-center col-xs-12 col-sm-3 border-right">
        <li>Mandag-fredag:</li>
        <li>08:00-13:00</li>
        <li>Lørdag:</li>
        <li>09:00</li>
      </ul>
      <ul class="col-xs-12 col-sm-3 ">
        <li><img src="img/guy.jpg" alt="">Thomas Karse</li>
        <li><img src="img/guy2.jpg" alt="">Bjarme Arm</li>
        <li><img src="img/guy3.jpg" alt="">Lisbeth Grøn</li>
      </ul>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>