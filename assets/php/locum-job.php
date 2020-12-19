<?php
if(isset($_SESSION['ID'])){
	$Id = $_GET['id'];
	$queryJob = "SELECT v.Id, v.EmployerID, v.Description, v.Title, v.Location, e.OrganisationName FROM `locum_vacancies` AS v INNER JOIN `locum_employer` AS e ON v.EmployerID = e.UserID WHERE v.Id = $Id";
	$resultJob = $connection -> query($queryJob);
	$rowJob = $resultJob -> fetch_assoc();
	$title = $rowJob['Title'];
	$organisationName = $rowJob['OrganisationName'];
	$vacancyId = $rowJob['Id'];
	$location = $rowJob['Location'];
	$EmployerID = $rowJob['EmployerID'];
	$description = $rowJob['Description'];
	$data = str_replace( '&', '&amp;', $description );

	$queryEmail = "SELECT `Email` FROM locum WHERE `Id` = $EmployerID";
	$resultEmail = $connection -> query($queryEmail);
	$rowEmail = $resultEmail -> fetch_assoc();
	$companyEmail = $rowEmail['Email'];
}
?>