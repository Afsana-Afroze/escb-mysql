<?php

$server ="localhost";
$username ="root";
$password = "mysql";

//conn db
$conn= new mysqli($servername, $username, $password);
 if ($conn->connect_error) 
{
echo $conn-> connect_error;
exit();
}

 //create db
$sql="create database mysql1";
if($conn->query($sql))
{
echo "database create successful";
}
else {
	 echo $conn->error;
}

$conn->close();  

// else
  // // {
  // // echo "conn successful";
  // // }
?>