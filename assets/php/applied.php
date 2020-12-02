<?php
// get vacancy ID
$ID = $_SESSION['ID'];
$queryVacancy = "SELECT v.Id, a.SeekerID, a.VacancyID, a.Id, v.Title, v.Date FROM `vacancies` AS v INNER JOIN `applications` AS a ON v.Id = a.VacancyID WHERE v.EmployerID = $ID";
$resultVacancy = $connection -> query($queryVacancy);
$rowVacancy = $resultVacancy -> fetch_assoc();
$vID = $rowVacancy['VacancyID'];
$aID = $rowVacancy['Id'];
$title = $rowVacancy['Title'];
$date = $rowVacancy['Date'];
$sID = $rowVacancy['SeekerID'];
// collect information on seeker
$querySeeker = "SELECT * FROM `jobseeker` WHERE `UserID` = $sID";
$resultSeeker = $connection -> query($querySeeker);
?>