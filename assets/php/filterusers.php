<?php
include ('connection.php');
$Role = $_POST['Role'];
$queryFilter = "SELECT ID, FirstName, LastName, Gender, Email, `Role` FROM users WHERE `Role` = '$Role'";
$resultsFilterUsers = $connection -> query($queryFilter);
?>