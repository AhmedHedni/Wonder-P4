<?php
/*
 * Template Name: Overzichtspagina
 */

$title = get_the_title();
$content = get_the_content();

$img = get_stylesheet_directory_uri() . '/assets/img/c-1.jpg';
$img2 = get_stylesheet_directory_uri() . '/assets/img/c-2.jpg';

render('views/templates/custom.php', compact('title', 'content'));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--Poppins-font-family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--Awesome-font-->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    
<title>Wonder© - Overzichtspagina</title>
</head>
<body>
    <!--Overzichtspagina-->
    <section id="overzicht">
        
    <!--Heading-->
        <div class="overzicht-heading">
            <span>Beoordelingen</span>
            <h1>Onze mening</h1>
        </div>

        <!--Review-box-container-->
        <div class="review-box-container">

            <!--BOX-1-->
            <div class="review-box">
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        
                    </div>
                    <!--img-->
                    <div class="profile-img">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Demarcus Cousins</strong>
                        <span>@demarcuscousins</span>
                    </div>

                    <!--reviews-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                    <!--review-text-->
                    <div class="review-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus culpa cum, vero, fugiat ea quo fugit praesentium quis ratione corrupti suscipit eveniet corporis animi in inventore ex ipsum aperiam!</p>
                    </div>

            </div>


                        <!--BOX-2-->
                        <div class="review-box">
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        
                    </div>
                    <!--img-->
                    <div class="profile-img">
                        <img src="<?php echo $img2; ?>" alt="">
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Niko Omilana</strong>
                        <span>@niko</span>
                    </div>

                    <!--reviews-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                    <!--review-text-->
                    <div class="review-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus culpa cum, vero, fugiat ea quo fugit praesentium quis ratione corrupti suscipit eveniet corporis animi in inventore ex ipsum aperiam!</p>
                    </div>

            </div>

                        <!--BOX-3-->
                        <div class="review-box">
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        
                    </div>
                    <!--img-->
                    <div class="profile-img">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Demarcus Cousins</strong>
                        <span>@demarcuscousins</span>
                    </div>

                    <!--reviews-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                    <!--review-text-->
                    <div class="review-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus culpa cum, vero, fugiat ea quo fugit praesentium quis ratione corrupti suscipit eveniet corporis animi in inventore ex ipsum aperiam!</p>
                    </div>

            </div>

                        <!--BOX-4-->
                        <div class="review-box">
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        
                    </div>
                    <!--img-->
                    <div class="profile-img">
                        <img src="<?php echo $img2; ?>" alt="">
                    </div>
                    <!--name-and-username-->
                    <div class="name-user">
                        <strong>Niko Omilana</strong>
                        <span>@niko</span>
                    </div>

                    <!--reviews-->
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>

                    <!--review-text-->
                    <div class="review-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta repellendus culpa cum, vero, fugiat ea quo fugit praesentium quis ratione corrupti suscipit eveniet corporis animi in inventore ex ipsum aperiam!</p>
                    </div>

            </div>
        </div>
    </section>
</body>
</html>