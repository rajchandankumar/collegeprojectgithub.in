<?php 
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name ="college";

  $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

  // check connection
  if(!$conn){
    die("connection failed!");
  }
  echo "connection establish";

  $sql = "SELECT * FROM collegeproject";

  $result = mysqli_query($conn ,$sql);

  $num = mysqli_num_rows($result);

  if($num>0){
    echo "<table>";
    echo "<thead>";
     echo "<tr>";
     echo "<th> firstname </tr>";
     echo "<th> lastname </tr>";
     echo "<th> email </tr>";
     echo "<th> password </tr>";
     echo "<th> collegename </th>";
     echo "</tr>";
    echo "</thead>";
    echo "<tbody";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
         echo "<td>".$row["firstname"]."</td>";
         echo "<td>".$row["lastname"]."</td>";
         echo "<td>".$row["email"]."</td>";
         echo "<td>".$row["password"]."</td>";
         echo "<td>".$row["collegename"]."</td>";
        echo "</tr>";
    }
    echo "</tbody";
    echo "</table>";
  }
  else{
    echo "0 result";
  }
  mysqli_close($conn);
?>