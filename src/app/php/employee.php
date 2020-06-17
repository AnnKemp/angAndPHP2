<?php
header('Access-Control-Allow-Origin:*');
$servername = "localhost";
$username = "AnnKemp";
$password = "AnnKemp_116";
$dbname = "personaldata";

//Create connection
$conn=new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
  die("Connection failed: ").$conn->connect_error);
}
// echo "Connected succesfully";
$sql="SELECT * FROM persones";
$result = mysqli_query($conn,$sql);
$myArray = array();
if($result->num_rows > 0){
  //output data of each row
  while($row = $result->fetch_assoc()){
    $myArray[] = $row;
  }
  print json_encode($myArray);
}
else{
  echo "0 results";
}

