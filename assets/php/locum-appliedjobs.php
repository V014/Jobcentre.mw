<?php
$ID = $_SESSION['ID'];
$queryApplied = "SELECT v.Id, v.Title, v.Date, a.SeekerID, a.VacancyID, a.Id, j.Fullname, j.Contact, j.Address, j.Skills FROM `locum_vacancies` AS v INNER JOIN `locum_applications_employer` AS a ON v.Id = a.VacancyID INNER JOIN `locum_jobseeker` AS j ON a.SeekerID = j.Id WHERE v.EmployerID = $ID";
$resultApplied = $connection -> query($queryApplied);
?>