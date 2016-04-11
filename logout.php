<?php
    session_start();
    // terminate the session
    session_destroy();
    header('location: index.php');
?>