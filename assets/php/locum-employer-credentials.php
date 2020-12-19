<?php
include ('utils.php');
if($_SESSION['role'] === 'employer') {
    $ID = $_SESSION["ID"];
    // from user table
    $query1 = "SELECT `Email`, `Password`, `Role` FROM locum WHERE `Id` = $ID";
    $result1 = $connection -> query($query1);
    $row1 = $result1 -> fetch_assoc();
    $email = $row1['Email'];
    $password = $row1['Password'];
    $role = $row1['Role'];
    // from employer table
    $query2 = "SELECT * FROM locum_employer WHERE UserID = $ID";
    $result2 = $connection -> query($query2);
    $row2 = $result2 -> fetch_assoc();
    $ceo = $row2['Ceo'];
    $organisationName = $row2['OrganisationName'];
    $location = $row2['Location'];
    $website = $row2['Website'];
    $city = $row2['City'];
    $description = $row2['Description'];
    $contact = $row2['Contact'];
    $address = $row2['Address'];
}else{
    redirect_to("../../locum.php#error"); // redirect to login if user didnt login
    exit();
}
?>