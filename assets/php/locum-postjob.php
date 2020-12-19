<?php
session_start();
include ('connection.php');
include ('utils.php');
if(isset($_POST['post'])){
	$ID = $_SESSION['ID'];
	$title = escTxt($connection, $_POST['title']);
	$location = escTxt($connection, $_POST['location']);
	$description = escTxt($connection, $_POST['description']);
	$minidesc = escTxt($connection, $_POST['minidesc']);
	$closing = escTxt($connection, $_POST['closingDate']);
	$date = date("Y-m-d");
	// insert into vacancy table
	$query = "INSERT INTO `locum_vacancies` VALUES(NULL, $ID, '$date', '$closing', '$title', '$location', '$description', '$minidesc', 'Pending')";
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../locum_employer.php#posted"); // redirect user to home page
	}else{
		redirect_to("../../locum_employer.php?reply=error"); // redirect user to home page
	}
}
?>