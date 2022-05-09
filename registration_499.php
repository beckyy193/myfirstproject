<html>
<head>
    <title>Add Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
	
	
   <h1> Welcome to the Registration page</h1>
   
   <h4> Please enter requested data below</h4>

   

    <form action="registration.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>FirstName</td>
                <td><input type="text" name="first_name"></td>
            </tr>
			<tr> 
                <td>LastName</td>
                <td><input type="text" name="last_name"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
			<tr> 
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
			<tr> 
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
			<tr> 
                <td>MobilePhone</td>
                <td><input type="text" name="m_phone"></td>
            </tr>			
			<tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>