<?php
  include_once'header.php';
?>

  <section class="signup__form">
    <h2>Login</h2>
    <div class="signup__form__form">
      <form action="includes/login.inc.php" method="post">
        <input type="text" class="input_box" name="uid"  placeholder="Username/Email...">
        <input type="password" class="input_box" name="pwd" placeholder="Password...">
        <button type="submit" class="input_btn" name="submit">Login</button>
      </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields</p>";
      }
      else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login information</p>";
      }
    }
    ?>
  </section> 

<?php
  include_once'footer.php';
?>