<?php
 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id"; 
$result = mysqli_query($connection,$query) or die ("ERROR");
header("Location: viewuser.php"); 
?>