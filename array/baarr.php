<?php 
function dd($a){
  echo"<pre>";
  print_r($a);
  echo"</pre>";


}




$a=[
[

"id" => 0,
"name" => "Afsana",
"class" => 9,
"group" => "science",
"subject" => ["phy","che","bio"]
],
[
"id" => 1,
"name" => "Afroze",
"class" => 9,
"group" => "science",
"subject" => ["phy","che","bio"]
]

];

//echo $a[0]["class"];

//echo  count ($a);

	
for ($i=0; $i < count($a); $i++) 
{ 
	echo $a[$i]["name"];
}



?>
