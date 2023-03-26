<?php
session_start();
include ('connection.php');
include ('utils.php');

if(isset($_POST['delete'])){
	$id = $_POST['selected'];
	$table = 'applications';
	
	$deleteStmt = deleteInfo($id, $table);
	$query = $connection -> query($deleteStmt);
	
	if($query){
		redirect_to('../../employer.php?reply=done#applied');
		exit();
	}else{
		redirect_to('../../employer.php?reply=error#applied');
		exit();
	}
}
?>