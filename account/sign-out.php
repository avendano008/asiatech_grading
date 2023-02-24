<?php
session_start();

unset($_SESSION['email']);

if(isset($_SESSION['staff_id'])){
	unset($_SESSION['staff_id']);
	header('Location:../sign-in-admin.php');
}elseif (isset($_SESSION['student_number'])){
	unset($_SESSION['student_number']);
	header('Location:../sign-in-student.php');
}
?>