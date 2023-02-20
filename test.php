<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_password = "";
 $db_name ="college";

 // create connection

 $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
 //check connection
 if(!$conn){
    die("connection failed!");
 }
 echo "connection establish <hr>";

 $sql = "SELECT * FROM  collegeproject";

 $result = mysqli_query($conn ,$sql);

 $num = mysqli_num_rows($result);
 if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "First:".$row["firstname"]."Last:".$row["lastname"]."Email:".$row["email"]."Password".$row["password"]."College".$row["collegename"];
    }
   
 } else{
    echo "0 Result";
}


?>