<?php
include ('connection.php');
include ('utils.php');

if(isset($_POST['delete'])){
	$id = $_POST['selected'];
	$table = 'locum_applications';
	
	$deleteStmt = deleteInfo($id, $table);
	$query = $connection -> query($deleteStmt);
	
	if($query){
		redirect_to('../../locum_employer.php#applied');
		exit();
	}else{
		redirect_to('../../locum_employer.php?reply=error');
		exit();
	}
}
?>