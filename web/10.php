<?php
$con= mysqli_connect('localhost','root','','demo') 
or die('error');
?>
<!DOCTYPE HTML>
<html>
<body>
<style>
table td,th
{
border:1px solid black;
width:33%;
text-align:center;
border-colapse:colapse;
background-color:lightblue;
}
table{margin:auto;}
</style>
<table>
<tr><th colspan='3'>Before Sorting</th></tr>
<tr><th>Usn</th><th>Name</th><th>Address</th></tr>
<?php
$a=[];
$sql="select * from student";
$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($res)) 
{
echo "<tr>";
echo "<td>".$row["usn"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["address"]."</td></tr>";
array_push($a,$row["usn"]);
}
echo "</table>";
$n=count($a);
$b=$a;
for($i=0;$i<($n-1);$i++)
{
	$pos=$i;
	for($j=$i+1;$j<$n;$j++)
	{
		if($a[$pos]>$a[$j])
			$pos=$j;
	}
	if($pos!=$i)
	{
	$temp=$a[$i];
	$a[$i]=$a[$pos];
	$a[$pos]=$temp;
	}
}
$c=[];
$d=[];

$res = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($res)) 
{
for($i=0;$i<$n;$i++)
{
		if($row["usn"]==$a[$i]) {
							$c[$i] = $row["name"];
							$d[$i] = $row["address"];
						}
					}
				}
			
			echo "<br><table>";
			echo "<tr><td colspan='3'>AFTER SORTING</td><tr>";
			echo "<tr>";
			echo "<th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
			for($i=0; $i<$n; $i++) {
				echo "<tr>";
				echo "<td>" .$a[$i]."</td>";
				echo "<td>" .$c[$i]."</td>";
				echo "<td>" .$d[$i]."</td>";
			}
?>


</table>
</body>
</html>