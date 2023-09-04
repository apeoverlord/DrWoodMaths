<?php

class Dbh {
  protected function connect() {
    try {
        $username = "root";
        $password ="";
        $dbh = new PDO('mysql:host=localhost;dbname=phpproject01', $username, $password);
        return $dbh;

    }
    catch(PDOException $e) {
      print "Error!: ". $e->getMessage() . "<br/>";
      die();

    }
  }
}