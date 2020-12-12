<?php
session_start();
include ('connection.php');
include ('utils.php');

if(!empty($_FILES['files']['name'][0])){
    $vacancyId = $_POST['vacancyId'];
    $date = date("Y-m-d");
    $ID = $_SESSION['ID'];
    $companyEmail = $_POST['companyEmail'];
    $fullname = $_POST['fullname'];

    $query = "INSERT INTO `applications` VALUES(NULL, $vacancyId, $ID, '$date')";
    $result = $connection -> query($query); 

    $query2 = "INSERT INTO `applications_employer` VALUES(NULL, $vacancyId, $ID, '$date')";
    $result2 = $connection -> query($query2);

	$files = $_FILES['files'];
    $allowed = array('pdf');
    $uploaded = array();
    $failed = array();

    foreach($files['name'] as $position => $file_name){
        $file_tmp = $files['tmp_name'][$position];
        $file_size = $files['size'][$position];
        $file_error = $files['error'][$position];
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if(in_array($file_ext, $allowed)){

            if($file_error === 0) {

                if($file_size <= 5000000){ // max upload size 5MB
                    $file_name_new = $file_name.'-to-'.$companyEmail.'.'.$file_ext;
                    $file_destination = '../uploads/' . $file_name_new;

                    if(move_uploaded_file($file_tmp, $file_destination)){
                        $uploaded[$position] = $file_destination;
                    }else{
                        $failed[$position] = "[$file_name] failed to upload.";
                    }

                }else{
                    $failed[$position] = "[{$file_name}] is too large, 5MB max.";
                }

            }else{
                $failed[$position] = "[{$file_name}] file error {$file_error}.";
            }

        }else {
            $failed[$position] = "[{$file_name}] file extension '{$file_ext}' is not allowed.";
        }
    } // foreach

    if(!empty($uploaded)){
        redirect_to("../../jobseeker.php?reply=success");
    }

    if(!empty($failed)){
        redirect_to("../../jobseeker.php?reply=error");
    }
}