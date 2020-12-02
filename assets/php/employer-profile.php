<?php
session_start();
include ('connection.php');
include ('utils.php');
if(isset($_POST['update'])){
	$ID = $_SESSION['ID'];
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$ceo = escTxt($connection, $_POST['ceo']);
    $companyName = escTxt($connection, $_POST['companyName']);
    $orgType = escTxt($connection, $_POST['organisationType']);
    $location = escTxt($connection, $_POST['location']);
    $industry = escTxt($connection, $_POST['industry']);
    $website = escTxt($connection, $_POST['website']);
    $city = escTxt($connection, $_POST['city']);
    $description = escTxt($connection, $_POST['description']);
    $contact = escTxt($connection, $_POST['contact']);
    $address = escTxt($connection, $_POST['address']);
	// update user database
	$query = "UPDATE `user` SET `Email` = '$email', `Password` = '$password' WHERE `Id` = $ID";
	$result = $connection -> query($query);
	// update jobseeker database
	$query2 = "UPDATE `employer` SET `Ceo` = '$ceo', `CompanyName` = '$companyName', `OrganisationType` = '$orgType', `Location` = '$location', `Description` = '$description', `City` = '$city', `Industry` = '$industry', `Contact` = '$contact', `Address` = '$address', `Website` = '$website' WHERE `EmployerID` = $ID";
	$result2 = $connection -> query($query2);
	if($result){
		if($result2){
			redirect_to("../../employer.php#profile?reply=success"); // redirect user to home page
			exit();
		}else{
			redirect_to("../../employer.php#profile?reply=error1"); // redirect user to home page
			exit();
		}
	}else{
		redirect_to("../../employer.php#profile?reply=error2"); // redirect user to home page
		exit();
	}
}
?>