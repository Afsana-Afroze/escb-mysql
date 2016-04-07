<?php

$server ="localhost";
$username ="root";
$password = "mysql";
$database ="mysql1";

//conn db
$conn= new mysqli($servername, $username, $password,$database);
 if ($conn->connect_error) 
{
echo $conn-> connect_error;
exit();
}

$sql ="CREATE TABLE MYfamily
(
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  userid VARCHAR(30) NOT NULL,
  firstname VARCHAR(30) NOT NULL,
  lastname  VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(150),
  reg_date TIMESTAMP
) ";
if(!$conn->query($sql))
{

    echo $conn->error;
   exit();
}
?>
