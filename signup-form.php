<?php
    session_start();
    require_once('User.php');
    $user = new User();

    if($user->isLoggedin() != true)
    {
        $user->redirect('index.php');
    }

    if(isset($_POST['sign-up']))
    {
        $fname = strip_tags($_POST['firstName']);
        $lname = strip_tags($_POST['lastName']);
        $username = strip_tags($_POST['userName']);
        $password = strip_tags($_POST['password']);
        $credit = strip_tags($_POST['creditCard']);
        $address = strip_tags($_POST['address']);

        try
        {
            $stmt = $user->runQuery("SELECT Username FROM customer WHERE Username=:uname");
            $stmt->execute(array(':uname'=>$username));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                
            if($result['Username'] === $username) {
                $error = "Sorry that username is already taken.";
                $user->redirect('signup.php?error=' . $error);
            }
            else
            {
                if($user->signup($fname, $lname, $username, $password, $credit, $address)){	
                    $user->redirect('index.php');
                }
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }	
    }
?>