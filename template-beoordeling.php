<?php
/*
 * Template Name: Beoordelingspagina
 */

$title = get_the_title();
$content = get_the_content();

$img = get_stylesheet_directory_uri() . '/assets/img/c-1.jpg';
$img2 = get_stylesheet_directory_uri() . '/assets/img/c-2.jpg';
$img3 = get_stylesheet_directory_uri() . '/assets/img/c-3.jpg';
$img4 = get_stylesheet_directory_uri() . '/assets/img/c-4.jpg';
$img5 = get_stylesheet_directory_uri() . '/assets/img/c-5.jpg';
$img6 = get_stylesheet_directory_uri() . '/assets/img/c-6.jpg';
$img7 = get_stylesheet_directory_uri() . '/assets/img/c-7.png';


render('views/templates/custom.php', compact('title', 'content'));

?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="./assets/css/review.css">
    <!--Poppins-font-family-->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--Awesome-font-->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="header">
      <nav id="navbar">
          <ul id="menu">
           <a href="http://wordpress.les/homepage/"><strong><li>HOME</li></strong></a> 
           <a href="http://wordpress.les/homepage/"><strong><li>OVERZICHTSPAGINA</li></strong></a> 
           <a href="http://wordpress.les/homepage/"><strong><li>LOGIN</li></strong></a> 
          </ul>
      </nav>
    </div>
    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src="<?php echo $img3; ?>" alt="">
              <img src="<?php echo $img4; ?>" alt="">
              <img src="<?php echo $img5; ?>" alt="">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src="<?php echo $img3; ?>" alt="">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src="<?php echo $img4; ?>" alt="">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                 <img src="<?php echo $img5; ?>" alt="">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                 <img src="<?php echo $img6; ?>" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">Review Walibi</h2>
          <a href = "https://www.walibi.nl/nl" class = "product-link">Bezoek de Walibi site</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>9.7</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Reviewer: <span><strong>Demarcus Cousins</strong></span></p>
          </div>

          <div class = "product-detail">
            <h2>Hele prettige ervaring gehad...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
            <ul>
              <li>Plaats: <span>Biddinghuizen</span></li>
              <li>Adres: <span>Spijkweg 30</span></li>
              <li>Type: <span>Themapark</span></li>
              <li>Openingstijden: <span>10:00-17:00</span></li>
              <li>Prijs per persoon: <span>€38,-</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1" max = "10">
            <button type = "button" class = "btn"><strong>Reageer</strong></button>
        </div>
        </div>
      </div>
    </div>

    
    <script src="./assets/js/review.js"></script>

    <script>
      var navbar = document.getElementById("navbar")
      var menu = document.getElementById("menu")

      window.onscroll = function(){
        if(window.pageYOffset >= menu.offsetTop) {
          navbar.classList.add("sticky");
        }
        else{
          navbar.classList.remove("sticky");
        }
      }
    </script>
  </body>
</html>