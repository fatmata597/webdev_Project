<?php
include('function.php');
if(isset($_POST['National_ID']) && isset($_POST['Password']) && isset($_POST['Confirm Password'])){
    $national_id=$_POST['National_ID'];
    $password=$_POST['Password'];
    $confirm_password=$_POST['Confirm Password'];

    register($national_id, $password, $confirm_password);

}

?>