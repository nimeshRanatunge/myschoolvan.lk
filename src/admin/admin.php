<?php
    session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: ./login.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: ./login.php");
    }

?>
<p>welcome to index.php</p>

<a href="./admin.php?logout=true">Logout</a>