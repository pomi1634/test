<?php require_once('../Connections/con1.php'); ?>

<?php session_start();
session_destroy();
session_unset();
header("location: ../index.php");
exit();
?>