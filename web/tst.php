<?php

 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');

if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['name']." Login Sucessfully!!";
			  echo $message;
        }
        else
        {
            $message = "Invalid email or password!!";
			echo $message;
        }        
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
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
            $query = "insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')";
			mysqli_query($connection, $query) or die('Error querying database.');
			$message = "Signup Sucessfully!!";
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
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a style="float:right" class="active" href="#signup">Signup</a>
  <a style="float:right" href="book.php">Login</a>
</div>
              
  <div  class="bg-img" >
  <form action="" method="post" class="container">
  <h1>Login</h1>
  <label for="name"><b>Name</b></label>
    <input id="name" name="name" type="text" placeholder="Name">
    <label for="email"><b>Email</b></label>
	<input id="email" name="email" type="text" placeholder="Email">
	<label for="psw"><b>Password</b></label>
    <input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" />
	<button type="submit" class="btn">Signup</button>
	
  </form>
  </div>
 
</body>
</html>
