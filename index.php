﻿<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Hjemmeside om islænder heste og blog med links til samarbejdspartnere">
  <title>Eksamen V3.1 2017</title>
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
        <li><a href="#" class="activelink">Forside</a></li>
        <li><a href="news.php">Nyheder</a></li>
        <li><a href="#">Sitemap</a></li>
        <li><a href="#">Print</a></li>
        <li><a href="contact.php">Kontakt</a></li>
        <!--Tjekker hvorvidt brugeren har admin niveau-->
        <?php if(!empty($_SESSION['username']) && $_SESSION['Permission'] == '3') {
          echo "<li><a href='admin.php'>Admin</a></li>";
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
        <!--Tjekker om der er en bruger logget på-->
        <?php
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
        <div class="col-xs-12 pull-right text-right"><h4>Velkommen <?php echo $_SESSION['username']; ?></h4><a href="logout.php?logout=true">Log ud</a></div>
        <?php
      }
      else{
        ?>
        <form class="pull-right" method="post" action="login.php">
          <input type="name" name="username" id="username" placeholder="Bruger" class="" required>
          <input type="password" name="password" id="password" placeholder="Password" class="" required>
          <input type="submit" class="btn btn-default" value="Log Ind">
        </form>
        <a href="reg.php" class="col-xs-12 text-right">Registrér dig her..</a>
      </div>
      <?php
    } 
    ?>
  </div>
  <!-- LOGIN SYSTEM -->
</header>
<main class="container">
  <section class="col-md-12">
    <div id="row1" class="col-md-3 col-xs-6">
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg1.jpg" alt="" class="img-responsive">
        <h3>Article 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure suscipit vero, dicta deserunt voluptatum, totam consectetur quibusdam itaque nemo optio aut quidem fugiat at magni placeat earum accusantium mollitia porro.</p>
      </article>
      <div id="link1" class="noGutter text-center links col-xs-12">
        <a href="#"><i class="fa fa-book fa-2x col-xs-12"></i></i>Dokumenter</a>
      </div>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg2.jpg" alt="" class="img-responsive">
        <h3>Article 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure suscipit vero, dicta deserunt voluptatum, totam consectetur quibusdam itaque nemo optio aut quidem fugiat at magni placeat earum accusantium mollitia porro.</p>
      </article>
    </div>
    <div id="row2" class="col-md-3 col-xs-6">
      <div id="link2" class="noGutter text-center links col-xs-12">
        <a href="#"><i class="fa fa-link fa-2x col-xs-12" aria-hidden="true"></i>Links</a>
      </div>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg3.jpg" alt="" class="img-responsive">
        <h3>Article 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure suscipit vero, dicta deserunt voluptatum, totam consectetur quibusdam itaque nemo optio aut quidem fugiat at magni placeat earum accusantium mollitia porro.</p>
      </article>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg4.jpg" alt="" class="img-responsive">
        <h3>Article 4</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam nemo quod quam sint nisi dolores inventore repellendus, ad, illo error cum saepe soluta omnis incidunt vel quaerat aliquid delectus. Fugit.</p>
      </article>
    </div>
    <div id="row3" class="col-md-3 col-xs-6">
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg5.jpg" alt="" class="img-responsive">
        <h3>Article 5</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime repellat nobis at, ipsa itaque praesentium animi labore, perferendis cumque id voluptas omnis nulla magnam accusamus quo fugiat iste obcaecati libero.</p>
      </article>
      <div id="link3" class="noGutter text-center links col-xs-12">
        <a href="#"><i class="fa fa-shopping-cart fa-2x col-xs-12" aria-hidden="true"></i>Marked</a>
      </div>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg6.jpg" alt="" class="img-responsive">
        <h3>Article 6</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sed, amet eveniet doloribus ex voluptatibus fugit illo sapiente quia nihil! Hic perferendis commodi necessitatibus perspiciatis. Exercitationem commodi, velit deleniti odio.</p>
      </article>
    </div>
    <div id="row4" class="col-md-3 col-xs-6">
      <div id="link4" class="noGutter text-center links col-xs-12">
        <a href="#"><i class="fa fa-calendar fa-2x col-xs-12" aria-hidden="true"></i>Events</a>
      </div>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg7.jpg" alt="" class="img-responsive">
        <h3>Article 7</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ipsum repellendus mollitia odio rem, quia dolorum corporis necessitatibus. Expedita natus, sunt dolorem culpa blanditiis dignissimos sit, illo facilis possimus iste.</p>
      </article>
      <article class="mainArticle noGutter mainArticles col-xs-12">
        <img src="img/articleImg8.jpg" alt="" class="img-responsive">
        <h3>Article 8</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur magni non quo optio. Neque voluptatum quis dolores, odit ducimus saepe, esse id praesentium in temporibus suscipit ex similique, itaque! Ipsa.</p>
      </article>
    </div>
  </section>
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