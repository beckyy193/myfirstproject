<?php
error_reporting(E_ALL ^ E_NOTICE) 

		
?>
<?php require 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php require 'master_499.php';
?>

<div class="container text-center">
	<h1>Welcome to the Login page</h1>
	</div>
	
    <style type="text/css">
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		}
	
	#button{
		padding: 4px;
		width: 100px;
		color: white;
		background-color: Lightblue;
		border: none;
		}

	#box{
		background-color: gray;
		margin: auto;
		width: 300px;
		padding: 20px;
		}
	
	</style>

	<div id="box"
	
		<form method="post">
			<div style="font-size: 40px;margin: 10px;">Login</div> 
			
			<label for="email">User email:</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label for="password">Password:</label>
			<input id="text" type="password" name="password"><br><br>
			
					
			<tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Login"></td>
            </tr>
			
		

<?php require_once 'footer.php';?>
</body>
</html>