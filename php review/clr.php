<?php 
if(isset($_GET['id']))
{
	echo "your task id:".$_GET['id'];
	exit();
}

$colour = ["Red","Blue","Black","White","Gray","Violet","Green","Pink","Brown","Yellow"];
	

?>

<h1> My colour List</h1>
 

 <ol>
  <!--   <li>
	 <a href="basic2.php? id=1">First task</a>

    </li> -->
<?php 

foreach ($colour as $key => $value) {
	echo "<li style='color:" .$value."'>" .$value."</li>";

}

 ?>

 </ol>