<?php
include ('connection.php');
include ('utils.php');

if(isset($_POST['approve'])){
	$Selected = $_POST['selected'];
	$query = "UPDATE `vacancies` SET `Status` = 'Posted' WHERE `Id` = $Selected";
	$result = $connection -> query($query);

	if($result){
		redirect_to("../../panel.php#posted");
		exit();
	}else{
		redirect_to("../../panel.php#posted?reply=error");
		exit();
	}
}
if(isset($_POST['delete'])){
	$Selected = $_POST['selected'];
	$table = "vacancies";
	$query = "UPDATE `vacancies` SET `Status` = 'Pending' WHERE `Id` = $Selected";
	$result = $connection -> query($query);

	if($result){
		redirect_to("../../panel.php");
		exit();
	}else{
		redirect_to("../../panel.php#posted?reply=error");
		exit();
	}
}