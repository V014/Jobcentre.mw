<?php
include ('connection.php');
include ('utils.php');

if(isset($_POST['delete'])){
	$id = $_POST['selected'];
	$table = 'locum_applications_employer';
	
	$deleteStmt = deleteInfo($id, $table);
	$query = $connection -> query($deleteStmt);
	
	if($query){
		redirect_to('../../locum_employer.php?reply=deleted#applied');
		exit();
	}else{
		redirect_to('../../locum_employer.php?reply=error#applied');
		exit();
	}
}
?>