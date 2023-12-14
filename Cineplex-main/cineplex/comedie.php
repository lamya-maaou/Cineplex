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
           <?php  include('nav.php');   ?>
            <!-- END NAV -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>dados</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                        Apres sa sortie de prison, Dados décide de renouer avec son passé d'escroc. 
                Cette fois-ci il n'est plus le petit larron qui se contente de petits larcins mais voit les choses en grand.
                 Pour ce faire il recrute quatre femmes aux destins chaotiques et se lance dans plusieurs opérations de cambriolage,
                  de chantage et d'escroquerie qui sont toutes motivées par des raisons personnelles
                        </p>
                        <div class="genre">

                            <a href="#" class="category">comedie</a>
                            <a href="#" class="category">comedie</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        

                    </div>

                    <img src="image/dados.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>30-million</h1>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>
                        Le film raconte l’histoire de 3 jeunes amis, dont Samy qui va se retrouver en prison après avoir mis 
                un véhicule de police en feu, il a besoin de 300000 dhs (30 millions) pour payer sa caution et gagner sa liberté.
                        </p>
                        <div class="genre">
                            <a href="#" class="category">Drama</a>
                            <a href="#" class="category"><span>4K</span></a>

                        </div>
                        

                    </div>

                    <img src="image/30-melyoun.jpg">

                </div>

              </div>

              <div class="swiper-slide">

                <div class="image">

                    <div class="black">

                        <h1>korsa</h1>
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

                    <img src="image/korsa.jpg">

                </div>

              </div>
              </div>
              
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>

    </section>



<!--Each movie is represented by a "card" element containing details like movie name, image, rating, category, etc.-->
    <div class="second">

        <div class="latest">

            

            <div class="box">

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">korsa</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/korsa.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">lesBandits</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/lesBandits.jpeg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">dados</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/dados.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">30-million</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/30-melyoun.jpg">

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

                            <p class="name">30-million</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/30-melyoun.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">dados</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/dados.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">lesBandits</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/lesBandits.jpeg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">korsa</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2023</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/korsa.jpg">

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

                            <p class="name">dados</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2017</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/dados.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">30-million</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/30-melyoun.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">korsa</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/korsa.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">lesBandits</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2011</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/lesBandits.jpeg">

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

                            <p class="name">lesBandits</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2017</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/lesBandits.jpeg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">korsa</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/korsa.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">30-million</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2022</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/30-melyoun.jpg">

                </div>

                <div class="card">

                    <div class="details">

                        <div class="left">

                            <p class="name">dados</p>
                            <div class="date_quality">
                                <p class="quality">HD</p>
                                <p class="date">2011</p>
                            </div>
                            <p class="category">comedie</p>

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

                    <img src="image/dados.jpg">

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