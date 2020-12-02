<?php
include ('utils.php');

if(isset($_SESSION['ID']) && $_SESSION['ID'] == 0) {
    $ID = $_SESSION["ID"];
    $query = "SELECT `Username`, `Password` FROM admin WHERE `Id` = $ID";
    $result = $connection -> query($query);
    $row = $result -> fetch_assoc();
    $username = $row['Username'];
    $password = $row['Password'];
}else{
    redirect_to("../../index.php#login"); // redirect to login if user didnt login
    exit();
}
?>