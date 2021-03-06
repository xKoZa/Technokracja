<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0"> 
<title>TechnoNews</title>
<link rel="stylesheet" href="main.css"/>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>

<nav>
    <div class="container">
    <h1>TechnoNews</h1>
    <div class="menu">
        <a href="index.php" >Główna</a>
        <a href="about.php" class="is-active">O nas</a>
        <a href="contact.php">Kontakt</a>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="profile.php">Profil</a>';
            }
            else{
                echo '<a href="login.php">Logowanie</a>';
            }
        ?>
    </div>
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
    </div>
</nav>
<script src="main.js"></script>

<br><br>
<section class="about">
    <div class="text-ab">
      <br>
        <h1>O nas</h1>
        <h5>Powstanie TechnoNews</h5>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <button type="button">Skontaktuj się z nami</button>
    </div>
</section>

<footer class="footer">
    <div class="inner-footer">
        <div class="social-links">
         
                <li class="social-items"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li class="social-items"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
           
        </div>
        <div class="quick-links">
            <ul>

                <li class="quick-items"><a href="#">Regulamin</a></li>

            </ul>
        </div>
    </div>
    <div class="outer-footer">
        Copyright &copy; TechnoNews Corp. All Rights Reserved.
    </div>
</footer>
</body>

</html>