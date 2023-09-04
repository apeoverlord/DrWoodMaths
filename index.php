<?php
  include_once'header.php';
?>

<section class="index-intro">
 <?php
  if (isset($_SESSION["userUid"])) {
    echo "<p>Hello there " . $_SESSION["userUid"] . "</p>";
  }
 ?>
</section>
    <h1>THIS IS THE HOME PAGE</h1>
<?php
  include_once'footer.php';
?>