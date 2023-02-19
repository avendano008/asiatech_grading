<?php
include'../connect/connect.php';
session_start();

if(!isset($_SESSION['email'])){
    header('location:../sign-in.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href="logout.php">logout</a>
</body>
</html>