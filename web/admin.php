<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order1.css">
<title>Dashboard - Secured Page</title>
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
  
    background-image: url("dockid.jpg");

    height: 100%; 

 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>

<div class="topnav">
  <a href="order.html">Home</a>
  <a href="#book">Book</a>
  <a href="not.php">Register</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a style="float:right" href="book.php">Logout</a>
</div>

<div class="bg">
<br>
<p>Welcome to Dashboard.</p>
<div class="vertical-menu">
<p><a href="insert.php">Insert New Hospital</a></p>
<p><a href="view.php">View Hospitals</a><p>
<p><a href="viewuser.php">View Users</a><p>
<p><a href="viewbook.php">View Bookings</a><p>

</div></div> 
   
</body>
</html>
