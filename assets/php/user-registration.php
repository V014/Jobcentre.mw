// if the button register is pressed, insert user into database
if(isset($_POST['register'])){
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$role = $_POST["role"];
	$date = date("Y-m-d");
	// check if any of the details are identical
	$query = "SELECT `Email` FROM `user`";
	$result = $connection -> query($query);
	while($row = $result -> fetch_assoc()){
		$usedEmail = $row['Email'];
	}
	// if there is a similar email in the db tell the user
	if(!empty($usedEmail) && $email == $usedEmail){
		redirect_to("../../index.php?reply=used#login"); // redirect user to home page
		exit();
	}else{
		// insert the user cridentials
		$query = "INSERT INTO user VALUES(NULL, '$email', '$password', '$role', '$date')";
		$results = $connection -> query($query);
		$query2 = "SELECT `Id` FROM `user` WHERE `Email` = '$email'";
		$result2 = $connection -> query($query2);
		$row2 = $result2 -> fetch_assoc();
		$ID = $row2['Id']; // collect assigned ID
		$query3 = "INSERT INTO `$role` VALUES(NULL, $ID, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
		$result3 = $connection -> query($query3);
		if($results){
			if(isset($query3)){
				session_destroy();
				session_start();
				$_SESSION['ID'] = $ID;
				$_SESSION['role'] = $role;
				$_SESSION['email'] = $email;
				redirect_to("../../$role.php"); // redirect to login if invalid
				exit();
			}else{
				redirect_to("../../$role.php"); // redirect to home if valid
				exit();
			}
		}else{
			redirect_to("../../index.php#login"); // redirect to login if invalid
			exit();
		}
	}
}