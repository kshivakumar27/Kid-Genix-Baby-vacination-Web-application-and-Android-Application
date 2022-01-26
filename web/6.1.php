<!DOCTYPE HTML>
<html>
<head>
<style>
p{
color:white;
font-size:90px;
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
}
body{background-color:lightblue;}
</style>
<body>
<p>
<?php
session_start();
if(isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
	$_SESSION['views']=1;
echo "view cnt=".$_SESSION['views'];
?>	
</p>
</body>
</head>
</html>
