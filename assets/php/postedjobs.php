<?php
$ID = $_SESSION['ID'];
if(isset($_GET['id'])){
	$vID = $_GET['id'];
	$queryPosted ="SELECT * FROM vacancies WHERE EmployerID = $ID AND Id = $vID";
	$resultsPosted = $connection -> query($queryPosted);
	$rowPosted = $resultsPosted -> fetch_assoc();
	$vacancyID = $rowPosted['Id'];
    $description = $rowPosted['Description'];
    $data = str_replace( '&', '&amp;', $description );
} else {
	$queryPosted ="SELECT * FROM vacancies WHERE EmployerID = $ID";
	$resultsPosted = $connection -> query($queryPosted);
}
?>