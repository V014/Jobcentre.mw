<?php
if(isset($_SESSION['ID'])){
	$Id = $_GET['id'];
	$queryJob = "SELECT v.Id, v.EmployerID, v.Title, v.Location, v.Description, v.Qualifications, v.Experience, v.Salary, e.CompanyName FROM `vacancies` AS v INNER JOIN `employer` AS e ON v.EmployerID = e.EmployerID WHERE v.Id = $Id";
	$resultJob = $connection -> query($queryJob);
	$rowJob = $resultJob -> fetch_assoc();
	$title = $rowJob['Title'];
	$companyName = $rowJob['CompanyName'];
	$description = $rowJob['Description'];
	$vacancyId = $rowJob['Id'];
	$location = $rowJob['Location'];
	$qualification = $rowJob['Qualifications'];
	$experience = $rowJob['Experience'];
	$salary = $rowJob['Salary'];
	$EmployerID = $rowJob['EmployerID'];

	$queryEmail = "SELECT `Email` FROM user WHERE `Id` = $EmployerID";
	$resultEmail = $connection -> query($queryEmail);
	$rowEmail = $resultEmail -> fetch_assoc();
	$companyEmail = $rowEmail['Email'];
}
?>