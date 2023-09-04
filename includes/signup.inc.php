<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // getting data
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
  $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
  $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
  $pwdRepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');

  // instantiate signupcontr class 
  include "../classes/dbh.classes.php";
  include "../classes/signup.classes.php";
  include "../classes/signup-contr.classes.php";
  $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

  //running error hadnlers and user signup
  $signup->signupUser();

  $userId = $signup->fetchUserId($uid);

  //Instantiate profileinfocont class
  include "../classes/profileinfo.classes.php";
  include "../classes/profileinfo-contr.classes.php";
  $profileInfo = new ProfileInfoContr($userId, $uid);
  $profileInfo->defaultProfileInfo();

  // Going back to front page
  header("location: ../index.php?error=none");
} 