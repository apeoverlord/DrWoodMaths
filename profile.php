<?php
  include_once'header.php';
  include "classes/dbh.classes.php";
  include "classes/profileinfo.classes.php";
  include "classes/profileinfo-view.classes.php";
  $profileInfo = new ProfileInfoView();
?>

  <section class="profile">
    <div class="profile-bg">
      <div class="wrapper">
        <div class="profile-info">
          <div class="profile-info-about">
            <h3>
              <?php
                $profileInfo->fetchTitle($_SESSION["userId"]);
              ?>
            </h3>
            <p>
              <?php
                $profileInfo->fetchText($_SESSION["userId"]);
              ?>
            </p>
            <p>
              <?php
                $profileInfo->fetchAbout($_SESSION["userId"]);
              ?>
            </p>
            <h3>FOLLOWERS</h3>
            <h3>FOLLOWING</h3>
          </div>
        </div>
        <div class="profile-content">
          <div class="profile-intro">
            <h3>HI IM JACK WOOD</h3>
            <p> random stuff</p>
          </div>
        </div>
        <div class="settings">
          <li class="navbar_btn"><a href="profilesettings.php" class="button">Settings</a></li>
        </div>
      </div>
    </div>
  </section>

<?php
  include_once'footer.php';
?>