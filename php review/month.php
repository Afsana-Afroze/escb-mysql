<h1 stylecolor= green> Months php work </h1>

<?php 
// if(isset($_GET['id']) )
// {
// 	echo"your task id:". $_GET['id']; exit();
// }
//<li style='color: yellow'>yellow</li>

// $months = 
// [
//  "january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december" 
// ];
$months = 
[
	["name"=>"january", "days"=>31],
	
	["name"=>"february", "days"=>28],
	
	["name"=>"march", "days"=>31],
	
	["name"=>"april", "days"=>30],
	
	["name"=>"may", "days"=>31],
	
	["name"=>"june", "days"=>30],
	
	["name"=>"july", "days"=>31],
	
	["name"=>"august", "days"=>31],
	
	["name"=>"september", "days"=>30],
	
	["name"=>"october", "days"=>31],
	
	["name"=>"november", "days"=>30],
	
	["name"=>"december", "days"=>31],

];
?>
	<ol>
		
		<?php
		
		foreach ($months as $key => $value)
			{ 
				echo "<li>". $value['name'] . "(" . $value['days'] . ")".  "</li>" ;


			}



		?>


	</ol>