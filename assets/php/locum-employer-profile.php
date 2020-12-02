<?php
session_start();
include ('connection.php');
include ('utils.php');
if(isset($_POST['update'])){
	$ID = $_SESSION['ID'];
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$ceo = escTxt($connection, $_POST['ceo']);
    $organisationName = escTxt($connection, $_POST['organisationName']);
    $location = escTxt($connection, $_POST['location']);
    $industry = escTxt($connection, $_POST['industry']);
    $website = escTxt($connection, $_POST['website']);
    $city = escTxt($connection, $_POST['city']);
    $description = escTxt($connection, $_POST['description']);
    $contact = escTxt($connection, $_POST['contact']);
    $address = escTxt($connection, $_POST['address']);
	// update user database
	$query = "UPDATE `locum` SET `Email` = '$email', `Password` = '$password' WHERE `Id` = $ID";
	$result = $connection -> query($query);
	// update jobseeker database
	$query2 = "UPDATE `locum_employer` SET `Ceo` = '$ceo', `OrganisationName` = '$organisationName', `Location` = '$location', `Description` = '$description', `City` = '$city', `Contact` = '$contact', `Address` = '$address', `Website` = '$website' WHERE `EmployerID` = $ID";
	$result2 = $connection -> query($query2);
	if($result){
		if($result2){
			redirect_to("../../locum_employer.php#profile"); // redirect user to home page
			exit();
		}else{
			redirect_to("../../locum_employer.php#profile?reply=error1"); // redirect user to home page
			exit();
		}
	}else{
		redirect_to("../../locum_employer.php#profile?reply=error2"); // redirect user to home page
		exit();
	}
}
?>