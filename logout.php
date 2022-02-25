<?php
session_start();
session_unset();
//unset($_SESSION["cell"]);
//unset($_SESSION["pass"]);
header("Location:login.php");
?>