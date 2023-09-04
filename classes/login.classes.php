<?php

class Login extends Dbh {
  protected function getUser($uid, $pwd) {
    $stmt = $this->connect()->prepare('SELECT usersPwd FROM users WHERE usersUid = ? OR usersEmail = ?;');
    
    if(!$stmt->execute(array($uid, $pwd))) {
      $stmt = null;
      header("location: ../index.php?error=stmtfailed");
      exit();
    }

    if($stmt->rowCount() == 0) {

      $stmt = null;
      header("location: ../index.php?error=usernotfound");
      exit();
    }

    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd = password_verify($pwd, $pwdHashed[0]["usersPwd"]);

    if($checkPwd == false) {

      $stmt = null;
      header("location: ../index.php?error=wrongpwd");
      exit();
    }
    elseif($checkPwd ==true) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE usersUid = ? OR usersEmail = ? AND usersPwd = ?;');

      if(!$stmt->execute(array($uid, $uid, $pwd))) {
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
      }

      if($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION["userId"] = $user[0]["usersId"];
      $_SESSION["userUid"] = $user[0]["usersUid"];
      $stmt = null;
    }


    $stmt = null;
  }
}