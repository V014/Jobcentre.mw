<?php
session_start();
include ('connection.php');
include('utils.php');
if(isset($_POST['update'])){
	$vID = $_POST['update'];
	$desc = escTxt($connection, $_POST['desc']);
 
	$query = "UPDATE vacancies SET `Description` = '$desc' WHERE `Id` = $vID";
	$result = $connection -> query($query);

	if($result){
		redirect_to("../../edit_vacancies.php?id=$vID"); // redirect user to home page
		exit();
	}else{
		echo "error" . mysqli_error($connection);
		redirect_to("../../edit_vacancies.php?reply=error"); // redirect user to home page
		exit();
	}
}
?>