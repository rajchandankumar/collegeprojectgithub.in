<?php

$connection = mysqli_connect('localhost' ,'root');
// if ($connection){
//     echo " connection establishes";
// }
// else{
//     echo "ERROR connection failed!";
// }

mysqli_select_db($connection,'college');

$user = $_POST['User'];
$password =$_POST['Pass'];
$conpass =$_POST['Confirmpass'];

function alert(){
    echo " confirm password is not matched";
}

if($password==$conpass){
    $data = "insert into login(username, password ,confirmpassword ) VALUES('$user','$password','$conpass')";

    mysqli_query ($connection,"$data");
    header("location:loginsuccess.html");

}
else{
    alert();
}



?>