<?php
include('utils.php');

if(isset($_POST['delete'])){
    $fileId = $_POST['selected'];
    $unlink = unlink('../uploads/'.$fileId);

    if($unlink){
        redirect_to("../../employer.php#downloads");
    }else{
        redirect_to("../../employer.php#downloads");
    }
}
?>