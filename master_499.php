<?php
	error_reporting(E_ALL ^ E_NOTICE);
    ini_set('session.use_only_cookies','1');
    session_start();
    if( isset($_SESSION['email']))
    	echo "Welcome: " . $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
  		<h1>Student Portal Website</h1>
        
  
	  
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="sendData.php" method="get">
	<label for="name">Name: </label>
	<input type="text" id="name" name="name" placeholder="write your name here">
	
</form>
</body>
</html>
	
    <?php
        ini_set('session.use_only_cookies','1');
        session_start();
        
        if( isset($_SESSION['email']))
        {
  			echo '<li><a href="registration.html"><span class="glyphicon glyphicon-briefcase"></span> Profile</a></li>';
  			echo '<li><a href="master.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
			echo 'li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
        }
         else
         {
           
            echo 'li><a href="profile.php"><span class="glyphicon glyphicon-pencil"></span> My Profile</a></li>';
			echo 'li><a href="registration.html"><span class="glyphicon glyphicon-briefcase"></span> Registration</a></li>';
         }
      
     ?>
	 
       </ul>
     </div>
   </div>
</nav>
</body>
</html>


