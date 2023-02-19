<?php
	
$_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
$_POST["confirm-password"] = password_hash($_POST["confirm-password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
	die("SQL Error: " . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["first-name"], $_POST["last-name"], $_POST["email"], $_POST["password"]);

if ($stmt->execute()) {
	header("Location: sign-in.html");
	exit();
} else {
	die($mysqli->error . " " . $mysqli->errno);
}
