<?php
session_start();
include ('connection.php');
include ('utils.php');
if(isset($_POST['post'])){
	$ID = $_SESSION['ID'];
	$title = escTxt($connection, $_POST['title']);
	$location = escTxt($connection, $_POST['location']);
	$minidesc = escTxt($connection, $_POST['minidesc']);
	$jobType = escTxt($connection, $_POST['jobType']);
	$description = escTxt($connection, $_POST['description']);
	$closing = escTxt($connection, $_POST['closingDate']);
	$date = date("Y-m-d");
	// insert into vacancy table
	$query = "INSERT INTO `vacancies` VALUES(NULL, $ID, '$date', '$closing', '$title', '$location', '$description', '$minidesc', 'Pending', '$jobType')";
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../employer.php#posted?reply=success"); // redirect user to home page
	}else{
		redirect_to("../../employer.php#postjob?reply=error"); // redirect user to home page
	}
}
?>