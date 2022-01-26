<?php

 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');
 
 $id=$_REQUEST['id'];
$query = "SELECT * from hospital where id='".$id."'"; 
$result = mysqli_query($connection, $query) or die ( "ERROR");
$row = mysqli_fetch_assoc($result);
 ?>
 <!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order.css">
<body>

<div class="topnav">
  <a  href="#home">Home</a>
  <a  href="book.php">Book</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  
  <a style="float:right" href="order.html">Logout</a></li>
</div>
<p><a href="admin.php">Dashboard</a></p>
<p> <a href="insert.php">Insert New Hospital</a></p> 
<p> <a href="view.php">View Hospital</a></p> 


<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$pin=$_REQUEST['pin'];
$ph=$_REQUEST['ph'];
$address=$_REQUEST['address'];
$update="update hospital set name='".$name."', email='".$email."',pin='".$pin."',ph='".$ph."' where id='".$id."'";
mysqli_query($connection, $update) or die("error");
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter Email" required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="pin" placeholder="Enter Pin Code" required value="<?php echo $row['pin'];?>" /></p>
<p><input type="text" name="ph" placeholder="Enter Phone Number" required value="<?php echo $row['ph'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter address" required value="<?php echo $row['address'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>

</body>
</html>