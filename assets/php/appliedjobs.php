<?php
$ID = $_SESSION['ID'];
$queryVacancy = "SELECT VacancyID, `Date` FROM `applications` WHERE SeekerID = $ID";
$resultVacancy = $connection -> query($queryVacancy);
$rowVacancy = $resultVacancy -> fetch_assoc();
$vID = $rowVacancy['VacancyID'];
$date = $rowVacancy['Date'];
// collect information on seeker
$queryApplication = "SELECT * FROM `vacancies` WHERE `Id` = $vID";
$resultApplication = $connection -> query($queryApplication);
?>