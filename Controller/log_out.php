<?php
    if(isset($_POST["logoutbtn"])){
            session_destroy();
            unset($_SESSION['email']);
            header('location:index.php');
        }
    if(!$_SESSION['email'])
    {
        header('location:index.php');
    }


?>