<?php session_start(); if(!isset($_SESSION["is_login"])){
    header("Location: https://bintangnasution.000webhostapp.com/pages/login.php");
    die();
}?>
<?php include_once"../layout/header_dashboard.php";?>
                <main>
                  Ini adalah halaman dashboard
                  
                </main>
<?php include_once"../layout/footer_dashboard.php";?>
