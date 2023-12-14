
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        cineplex
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="style/app.css">
    
</head>

<body>

    <!-- NAV -->
    <?php  include('nav.php');   ?>
    <!-- END NAV --> 
    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="image/kabol.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                road to kabul
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>drame et comedie</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>112 mins</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Le film suit l'histoire de deux frères, Sofiane et Mehdi, qui ont grandi en Tunisie mais qui sont d'origine afghane. Ils décident de partir en Afghanistan pour essayer de retrouver leur père, qu'ils n'ont jamais connu, et de découvrir leurs racines.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="html/cenima.html" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                 <span>voir le film</span> </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="image/ali-zaoui.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                ali zaoua
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>drame</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>100 mins</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                "Ali Zaoua" est un film marocain réalisé par Nabil Ayouch, sorti en 2000. Il raconte l'histoire de quatre jeunes garçons des rues de Casablanca, qui cherchent à survivre dans un monde difficile et violent.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="html/cenima.html" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>voir le film</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="image/Casanegra.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                casanegra
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>noir et drame</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>124 mins</span>
                                </div>
                                
                            </div>
                            <div class="item-content-description top-down delay-4">
                                "Casanegra" est un film marocain réalisé par Nour-Eddine Lakhmari, sorti en 2008. Le film suit l'histoire de deux amis d'enfance, Karim et Adil, qui grandissent dans la ville de Casablanca et qui cherchent à gagner leur vie en commettant des actes illégaux
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="html/cenima.html" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>voir le film</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="html/dados.html"><img src="image/dados.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Dados
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="html/casanegra.html"><img src="image/Casanegra.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                           casanegra
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>noir et drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="html/kharboucha.html"><img src="image/karboucha.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            kharboucha
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="html/mille_mois.html"><img src="image/mille-mois.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            mille-mois
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>84 mins</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                <a href="html/dados.html"><img src="image/dados.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            dados
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <a href="html/casanegra.html"><img src="image/Casanegra.jpg" alt=""></a>
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            casanegra
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>noir et drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="html/dados.html" class="movie-item">
                    <img src="image/dados.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            dados
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/mille_mois.html" class="movie-item">
                    <img src="image/mille-mois.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            mille mois
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/kharboucha.html" class="movie-item">
                    <img src="image/karboucha.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            kharboucha
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/casanegra.html" class="movie-item">
                    <img src="image/Casanegra.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>noir et drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/dados.html" class="movie-item">
                    <img src="image/dados.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            dados
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/casanegra.html" class="movie-item">
                    <img src="image/Casanegra.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            casanegra
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>noir et drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                
                <!-- MOVIE ITEM -->
                <a href="html/kharboucha.html" class="movie-item">
                    <img src="image/karboucha.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            kharboucha
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>drame</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    
                
    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="html/la_haut.html" class="movie-item">
                    <img src="image/la-haut.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            la-haut
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>animation,fantastique,famille</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>95 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/craods.html" class="movie-item">
                    <img src="image/les-craods.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Craods
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>animation,aventure,comedie,famille</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>98 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/asterix_oblex.html" class="movie-item">
                    <img src="image/asterix-oblex.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                           asterix-oblex
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie,aventure,peplum</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>112 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/pattie.html" class="movie-item">
                    <img src="image/pattie.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            pattie
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>animation,aventure,fantastique,famille</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>96 mins</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/la_haut.html" class="movie-item">
                    <img src="image/la-haut.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            la-haut
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>animation,fantastique,famille</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>95 mins</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/asterix_oblex.html" class="movie-item">
                    <img src="image/asterix-oblex.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            asterix-oblex
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>comedie,aventure,peplum</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>112 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="html/craods.html" class="movie-item">
                    <img src="image/les-craods.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            craods
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>animation,aventure,comedie,famille</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>98 mins</span>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <img src="image/la.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        la-haut
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>animation,fantastique,famille</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>95 mins</span>
                        </div>
                        
                    </div>
                    <div class="item-content-description">
                        "La-haut" (Up en anglais) est un film d'animation américain produit par les studios Pixar et sorti en 2009. Le film a été réalisé par Pete Docter et Bob Peterson
                    </div>
                    <div class="item-action">
                        <a href="html/cenima.html" class="btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>voir le film</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->


<!-- FOOTER -->

<?php  include('footer.php');   ?>

    <!-- END FOOTER -->



    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>

</body>

</html>

