<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" href="style/stylecategorie.css">
    <link rel="stylesheet" href="style/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>
            <!-- NAV -->
           <?php  include('nav.php');?>
            <!-- END NAV -->


            <!--les films-->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>casanegra</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                        Dans le Casablanca d'aujourd'hui, deux amis d'enfance, Adil et Karim, vivent d'expédients et de petites combines.
                 L'un emploie des enfants vendeurs de cigarettes au détail, et décide de mettre sa vie sur le droit chemin et d'aider sa famille.
                  L'autre a trouvé la solution miracle à tous ses problèmes : acheter un visa et un contrat de travail pour émigrer vers Malmö,
                   en Suède, ville mythifiée dont il rêve à travers une carte postale.
                        </p>
                        <div class="genre">

                            <a href="#" class="category">Action</a>
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        

                    </div>

                    <img src="image/casanegra.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>ali-zaoua</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Consectetur distinctio quis, ea commodi repellendus 
                            fugiat aspernatur perspiciatis optio pariatur quod est, 
                            nihil enim nemo saepe possimus sequi consequuntur, neque 
                            eius.
                        </p>
                        <div class="genre">
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        

                    </div>

                    <img src="image/ali-zaoui.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>Road to kabul</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Consectetur distinctio quis, ea commodi repellendus 
                            fugiat aspernatur perspiciatis optio pariatur quod est, 
                            nihil enim nemo saepe possimus sequi consequuntur, neque 
                            eius.
                        </p>
                        <div class="genre">

                            
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        

                    </div>

                    <img src="image/kabol.jpg">

                </div>

              </div>
              </div>
              
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>

    </section>




    <div class="second">

        <div class="latest">

            

            <div class="box">

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">casanegra</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>9.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/Casanegra.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Road_to_kabul</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>7.1</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="./html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/kabol.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Ali Zaoui</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>4.6</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/ali-zaoui.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">kharboucha</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">Drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>6.3</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>
                    </div>

                    <img src="image/karboucha.jpg">

                </div>
            </div>

        </div>

    </div>





    <div class="upcoming">

        <div class="movies_box">

            

            <div class="box">

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">kharboucha</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/karboucha.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Ali Zaoua</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/ali-zaoui.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Casanegra</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/Casanegra.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Road to kabul</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/kabol.jpg">

                </div>


            </div>

        </div>

    </div>
    <div class="show">

        <div class="tv_show">

            <div class="box">

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Road to kabul</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2017</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>8.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/kabol.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">casanegra</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>8.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/Casanegra.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">kharboucha</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>7.4</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/karboucha.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Ali zaoua</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2011</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>9.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/ali-zaoui.jpg">

                </div>
            </div>

        </div>

    </div>





    <div class="show">

        <div class="tv_show">

            <div class="box">

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Ali zaoua</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2017</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>8.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                            <i class="fa-solid fa-play"></i>

                        </div></a>

                    </div>

                    <img src="image/ali-zaoui.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">kharboucha</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>8.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                         <i class="fa-solid fa-play"></i>

                           </div></a>

                    </div>

                    <img src="image/karboucha.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">Road to kabul</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>7.4</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

                       <i class="fa-solid fa-play"></i>

                           </div></a>

                    </div>

                    <img src="image/kabol.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">casanegra</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2011</p>
                            </div>
                            <p class="category">drame</p>

                            <div class="info">

                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <p>9.2</p>
                                </div>
                                <div class="time">
                                    <i class="fa-regular fa-clock"></i>
                                    <p>120min</p>
                                </div>

                            </div>

                        </div>

                        <a href="html/cenima.html"><div class="right">

<i class="fa-solid fa-play"></i>

</div></a>

                    </div>

                    <img src="image/Casanegra.jpg">

                </div> 
            </div>

        </div>

    </div>

<!-- FOOTER SECTION -->
<?php  include('footer.php');   ?>
<!--  END FOOTER SECTION -->


<!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="app.js"></script>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
    
</body>
</html>