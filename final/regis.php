<?php
$msg = '';
if(isset($_POST)){
  include "conn.php"; 

  $name = $_POST['name'];

  $password= $_POST['password'];

  if(!empty($name)){
    $sql = "INSERT INTO `registraion`(`name`,`email`,`password`) VALUES ('".$name."', '".$email."','".md5($password)."')";

    if($conn->query($sql)===TRUE){
      $msg= "new registration successfully received";
    }else{
      $msg= "Error: " . $conn->error;
    }
  }
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
            <li class="active"><a href="home.php">Home</a></li>
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
  <h2>Registration</h2>
     <?php if (!empty($msg)) { ?>

      <div class="alert alert-info">
        <?php echo "$msg"; ?>
      </div>
    <?php  }; ?>


     



  <form role="form" method="post">
     <div class="form-group">
      <label for="name">name:</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required="true">
    </div>




    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="true">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password"placeholder="Enter password" required="true">
    </div>
     


    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

