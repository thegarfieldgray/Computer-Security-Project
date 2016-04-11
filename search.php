<?php
  session_start();
  $query = $_GET['search'];
  $q = "SELECT * FROM product WHERE Product_Name Like '$query%'";
  try {
    $connection = new PDO("mysql:host=localhost;dbname=security", "root", "rewind95591");
   // $connection = new PDO("mysql:host=localhost;dbname=security", "root", "");
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $connection ->prepare($q);
    $result->execute();
    $result = $result->fetchAll();
    $_SESSION['search_res'] = $result;
    header('location: search_res.php');

  } catch(PDOException $err) {

      echo "Failed to connect to database";
      $connection = null;
  }
?>