<?php

if(isset($_GET['login-submit'])){

$userName = $_GET['username'];
$password = $_GET['password'];

try {
    $connection = new PDO("mysql:host=localhost;dbname=security", "root", "rewind95591");
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(empty($userName) && empty($password)){
        $emptyfield = "Field cannot be empty</br>";
        echo $emptyfield;
        echo "Redirecting to login screen...";
        header( "Refresh:1; url=index.php", true, 303);
    }

    $query = "SELECT * FROM customer";
    $query .=" WHERE Username = '" . $userName ."'";

    $result = $connection ->prepare($query);
    $result->execute();
    $result = $result->fetchAll();

    if(count($result) > 0){
        $user = $result[0];
        if($user['Password'] === $password){
            echo "redirect";
            header('location: home.php');
        }
        else{
            echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
            header( "Refresh:1; url=index.php", true, 303);
        }
    } 
    else{

    }
 }
catch(PDOException $err)
    {
    echo "Failed to connect to database";
    $connection = null;
    }
    $connection = null;

function validation($userName, $password){

    // $query = "SELECT userName, password FROM user";
    // $query .=" WHERE userName = '" . $userName ."' AND password = '" . $password . "'";

    if(empty($userName) && empty($password)){
        $emptyfield = "Field cannot be empty</br>";
        echo $emptyfield;
        echo "Redirecting to login screen...";
        header( "Refresh:1; url=index.php", true, 303);
    }

    //    $query = "SELECT * FROM user";
 //    $query .=" WHERE userName = '" . $userName ."'";

 //    $result = $connection ->prepare($query);
 //    $result->execute();
 //    $result = $result->fetchAll();

    // if(count($result) > 0){
    //  echo "Username already exist";
 //     //sleep(3);
 //     header( "Refresh:1; url=index.php", true, 303);
    // } else {
    //  inDatabase();
    // }
 //    die;
}
}

else if(isset($_GET['submit-button'])){
    header('location: signup.php');
}
?>