<?php

 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');

if(isset($_POST['action']))
{if($_POST['action']=="submit")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['fname']);
		$pno       = mysqli_real_escape_string($connection,$_POST['pno']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $address   = mysqli_real_escape_string($connection,$_POST['address']);
		$pin       = mysqli_real_escape_string($connection,$_POST['pin']);
        $query = "SELECT email FROM patient where name='".$name."'";
        $result = mysqli_query($connection,$query);
        if($result==$name)
        {
            $message = $name." Name already exist!!";
        }
        else
        {
            $query = "insert into hospital(name, email, pin, ph, address) values('".$name."','".$email."','".$pin."','".$pno."','".$address."')";
			mysqli_query($connection, $query) or die('Error querying database.');
			$message = "Insert Sucessfully!!";
			
        }
		echo $message;
		
    }
}


?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.vertical-menu {
    width: 400px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;


}
</style>
<body>

<div class="topnav">
  <a  href="#home">Home</a>
  <a  href="book.php">Book</a>
  <a href="not.php">Register</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  
  <a style="float:right" href="order.html">Logout</a></li>
</div>
<div class="vertical-menu">
<p><a href="admin.php">Dashboard</a></p>
<p> <a href="insert.php">Insert New Hospital</a></p> 
<p> <a href="view.php">View Hospital</a></p> 
<p>  </p>
</div>
<div class="container">
  <form action="" method="post">
<p>  </p>
    <label for="fname">Hospital Name</label>
    <input type="text" id="fname" name="fname" placeholder="Name..">
<label for="pno">Phone Number</label>
    <input type="text" id="pno" name="pno" placeholder="9988667766">
	
	<label for="email">E mail</label>
    <input type="text" id="email" name="email" placeholder="abc@mail.com">
	
	<label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Door no, Street">
	
	<label for="pin">Pin Code</label>
    <input type="text" id="pin" name="pin" placeholder="5700..">
	
	
	<input name="action" type="hidden" value="submit" />
    <input type="submit" value="submit">
	
  </form>
</div>


</body>
</html>