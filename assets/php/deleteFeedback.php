<?php
include ('connection.php');
include ('utils.php');
if(isset($_POST['delete'])){
	$id = $_POST['selected'];
	$table = 'feedback';
	$deleteStmt = deleteInfo($id, $table);
	$query = $connection -> query($deleteStmt);

	if($query){
		redirect_to("../../panel.php#feedback?reply=success");
		exit();
	}else{
		redirect_to("../../panel.php#feedback?error");
		exit();
	}
}
?>