<?php
$connection = mysqli_connect('localhost' ,'root');

if($connection){
    echo " connectionn estblish ";
}
else{
    echo " ERROR connection failed!";
}

mysqli_select_db($connection,"college");

$first = $_POST['Firstname'];
$last = $_POST['Lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$coll = $_POST['college'];


$data = "insert into collegeproject(firstname , lastname ,email ,password, collegename) VALUES('$first','$last','$email','$pass','$coll')";

mysqli_query ($connection, $data);
header('location:signupsuccessful.html');

?>