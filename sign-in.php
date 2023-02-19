<?php

$mysqli = require __DIR__ . "/database.php";
$sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST['email']));
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
if ($user) {
	if(password_verify($_POST["password"], $user["password"])){
		session_start();
		$_SESSION["user_id"] = $user["id"];
		header("Location: index.php");
		exit();
	} else {
		die("Incorrect password!");
	}
}