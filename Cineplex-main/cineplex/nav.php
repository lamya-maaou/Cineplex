<?php session_start(); ?>
<div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="accueil.php" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Cine<span class="main-color">ple</span>x
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="accueil.php">Home</a>
                    </li>
                    <li  class="dropdown1"> 
                        <a class="">categorie</a>
                        <div class="dropdown-content1">
                        <a href="drame.php">drame</a>
                        <a href="animation.php">animation</a>
                        <a href="comedie.php">comedie</a>
                        </div> 
                    </li>
                    
                   
                        <?php if(isset($_SESSION['username'])): ?>
                            <li  class="dropdown1"> 
                            <a class=""><span><?= $_SESSION['username']  ?> </span></a>
                            
                            <div class="dropdown-content1">
                            <a href="logout.php">Déconnexion</a>
                           </div> 
                           </li>
                        <?php else: ?>
                            <li>
                        <a href="login.php" class="btn btn-hover">
                            <span>Sign in</span>
                        </a>
                        </li>
                        <?php endif; ?>
                   
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
</div>
<script src="app.js"></script>