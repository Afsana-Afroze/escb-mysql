<h1> colour table php work </h1>

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
$colors = 
[
	["id"=>"1", "color"=>"Red", "code"=>"0"],
	
	["id"=>"2", "color"=>"Blue", "code"=>"0"],
	
	["id"=>"3", "color"=> "Black" , "code"=>"#000000"],
	
	["id"=>"4", "color"=> "White", "code"=>"0"],
	
	["id"=>"5", "color"=>"Violet", "code"=>"0"],
	
	["id"=>"6", "color"=>"Green", "code"=>"0"],
	
	["id"=>"6", "color"=>"Pink", "code"=>"0"],
	
	["id"=>"7", "color"=>"Brown", "code"=>"0"],
	
	["id"=>"8", "color"=>"Yellow", "code"=>"0"],
	
	["id"=>"9", "color"=>"Orange", "code"=>"0"],
	
	["id"=>"10", "color"=>"Purple", "code"=>"0"],
	
	
];
?>
	<table border="1px" width="60%">
	    <th>id</th>
		<th>name of color</th>
        <th>code</th>

		<?php
		
		foreach ($colors as $key => $value)
			{ 
				echo "<tr>" .
				"<td>". $value['id'] . "</td>".
				"<td>". $value['color'] . "</td>".
				"<td>". $value['code'] . "</td>".
				    "</tr>" ;


			}



		?>


	</ul>