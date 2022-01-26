<?php

 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');

if(isset($_POST['action']))
{if($_POST['action']=="submit")
    {
        $fname       = mysqli_real_escape_string($connection,$_POST['fname']);
		$lname       = mysqli_real_escape_string($connection,$_POST['lname']);
		$mname       = mysqli_real_escape_string($connection,$_POST['mname']);
		$faname       = mysqli_real_escape_string($connection,$_POST['faname']);
		$dob       = mysqli_real_escape_string($connection,$_POST['dob']);
		$gender       = mysqli_real_escape_string($connection,$_POST['gender']);
		$pno       = mysqli_real_escape_string($connection,$_POST['pno']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $address   = mysqli_real_escape_string($connection,$_POST['address']);
		$city       = mysqli_real_escape_string($connection,$_POST['city']);
		$state       = mysqli_real_escape_string($connection,$_POST['state']);
		$pin       = mysqli_real_escape_string($connection,$_POST['pin']);
		$med       = mysqli_real_escape_string($connection,$_POST['med']);
		$subject       = mysqli_real_escape_string($connection,$_POST['subject']);
		$date       = mysqli_real_escape_string($connection,$_POST['date']);
		$hname       = mysqli_real_escape_string($connection,$_POST['hname']);
        $query = "SELECT email FROM patient where email='".$email."'";
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
            $query = "insert into patient(fname,lname, mname, faname, dob, gender, pno, email, address, city, state, pin, med, subject) values('".$fname."','".$lname."','".$mname."','".$faname."','".$dob."','".$gender."','".$pno."','".$email."','".$address."','".$city."','".$state."','".$pin."','".$med."','".$subject."')";
			mysqli_query($connection, $query) or die('Error querying database.');
			$query = "insert into book(email,hid,date) values('".$email."','".$hname."','".$date."')";
			mysqli_query($connection, $query) or die('Error querying database.');
			$message = "Booking Successful";
			mail($email,'KIDGENIX','Thank you Booking ','From:swaroopsmys@gmail.com');
		echo "<script type='text/javascript'>alert('Booking done');</script>";
		$query = "select email from hospital where id=".$hname;
		$res=mysqli_query($connection, $query) or die('Error querying database.');
		$emails_only = array();

foreach($res as $r)
{
   $emails_only[] = $r['email'];
}

$email_string = implode(", ", $emails_only); 
$data="Name:".$fname." ".$lname."\nFather name:".$faname."\nMother name:".$mname."\nDate of Birth:".$dob."\nGender:".$gender."\nPhone Number:".$pno."\nEmail:".$email."\nAddress:".$address."\nCity:".$city."\nState:".$state."\nPincode:".$pin."\n".$med."\n".$subject."\nDate:".$date;
		mail($email_string,'KIDGENIX',$data,'From:swaroopsmys@gmail.com');
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
</style>
<body>

<div class="topnav">
  <a  href="#home">Home</a>
  <a class="active" href="book.php">Book</a>
  <a href="not.php">Register</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>

  <a style="float:right" href="book.php">Logout</a></li>
</div>
<div class="container">
  <form action="" method="post">

    <label for="fname">Patient First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

	<label for="mname">Mother's Name</label>
    <input type="text" id="mname" name="mname" placeholder="Your Mother name">
	
	<label for="faname">Father's Name</label>
    <input type="text" id="faname" name="faname" placeholder="Your Father name..">
	
	<label for="dob">Date of Birth</label>
    <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy">
	
    <label for="gender">Gender</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="Female">Female</option>
      <option value="na">Not Mentioned</option>
    </select>

	<label for="pno">Phone Number</label>
    <input type="text" id="pno" name="pno" placeholder="9988667766">
	
	<label for="email">E mail</label>
    <input type="text" id="email" name="email" placeholder="abc@mail.com">
	
	<label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Door no, Street">
	
	<label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="Mysuru">
	
	<label for="state">State</label>
    <input type="text" id="state" name="state" placeholder="Karnataka">
	
	<label for="pin">Pin Code</label>
    <input type="text" id="pin" name="pin" placeholder="5700..">
	
	<label for="medco">Are you currently taking any medication? </label>
	<p></p>
  <input type="radio" name="yes" value="yes" > Yes<br>
  <input type="radio" name="no" value="no"> No<br>
  <p></p>
  <label for="med">If Yes Specify</label>
    <textarea id="med" name="med" placeholder="Write something.." style="height:50px"></textarea>
<p></p>
	<label for="subject">Any Previous Medical History</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

	<label for="date">BOOK Date</label>
   <input type="text" id="date" name="date" placeholder="dd/mm/yyyy"><br>
	<br>
	<label for="hospital">Select Hospital</label>	
	<?php
	$sql=mysqli_query($connection,"SELECT id,name FROM hospital");
if(mysqli_num_rows($sql)){
$select= '<select id="hname" name="hname">';
while($rs=mysqli_fetch_array($sql)){
      $select.='<option value="'.$rs['id'].'">'.$rs['name'].'</option>';
  }
}
$select.='</select>';
echo $select;
?>


	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15589.939913528637!2d76.63562871090187!3d12.350412684204645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf709250134cf9%3A0x5f0f76a8104ac8da!2sColumbia+Asia+Hospital!5e0!3m2!1sen!2sin!4v1541506651697" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	

	<input name="action" type="hidden" value="submit" />
    <input type="submit" value="submit">

  </form>
</div>









</body>
</html>