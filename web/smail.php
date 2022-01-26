<?php
 $connection = mysqli_connect('localhost','root','','demo')
 or die('Error connecting to MySQL server.');
 
 $count=1;
 $hours_in_day   = 24;
$minutes_in_hour= 60;
$seconds_in_mins= 60;
$sel_query="Select * from reg;";
$result = mysqli_query($connection,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
$count++;
$name=$row["name"]; 
$email=$row["email"];
$date=$row["bday"];
$birth_date     = new DateTime($date."T00:00:00");
$current_date   = new DateTime();

$diff           = $birth_date->diff($current_date);

echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
echo $months    = ($diff->y * 12) + $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
echo $weeks     = floor($diff->days/7) . " weeks " . $diff->d%7 . " day(s)"; echo "<br/>";
echo $days      = $diff->days . " days"; echo "<br/>";
echo $hours     = $diff->h + ($diff->days * $hours_in_day) . " hours"; echo "<br/>";
echo $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " minutest"; echo "<br/>";
echo $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " seconds"; echo "<br/>";

echo $years;
echo $email;
echo $date;

$y=$diff->y;
$m=$diff->y * 12 + $diff->m ;
$w=floor($diff->days/7);
$d=$diff->d%7;
$ds=$diff->days;echo "<br>";
echo $ds;echo "<br>";
if ($y==0 && $ds==0) {
	$vac="The vaccination for birth are\nBacillus Calmette–Guérin (BCG)\nOral polio vaccine (OPV 0)\nHepatitis B (Hep – B1)";
	mail($email,'KIDGENIX',$vac,'From:swaroopsmys@gmail.com');
}
else if($w==6 && $ds==42){
	$vac="The vaccination for 6 vweeks are\nDiptheria, Tetanus and Pertussis vaccine (DTwP 1)\nInactivated polio vaccine (IPV 1)\nHepatitis B  (Hep – B2)\nHaemophilus influenzae type B (Hib 1)\nRotavirus 1\nPneumococcal conjugate vaccine (PCV 1)";
	mail($email,'KIDGENIX',$vac,'From:swaroopsmys@gmail.com');
}
else if($w==10 && $ds==70){
	$vac="The vaccination for 10 vweeks are\nDiptheria, Tetanus and Pertussis vaccine (DTwP 2)\nInactivated polio vaccine (IPV 2)\nHaemophilus influenzae type B (Hib 2)\nRotavirus 2\nPneumococcal conjugate vaccine (PCV 2)";
	mail($email,'KIDGENIX',$vac,'From:swaroopsmys@gmail.com');
}
else if($w==14 && $ds==98){
	$vac="The vaccination for 14 vweeks are\nDiptheria, Tetanus and Pertussis vaccine (DTwP 3)\nInactivated polio vaccine (IPV 3)\nHaemophilus influenzae type B (Hib 3)\nRotavirus 3\nPneumococcal conjugate vaccine (PCV 3)";
	mail($email,'KIDGENIX','will this work','From:swaroopsmys@gmail.com');
}
else if($w==14 && $ds==98){
	$vac="The vaccination for 14 vweeks are\nDiptheria, Tetanus and Pertussis vaccine (DTwP 3)\nInactivated polio vaccine (IPV 3)\nHaemophilus influenzae type B (Hib 3)\nRotavirus 3\nPneumococcal conjugate vaccine (PCV 3)";
	mail($email,'KIDGENIX','will this work','From:swaroopsmys@gmail.com');
}

}


?>