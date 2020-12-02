<?php
include ('connection.php');
include ('utils.php');
if(isset($_POST['update'])){
	$Selected = $_POST['selected'];
	$Column = $_POST['column'];
	$Replacement = escTxt($connection, $_POST['replacement']);
	$query = "UPDATE `locum_vacancies` SET `$Column` = '$Replacement' WHERE `Id` = $Selected";
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../locum_employer.php#posted"); // redirect user to home page
		exit();
	}else{
		redirect_to("../../locum_employer.php#posted?reply=error"); // redirect user to home page
		exit();
	}
}

if(isset($_POST['delete'])){
	$Selected = $_POST['selected'];
	$table = 'locum_vacancies';
	$query = deleteInfo($Selected, $table);
	$result = $connection -> query($query);
	if($result){
		redirect_to("../../locum_employer.php#posted"); // redirect user to home page
		exit();
	}else{
		redirect_to("../../locum_employer.php#posted?reply=error"); // redirect user to home page
		exit();
	}
}
?>