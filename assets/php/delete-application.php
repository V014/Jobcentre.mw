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
		$_SESSION['reply'] = "deleted";
		redirect_to('../../jobseeker.php#applied');
		exit();
	}else{
		$_SESSION['reply'] = "delerror";
		redirect_to('../../jobseeker.php#applied');
		exit();
	}
}
?>