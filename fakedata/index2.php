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
$sql = "SELECT id, firstname, lastname,email FROM MYfamily";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
</head>
<body>
     <h2>table</h2>
     <table border="1px">
     <thead>
     	<tr>
     		 <th>id</th>
     		 <th>firstname</th>
     		 <th>lastname</th>
     		 <th>email</th>
     	</tr>
     </thead>
     </body>
     <tbody>
     	 <?php if (!$result->num_rows){?>
          <tr>

           <td colspan="4" align="center">no record found</td>

           </tr>
           <?php } else {?>
          <?php while ($row =$result->fetch_assoc()) {
          	?>
          	<tr>
          		<td>
          			<?php echo  $row["id"]; ?> 
          		</td>
          	
          		<td>
          			<?php echo  $row["firstname"]; ?> 
          		</td>
          	
          		<td>
          			<?php echo  $row["lastname"]; ?> 
          		</td>
          	
          		<td>
          			<?php echo  $row["email"];?> 
          		</td>
          	</tr>
          	<?php }?>
      	<?php }?>
     </tbody>
     </table>
</body>
</html>
