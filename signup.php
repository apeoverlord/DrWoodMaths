<?php
  include_once'header.php';
?>

  <section class="signup__form">
    <h2>Sign Up</h2>
    <div class="signup__form__form">
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Sign Up</button>
      </form>
    </div>
  </section>


<?php
  include_once'footer.php';
?>