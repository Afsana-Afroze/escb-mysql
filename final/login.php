<?php 

// Start the session
session_start();
if($_SESSION['logedin'])
{
  echo "hello " . $_SESSION['name'];
}

if(isset($_POST['name'])){
include_once "conn.php"; 

$name = $_POST['name'];

$password= $_POST['password'];




  $sql = "SELECT * FROM `registraion` WHERE name = '".$name."' AND password = '".md5($password)."' " ;
  // echo $sql;die();

    $result = $conn->query($sql);


if($result->num_rows)
{
  $row=$result-> fetch_row();
  $_SESSION['logedin'] = true;
  $_SESSION['user'] = array (

                  'id'=> $row['0'],
                  'name'=> $row[2],
                   'email' => $row[3]
    );
  // $_SESSION['name'] = $row[2];
  echo $result->num_rows;

}
if(!$_SESSION['logedin'])
{
  echo "hello " . $_SESSION['name'];
}
// else {
//   echo "no record found";
// }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-inverse ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
          
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
  <h2>PLEASE LOGIN</h2>



  <form role="form"  method="post">
     <div class="form-group">
      <label for="email">Name:</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required="true">
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required="true">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

