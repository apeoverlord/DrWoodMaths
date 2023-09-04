<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HTML CSS Website</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/reset.css" />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body> 
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="index.php" id="navbar__logo"><i class="fas fa-brain"></i>DrWood Maths</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span><span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item"><a href="index.php" class="navbar__links">Home</a></li>
          <li class="navbar__item"><a href="/tech.html" class="navbar__links">Tech</a></li>
          <?php
            if (isset($_SESSION["userUid"])) {
              echo "<li class='navbar__item'><a href='profile.php' class='navbar__links'>Profile</a></li>";
              echo "<li class='navbar__item'><a href='includes/logout.inc.php' class='navbar__links'>Log out</a></li>";
            }
            else {
              echo "<li class='navbar__item'><a href='login.php' class='navbar__links'>Login</a></li>";
              echo "<li class='navbar__btn'><a href='signup.php' class='button'>Sign Up</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>