<?php
include ('connection.php');
include ('utils.php');

if(isset($_POST['login'])){
	$Username = escTxt($connection, $_POST['username']);
	$Password = escTxt($connection, $_POST['password']);
	$query = "SELECT `Id` FROM `admin` WHERE `Username` = '$Username' AND `Password` = '$Password'";
	$result = $connection -> query($query);
	$row = $result -> fetch_assoc();
	$ID = $row['Id'];

	if($result){
		session_destroy(); // end previous session
		session_start(); // start new one
		$_SESSION['ID'] = $ID; 
		redirect_to("../../panel.php"); // redirect to login if valid
		exit();
	}else{
		redirect_to("../../admin.php"); // redirect to login if invalid
		exit();
	}
}
?>