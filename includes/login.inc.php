<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // getting data
  $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
  $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

  // instantiate signupcontr class
  include "../classes/dbh.classes.php";
  include "../classes/login.classes.php";
  include "../classes/login-contr.classes.php";
  $login = new loginContr($uid, $pwd);

  //running error hadnlers and user signup
  $login->loginUser();

  // Going back to front page
  header("location: ../index.php?error=none");
}