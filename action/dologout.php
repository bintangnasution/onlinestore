<?php
session_start();
session_destroy();
header("Location: https://bintangnasution.000webhostapp.com/pages/login.php?bye");
die();
?>