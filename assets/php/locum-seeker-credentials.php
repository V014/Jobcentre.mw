<?php
if(!empty($_SESSION['role']) && $_SESSION['role'] === 'jobseeker') {
    $ID = $_SESSION["ID"];
    // from user table
    $query1 = "SELECT `Email`, `Password`, `Role` FROM locum WHERE `Id` = $ID";
    $result1 = $connection -> query($query1);
    $row1 = $result1 -> fetch_assoc();
    $email = $row1['Email'];
    $password = $row1['Password'];
    $role = $row1['Role'];
    // from jobseeker table
    $query2 = "SELECT * FROM locum_jobseeker WHERE UserID = $ID";
    $result2 = $connection -> query($query2);
    $row2 = $result2 -> fetch_assoc();
    $fullname = $row2['Fullname'];
    $dob = $row2['Dob'];
    $location = $row2['Location'];
    $gender = $row2['Gender'];
    $nationality = $row2['Nationality'];
    $city = $row2['City'];
    $contact = $row2['Contact'];
    $address = $row2['Address'];
    $profession = $row2['Profession'];
} else{
    redirect_to("../../locum.php#error");
}
?>