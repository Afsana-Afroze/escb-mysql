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
?>