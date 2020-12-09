<?php
include ('connection.php');
include ('utils.php');

if(isset($_POST['approve'])){
	$Selected = $_POST['selected'];
	$query = "UPDATE `locum_vacancies` SET `Status` = 'Posted' WHERE `Id` = $Selected";
	$result = $connection -> query($query);

	if($result){
		redirect_to("../../panel.php#locum_vacancies?id=approved");
		exit();
	}else{
		redirect_to("../../panel.php#locum_vacancies?reply=error");
		exit();
	}
}
if(isset($_POST['delete'])){
	$Selected = $_POST['selected'];
	$query = "UPDATE `locum_vacancies` SET `Status` = 'Pending' WHERE `Id` = $Selected";
	$result = $connection -> query($query);

	if($result){
		redirect_to("../../panel.php#locum_vacancies?reply=declined");
		exit();
	}else{
		redirect_to("../../panel.php#locum_vacancies?reply=error");
		exit();
	}
}