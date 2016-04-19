 <?php 
 session_start();
 // if(!empty($_GET['logedin']))
 //     {
 //      $_SESSION['logedin'] == true;
 //      $_SESSION['user']   = $_GET['logedin'];
 //     }

 if($_GET['logout']== true) 
 {
session_destroy();

 }

print_r($_SESSION);

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
    <?php $basefile = basename(__FILE__,'.php'); ?>
    <?php include_once 'header.php';?>

    <div class="container">

      <div class="starter-template">
        <h1>
        <?php 
      
      if($_SESSION['logedin'])
     {
       echo "WELCOME " . $_SESSION['user']['name'];
      }
      else{
        echo "Welcome guest";
      }
        ?>
        </h1>
        <p class="lead"></p>
      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
