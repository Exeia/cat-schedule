<?php

session_start();
unset($_SESSION['dog']);
header("location:../index.php");
?>
