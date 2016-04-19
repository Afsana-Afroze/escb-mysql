<?php
session_start();
$msg = '';
if(isset($_POST))
{
  include "conn.php"; 
  $user_id= $_POST['user_id'];
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $pro = $_POST['pro'];
  $gndr = $_POST['gndr'];
  $inro = $_POST['intro'];
  $fb = $_POST['fb'];
  $twt = $_POST['twt'];





  if(!empty($name))
    {
       $sql = "INSERT INTO `profile`(`user_id`,`name`,`dob`,`pro`,`gndr`,`intro`,`fb`,`twt`) VALUES ('".$name."', '".$dob."','".$pro."', '".$gndr."', '".$intro."', '".$fb."', '".$twt."', '".$user_id."')";

    if($conn->query($sql)===TRUE)
    {
      $msg= " successfully received";
    }else
    {
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
            <li class="active"><a href="index.php">Home</a></li>
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

     <h2>Profile</h2>
     <?php if (!empty($msg)) { ?>

      <div class="alert alert-info">
        <?php echo "$msg"; ?>
      </div>
    <?php  }; ?>


     



  <form role="form" method="post">
   <div class="form-group">
      <label for="user_id">user_id:</label>
      <input type="user_id" class="form-control" id="user_id" name="user_id" placeholder="Enter user_id" required="true">
    </div>


     <div class="form-group">
      <label for="name">Fullname:</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required="true">
    </div>

    <div class="form-group">
      <label for="dob ">Date of birth:</label>
      <input type="dob" class="form-control" id="dob" name="dob" placeholder="Enter Date of birth" required="true">
    </div>

   <div class="form-group">
      <label for="pro">Profession:</label>
      <input type="pro" class="form-control" id="pro" name="pro" placeholder="Enter Profession" required="true">
    </div>
   <div class="form-group">
      <label for="gndr">Gender:</label>
      <input type="gndr" class="form-control" id="gndr" name="gndr" placeholder="Enter Gender" required="true">
    </div>


  <div class="form-group">
      <label for="intro">Introduction:</label>
      <input type="intro" class="form-control" id="intro" name="intro" placeholder="Enter Introduction" required="true">
    </div>

   
   <div class="form-group">
      <label for="fb">Facebook:</label>
      <input type="fb" class="form-control" id="fb" name="fb" placeholder="Enter Facebook" required="true">
    </div>

    
 <div class="form-group">
      <label for="twt">Twitter:</label>
      <input type="twt" class="form-control" id="twt" name="twt" placeholder="Enter Twitter" required="true">
    </div>


   


    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

