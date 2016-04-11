<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
} else {
    header('location: index.php');
}

if(isset($_GET['userName'])){

    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $userName = $_GET['userName'];
    $password = $_GET['password'];
    $Credit = $_GET['creditCard'];
    $Address = $_GET['address'];


try {
    //$connection = new PDO("mysql:host=localhost;dbname=security", "root", "rewind95591");
    $connection = new PDO("mysql:host=localhost;dbname=security", "root", "");
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE customer SET 
        First_Name = '$firstName',
        Last_Name = '$lastName',
        Username = '$userName',
        Credit_Card = '$Credit',
        Address = '$Address' WHERE Username = '" . $user['Username'] . "'";

    $res = $connection->exec($sql);
    
    if($res === 1){
        unset($_SESSION['user']);
        $query = "SELECT * FROM customer";
        $query .=" WHERE Username = '" . $userName ."'";
        $result = $connection ->prepare($query);
        $result->execute();
        $result = $result->fetchAll();
        $_SESSION['user'] = $result[0];
        header('location: account.php');
    }
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$connection = null;

}