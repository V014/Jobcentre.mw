<?php
session_start();
include ('connection.php');
include ('utils.php');
if(isset($_POST['update'])){
	$ID = $_SESSION['ID'];
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$fullname = escTxt($connection, $_POST['fullname']);
	$gender = escTxt($connection, $_POST['gender']);
	$dob = escTxt($connection, $_POST['dob']);
	$location = escTxt($connection, $_POST['location']);
	$nationality = escTxt($connection, $_POST['nationality']);
	$city = escTxt($connection, $_POST['city']);
	$contact = escTxt($connection, $_POST['contact']);
	$address = escTxt($connection, $_POST['address']);
	$profession = escTxt($connection, $_POST['profession']);
 
	$query = "UPDATE `locum` SET `Email` = '$email', `Password` = '$password' WHERE `Id` = $ID";
	$result = $connection -> query($query);
	// update jobseeker database
	$query2 = "UPDATE `locum_jobseeker` SET `Fullname` = '$fullname', `Gender` = '$gender', `Dob` = '$dob', `Location` = '$location', `Nationality` = '$nationality', `City` = '$city', `Contact` = '$contact', `Address` = '$address', `Profession` = '$profession' WHERE `UserID` = $ID";
	$result2 = $connection -> query($query2);
	if($result){
		if($result2){
			$_SESSION['reply'] = "updated";
			redirect_to("../../locum_jobseeker.php#profile");
			exit();
		}else{
			$_SESSION['reply'] = "error";
			redirect_to("../../locum_jobseeker.php#profile");
			exit();
		}
	}else{
		$_SESSION['reply'] = "used";
		redirect_to("../../locum_jobseeker.php#profile"); 
		exit();
	}
}
?>