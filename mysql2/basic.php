<?php

$server ="localhost";
$username ="root";
$password = "mysql";


$conn= new mysqli($servername, $username, $password);
 if ($conn->connect_error) 
{
echo $conn-> connect_error;
exit();
}


$sql="create database mysql1";
if($conn->query($sql))
{
echo "database create successful";
}
else {
	 echo $conn->error;
}


  // else
  // // {
  // // echo "conn successful";
  // // }
?>