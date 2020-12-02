<?php
include ('connection.php');
include ('utils.php');
$Title = escTxt($connection, $_POST['title']);
$querySeek = "SELECT * FROM vacancies WHERE `Title` LIKE '%$Title%'";
$resultSeek = $connection -> query($query);
?>