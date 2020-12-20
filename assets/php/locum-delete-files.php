<?php
include('utils.php');

if(isset($_POST['delete'])){
    $fileId = $_POST['selected'];
    $unlink = unlink('../locum_uploads/'.$fileId);

    if($unlink){
        redirect_to("../../locum_employer.php#downloads");
    }else{
        redirect_to("../../locum_employer.php?reply=error#downloads");
    }
}
?>