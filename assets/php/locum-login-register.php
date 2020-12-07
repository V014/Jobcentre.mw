<?php
include ('connection.php');
include ('utils.php');
if(isset($_POST['login'])){
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$selectedRole = $_POST['role'];
	// query the user cridentials
	$query = "SELECT `Id`, `Role` FROM locum WHERE `Email` = '$email' And `Password` = '$password'";
	$results = $connection -> query($query);
	$row = $results -> fetch_assoc();
	$ID = $row['Id'];
	$role = $row['Role'];
	// check to see if there is a valid result
	if($row && !empty($role) && $role == $selectedRole){
		session_destroy(); // end previous session
		session_start(); // start new one
		$_SESSION['ID'] = $ID;
		$_SESSION['role'] = $role;
		$_SESSION['email'] = $email;
		redirect_to("../../locum_$role.php");
		exit();
	}else{
		redirect_to("../../locum.php#login");
		exit();
	}
}
// if the button register is pressed, insert user into database
if(isset($_POST['register'])){
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$role = $_POST['role'];
	$date = date("Y-m-d");
	// check if any of the details are identical
	$query = "SELECT `Email` FROM `locum`";
	$result = $connection -> query($query);
	while($row = $result -> fetch_assoc()){
		$usedEmail = $row['Email'];
	}
	// if there is a similar email in the db tell the user
	if(!empty($usedEmail) && $email == $usedEmail){
		redirect_to("../../locum.php#login?reply=emailused"); // redirect user to home page
		exit();
	}else{
		// insert the user cridentials
		$query = "INSERT INTO locum VALUES(NULL, '$email', '$password', '$role', '$date')";
		$results = $connection -> query($query);
		$query2 = "SELECT `Id` FROM `locum` WHERE `Email` = '$email'";
		$result2 = $connection -> query($query2);
		$row2 = $result2 -> fetch_assoc();
		$ID = $row2['Id']; // collect assigned ID
		$query3 = "INSERT INTO `locum_$role` VALUES(NULL, $ID, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Blocked')";
		$result3 = $connection -> query($query3);
		if($results){
			if(isset($query3)){
				session_destroy();
				session_start();
				$_SESSION['ID'] = $ID;
				$_SESSION['role'] = $role;
				$_SESSION['email'] = $email;
				redirect_to("../../locum_$role.php"); // redirect to home
				exit();
			}else{
				redirect_to("../../locum.php#login"); 
				exit();
			}
		}else{
			redirect_to("../../locum.php#login"); // redirect to login if invalid
			exit();
		}
	}
}
?>