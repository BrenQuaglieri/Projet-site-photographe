<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>fivetok</title>
  <?php wp_head() ?>
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/app.css">
  <script src="js/app.js"></script>
  <script>require('initialize');</script>
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- Navbar mobile -->
        <!--<div class="navbar-mobile d-flex row d-lg-none">
            <div class="navbar-mobile__left">
                  <li> <a href="#"><i class="fa fa-bars"></i></a></li>
            </div>
            <img src="/visuels/leovht.png" alt="">
            <div class="navbar-mobile__right row">
                    <li class="navlinks"><a href="#"><i class="fa fa-sign-out"></i></a></li>
                    <li class="navlinks"><a href="#"><i class="fa fa-user-circle"></i></a></li>
            </div>
        </div>
        <! Navbar desktop -->
      <div class="navbar-desktop d-none d-lg-flex row">
      <?php
                                  wp_nav_menu([
                                      'menu' => 'navbar-left',
                                      'container' => '',
                                      'theme_location' => 'main',
                                      'menu_class' => 'navbar-desktop__left row'
                                  ]);

                                  wp_nav_menu([
                                      'menu' => 'navbar-right',
                                      'container' => '',
                                      'theme_location' => 'main',
                                      'menu_class' => 'navbar-desktop__right row'
                                  ]);
                              ?>
          <!--<div class="navbar-desktop__left row">
              <li class="navlinks"><a href="http://localhost/hyperspace/Site-photographe" class="active"><i class="fa fa-home"></i> Acceuil</a></li>
              <li class="navlinks"><a href="#" class="active"><i class="fa fa-camera-retro"></i> Séries</a></li>
              <li class="navlinks"><a href="#" class="active"><i class="fa fa-envelope"></i> Contact</a></li>
          </div>-->
          <!--<img src="/visuels/leovht.png" alt="">-->
          <!--<div class="navbar-desktop__right row">
              <li class="navlinks"><a href="#" class="active"><i class="fa fa-user-circle"></i> S'inscrire</a></li>
              <li class="navlinks"><a href="#" class="active"><i class="fa fa-sign-out"></i> Se connecter</a></li>
          </div>-->
      </div>
  </header>
  <!-- burger pour la navbar mobile -->
  <div class="burger">
      <li class="navlinks"><a href="http://localhost/hyperspace/Site-photographe" class="active"><i class="fa fa-home"></i> Accueil</a></li>
      <li class="navlinks"><a href="template-parts/posts/series.php" class="active"><i class="fa fa-camera-retro"></i> Séries</a></li>
      <li class="navlinks"><a href="#" class="active"><i class="fa fa-envelope"></i> Contact</a></li>
      <li class="navlinks"><a href="#" class="active"><i class="fa fa-facebook-square"></i></a> <a href="#" class="active"><i class="fa fa-instagram"></i></a> <a href="#" class="active"><i class="fa fa-twitter-square"></i></a></li>
  </div>
