<?php

 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');
 ?>
 
 <!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order.css">
<style>
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

body, html {
    height: 100%;
    margin: 0;
}

.bg {
  
    background-image: url("injection.jpg");

    height: 100%; 

 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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

<div class="bg">
<div class="vertical-menu">
<br>
<p><a href="admin.php">Dashboard</a></p>
<p> <a href="insert.php">Insert New Record</a></p> 
<h2>View Records</h2>
</div>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Pin Code</strong></th>
<th><strong>Ph.No</strong></th>
<th><strong>Address</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from hospital ORDER BY id desc;";
$result = mysqli_query($connection,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["pin"]; ?></td>
<td align="center"><?php echo $row["ph"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</div>
</html>