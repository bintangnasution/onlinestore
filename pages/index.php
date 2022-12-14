<?php session_start();
        if(isset($_SESSION["is_login"])){
        header("Location: https://bintangnasution.000webhostapp.com/pages/dashboard.php");
        die();
        }else{
                header("Location: https://bintangnasution.000webhostapp.com/pages/login.php");
                die();
        }

?>