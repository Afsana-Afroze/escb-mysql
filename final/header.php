<?php 

session_start();
 ?>



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
           


                <ul class="nav nav-pills pull-right">
                  <?php  if( $_SESSION['logedin']){ ?>
                <li <?php  echo ($basefile == 'profile' ? 'class="active"' : '');?>><a href="profile.php">Profile</a></li>
                <li <?php  echo ($basefile == 'logout' ? 'class="active"' : '');?>><a href="index.php?logout=true">Logout</a></li>
                <?php } else { ?>
                 <li <?php  echo ($basefile == 'login' ? 'class="active"' : ''); ?>><a href="login.php">Login</a></li>
                 <li <?php  echo ($basefile == 'Registration' ? 'class="active"' : ''); ?>><a href="regis.php">Registration</a></li>
                <?php } ; ?>
                </ul>
               
           
            </div><!--/.nav-collapse -->

      </div>
    </nav>