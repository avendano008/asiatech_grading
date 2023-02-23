<?php
session_start();

unset($_SESSION['email']);
header('Location:sign-in-admin.php');
?>