<?php
include ('connection.php');
include ('utils.php');
if(isset($_POST['view'])){
	$Selected = $_POST['selected'];
	redirect_to("../../edit_vacancies.php?id=$Selected"); // redirect user to home page
	exit();
}

if(isset($_POST['update'])){
	$Selected = $_POST['selected'];
	$Column = $_POST['column'];
	$Replacement = escTxt($connection, $_POST['replacement']);
	$query = "UPDATE `vacancies` SET `$Column` = '$Replacement' WHERE `Id` = $Selected";
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../employer.php#posted?reply=success"); // redirect user to home page
		exit();
	}else{
		redirect_to("../../employer.php#posted?reply=error"); // redirect user to home page
		exit();
	}
}

if(isset($_POST['delete'])){
	$Selected = $_POST['selected'];
	$table = 'vacancies';
	$query = deleteInfo($Selected, $table);
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../employer.php#posted?reply=success"); // redirect user to home page
		exit();
	}else{
		redirect_to("../../employer.php#posted?reply=error"); // redirect user to home page
		exit();
	}
}
?>