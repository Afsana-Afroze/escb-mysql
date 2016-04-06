<?php 
if(isset($_GET['id']))
{
	echo "your task id:".$_GET['id'];
	exit();
}

$month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
	

?>

<h1> My month List</h1>
 

 <ol>
  <!--   <li>
	 <a href="basic2.php? id=1">First task</a>

    </li> -->
<?php 

foreach ($month as $key => $value) {
	echo "<li>" .$value."</li>";

}

 ?>

 </ol>