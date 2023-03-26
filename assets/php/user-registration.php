<?php
session_start(); // start new one
include('connection.php');
include('utils.php'); 
// if the button register is pressed, insert user into database
if(isset($_POST['register'])){
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
	$date = date("Y-m-d");

	// check if the email is identical with another user
	$query = "SELECT `Email` FROM `user`";
	$result = $connection -> query($query);
	while($row = $result -> fetch_assoc()){
		$usedEmail = $row['Email'];
	}
	// if there is a similar email in the db tell the user
	if(!empty($usedEmail) && $email == $usedEmail){
		$_SESSION['reply'] = "used";
		redirect_to("../../index.php#login"); // redirect user to home page
		exit();
	}else{
		// insert the user cridentials
		$query = "INSERT INTO `user` VALUES(NULL, '$email', '$password', '$role', '$date')";
		$results = $connection -> query($query);
		// collect the ID
		$query2 = "SELECT `Id` FROM `user` WHERE `Email` = '$email' AND `password` = '$password'";
		$result2 = $connection -> query($query2);
		$row2 = $result2 -> fetch_assoc();
		$ID = $row2['Id'];
		// insert into the jobseeker table
		$query3 = "INSERT INTO `$role` VALUES(NULL, $ID, '$fullname', '$gender', '$dob', '$nationality', '$city', '$contact', '$address', '$skills', '$location', '$industry')";
		$result3 = $connection -> query($query3);

		if($results){
			if(isset($query3)){
				session_start();
				$_SESSION['ID'] = $ID;
				$_SESSION['role'] = $role;
				$_SESSION['email'] = $email;
				$_SESSION['reply'] = "registered";
				redirect_to("../../$jobseeker.php"); // redirect to login if invalid
				exit();
			}else{
				$_SESSION['reply'] = "error";
				redirect_to("../../registration.php"); // redirect to home if valid
				exit();
			}
		}else{
			$_SESSION['reply'] = "error";
			redirect_to("../../registration.php"); // redirect to login if invalid
			exit();
		}
	}
}
?>