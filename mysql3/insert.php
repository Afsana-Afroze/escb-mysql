<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "mysql1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$md5="asd234bnghjg";
$sql = "INSERT INTO MYfamily(firstname, lastname, email,password,reg_date)
VALUES ('John', 'Doe', 'john@example.com','#$md5','4.10.2016')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
