<?php
$ID = $_SESSION['ID'];
if(isset($_GET['id'])){
	$vacancyID = $_GET['id'];
	$queryPosted ="SELECT * FROM locum_vacancies WHERE EmployerID = $ID AND Id = $vacancyID";
	$resultsPosted = $connection -> query($queryPosted);
} else {
	$queryPosted ="SELECT * FROM locum_vacancies WHERE EmployerID = $ID";
	$resultsPosted = $connection -> query($queryPosted);
}
?>