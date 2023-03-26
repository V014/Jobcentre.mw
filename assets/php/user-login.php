<?php
session_start(); // start new one
include('connection.php');
include('utils.php'); 
if(isset($_POST['login'])){
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$selectedRole = $_POST['role'];
	// query the user cridentials
	$query = "SELECT `Id`, `Role` FROM user WHERE `Email` = '$email' And `Password` = '$password'";
	$results = $connection -> query($query);
	$row = $results -> fetch_assoc();
	$ID = $row['Id'];
	$role = $row['Role'];
	// check to see if there is a valid result
	if($row && !empty($role) && $role == $selectedRole){
		$_SESSION['ID'] = $ID;
		$_SESSION['role'] = $role;
		$_SESSION['email'] = $email;
		redirect_to("../../$role.php"); // redirect to page if valid
		exit();
	}else{
        $_SESSION['reply'] = "error";
		redirect_to("../../index.php#login"); // redirect to login if invalid
		exit();
	}
}
?>