<?php
include ('utils.php');
if($_SESSION['role'] === 'employer') {
    $ID = $_SESSION["ID"];
    // from user table
    $query1 = "SELECT `Email`, `Password`, `Role` FROM user WHERE `Id` = $ID";
    $result1 = $connection -> query($query1);
    $row1 = $result1 -> fetch_assoc();
    $email = $row1['Email'];
    $password = $row1['Password'];
    $role = $row1['Role'];
    // from employer table
    $query2 = "SELECT * FROM employer WHERE UserID = $ID";
    $result2 = $connection -> query($query2);
    $row2 = $result2 -> fetch_assoc();
    $ceo = $row2['Ceo'];
    $companyName = $row2['CompanyName'];
    $orgType = $row2['OrganisationType'];
    $location = $row2['Location'];
    $industry = $row2['Industry'];
    $website = $row2['Website'];
    $city = $row2['City'];
    $description = $row2['Description'];
    $contact = $row2['Contact'];
    $address = $row2['Address'];
}else{
    redirect_to("../../index.php?reply=error#login"); // redirect to login if user didnt login
    exit();
}
?>