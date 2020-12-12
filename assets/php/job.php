<?php
if(isset($_SESSION['ID'])){
	$Id = $_GET['id'];
	$queryJob = "SELECT v.Id, v.EmployerID, v.Title, v.Location, v.Description, e.CompanyName FROM `vacancies` AS v INNER JOIN `employer` AS e ON v.EmployerID = e.UserID WHERE v.Id = $Id";
	$resultJob = $connection -> query($queryJob);
	$rowJob = $resultJob -> fetch_assoc();
	$title = $rowJob['Title'];
	$companyName = $rowJob['CompanyName'];
	$description = $rowJob['Description'];
	$vacancyId = $rowJob['Id'];
	$location = $rowJob['Location'];
	$EmployerID = $rowJob['EmployerID'];
	$data = str_replace( '&', '&amp;', $description );

	$queryEmail = "SELECT `Email` FROM user WHERE `Id` = $EmployerID";
	$resultEmail = $connection -> query($queryEmail);
	$rowEmail = $resultEmail -> fetch_assoc();
	$companyEmail = $rowEmail['Email'];
}
?>