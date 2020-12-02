<?php
include ('connection.php');
include ('utils.php');
if(isset($_POST['send'])){
	$message = escTxt($connection, $_POST['message']);
	$name = escTxt($connection, $_POST["name"]);
	$date = date("Y-m-d");
	$email = $_POST['email'];
	$query = "INSERT INTO `feedback` VALUES(NULL, '$name', '$email','$message', '$date')";
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../feedback.php#feedback?reply=sent");
		exit();
	}else{
		redirect_to("../../feedback.php#feedback?reply=error");
		exit();
	}
}
?>
