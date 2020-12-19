<?php
$ID = $_SESSION['ID'];
if(isset($_GET['id'])){
	$vacancyID = $_GET['id'];
	$queryPosted ="SELECT * FROM locum_vacancies WHERE EmployerID = $ID AND Id = $vacancyID";
	$resultsPosted = $connection -> query($queryPosted);
	$rowPosted = $resultsPosted -> fetch_assoc();
    $description = $rowPosted['Description'];
    $vacancyID = $rowPosted['Id'];
    $data = str_replace( '&', '&amp;', $description );
} else {
	$queryPosted ="SELECT * FROM locum_vacancies WHERE EmployerID = $ID";
	$resultsPosted = $connection -> query($queryPosted);
}
?>