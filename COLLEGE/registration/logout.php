<?php
session_start();
unset($_SESSION['mid']);
unset($_SESSION['uname']);
unset($_SESSION['usn']);
header('location:../index.php');


?>