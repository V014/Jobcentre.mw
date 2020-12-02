<?php
session_start();
include ('connection.php');
include ('utils.php');

if(isset($_POST['update'])){
	$ID = $_SESSION['ID'];
	$Username = escTxt($connection, $_POST['username']);
	$Password = escTxt($connection, $_POST['password']);

	$query = "UPDATE `admin` SET `Username` = '$Username', `Password` = '$Password' WHERE `Id` = $ID";
	$result = $connection -> query($query);
	
	if($result){
		redirect_to("../../panel.php#profile"); // redirect user to home page
	}else{
		redirect_to("../../panel.php#profile?reply=error"); // redirect user to home page
	}
}
?>