<?php
#include('db.php');

//Step1
 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');

if(isset($_POST['action']))
{          
    if($_POST['action']=="reg")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $dob   = mysqli_real_escape_string($connection,$_POST['dob']);
        $query = "SELECT email FROM reg where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
            $query = "insert into reg(name,email,bday) values('".$name."','".$email."','".$dob."')";
			mysqli_query($connection, $query) or die('Error querying database.');
			$message = "Register Sucessfully!!";
			mail($email,'KIDGENIX','Thank you Registering ','From:swaroopsmys@gmail.com');
        }
		echo $message;
    }
}

?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order1.css">
<body>

<div class="topnav">
  <a href="order.html">Home</a>
  <a href="book.php">Book</a>
  <a class="active" href="not.php">Register</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a style="float:right" href="#signup">Signup</a>
  <a style="float:right" href="book.php">Login</a>
</div>
              
  <div  class="bg-img" >
  <form action="" method="post" class="container">
  <h1>Register</h1>
  <label for="name"><b>Name</b></label>
    <input id="name" name="name" type="text" placeholder="Name">
    <label for="email"><b>Email</b></label>
	<input id="email" name="email" type="text" placeholder="Email">
	<label for="dob"><b>Date of Birth</b></label>
    <input id="dob" name="dob" type="date" >
	<p></p>
    <input name="action" type="hidden" value="reg" />
	<button type="submit" class="btn">Register</button>
	
  </form>
  </div>
 
</body>
</html>
