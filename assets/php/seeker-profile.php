<?php
session_start();
include ('connection.php');
include('utils.php');
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
	$industry = escTxt($connection, $_POST['industry']);
	$contact = escTxt($connection, $_POST['contact']);
	$address = escTxt($connection, $_POST['address']);
	$skills = escTxt($connection, $_POST['skills']);
 
	$query = "UPDATE `user` SET `Email` = '$email', `Password` = '$password' WHERE `Id` = $ID";
	$result = $connection -> query($query);
	// update jobseeker database
	$query2 = "UPDATE `jobseeker` SET `Fullname` = '$fullname', `Gender` = '$gender', `Dob` = '$dob', `Location` = '$location', `Nationality` = '$nationality', `City` = '$city', `Industry` = '$industry', `Contact` = '$contact', `Address` = '$address', `Skills` = '$skills' WHERE `UserID` = $ID";
	$result2 = $connection -> query($query2);
	if($result){
		if($result2){
			redirect_to("../../jobseeker.php#profile"); // redirect user to home page
			exit();
		}else{
			redirect_to("../../jobseeker.php#profile?reply=textonly"); // redirect user to home page
			exit();
		}
	}else{
		redirect_to("../../jobseeker.php#profile?reply=emailused"); // redirect user to home page
		exit();
	}
}
?>