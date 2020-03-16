<?php
function register($national_id, $password, $confirm_password){
    
    $connnection=mysqli_connect("localhost", "root", "", 'webdev_project');
    
    if($connnection===false){
        die("Cloud not connect...".mysqli_connect_error());
    
    }
    echo'connect to db';

    $query="INSERT INTO signup(National_ID,password_id,Confirm_Password) 
    VALUES('$national_id','$password','$confirm_password')";
    
    if(mysqli_query($connnection, $query)){
        echo "Record added well";
    }
    else{
        echo"Cloud not add data";
        mysqli_error($connnection);
    }
    mysqli_close($connnection);
}
?>