<?php
error_reporting(E_ALL ^ E_NOTICE)    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Profile Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php include 'master_499.php';?>

  <div class="container text-center">
  <h1>Welcome to the Profile page</h1>
  </div>

<p>Register your Account</p>
</div>

<form>
  <label for="fname">First name:</label>      
  <input type="text" id="fname" name="fname" required><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="add1">Address line 1:</label>
  <input type="text" id="add1" name="add1"><br><br>
  <label for="add2">Address line 2:</label>
  <input type="text" id="add2" name="add2"><br><br>
  <label for="city">City:</label>
  <input type="text" id="city" name="city"><br><br>
  <label for="state">State:</label>
  <input type="text" id="state" name="state" maxlength='2'><br><br>
  <label for="zip">Zip:</label>
  <input type="text" id="zip" name="zip" maxlength='5'><br><br>
  <label for="password">Password:</label>
  <input type="text" id="lname" name="password"><br><br>
  <label for="r_password">Re-enter Password:</label>
  <input type="text" id="lname" name="r_password"><br><br>
  <label for="email">email:</label>
  <input type="text" id="lname" name="email"><br><br>
  <label for="m_phone">Mobile Phone#:</label>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
  <small>Format: 123-45-678</small><br><br>
</form>

</div>
</div>
<?php include 'footer.php';?>
<div class="navbar-fixed-bottom row-fluid">
  <div class="navbar-inner">
    <div class="container text-center">
	  Copyright @ 2022
	</div> 
  </div>
</body>
</html>


