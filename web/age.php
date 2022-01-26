<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="order.css">
<style>
#custom-search-input{
    padding: 3px;
    border: solid 1px #E4E4E4;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
	
	
}

body, html {
    height: 100%;
    margin: 0;
}

.bg {
  
    background-image: url("syringe.jpg");

    height: 100%; 

 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style
<body>
<div class="topnav">
  <a href="order.html">Home</a>
  <a class="active" href="#book">Book</a>
  <a href="not.php">Register</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a style="float:right" href="book.php">Logout</a></li>
</div>
<div class="bg">
<div class="container">
	<div class="row">
        <div class="col-md-6">
<form action="age.php" method="post">
 <div id="custom-search-input">
 <div class="input-group col-md-12">
 <h1> Enter date of Birth: </h1>       
  <input type="date" class="form-control input-lg" name="bday" id="bday"><br>
   <input name="action" type="hidden" value="submit" />
  <input type="submit"  class="btn btn-info btn-lg"> 
  <p></p>
                </div>
            </div>
        </div>
	</div>
</div>
 
</form>
<?php
function test(){
$hours_in_day   = 24;
$minutes_in_hour= 60;
$seconds_in_mins= 60;

$b_date = date('Y-m-d', strtotime($_POST['bday']));
echo $b_date;echo "<br/>";
$birth_date     = new DateTime($b_date."T00:00:00");
$current_date   = new DateTime();

$diff           = $birth_date->diff($current_date);

echo $years     = $diff->y . " years " . $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
echo $months    = ($diff->y * 12) + $diff->m . " months " . $diff->d . " day(s)"; echo "<br/>";
echo $weeks     = floor($diff->days/7) . " weeks " . $diff->d%7 . " day(s)"; echo "<br/>";
echo $days      = $diff->days . " days"; echo "<br/>";
#echo $hours     = $diff->h + ($diff->days * $hours_in_day) . " hours"; echo "<br/>";
#echo $mins      = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour) . " minutest"; echo "<br/>";
#echo $seconds   = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins) . " seconds"; echo "<br/>";
$pkd="progtrckr-done";
$pkt="progtrckr-todo";
$pk="progtrckr";
$num="4";
$num1="5";
$y=$diff->y;
$m=$diff->y * 12 + $diff->m ;
$w=floor($diff->days/7);
$d=$diff->d%7;
$ds=$diff->days;
$con="container";
$pg="panel-group";
$ppd="panel panel-default";
$ph="panel-heading";
$pt="panel-title";
$col="collapse";
$col1="#collapse1";
$pcc="panel-collapse collapse";
$pb="panel-body";
$pf="panel-footer";
$c1="collapse1";
$link="window.location.href='reg.php'";
$c="Center";
$tc="text-align:center";

if ($y==0 && $ds==0) { 
		echo "<ol class=$pk data-progtrckr-steps=$num>";
		echo "<li class=$pkt>Birth</li><!--";
        echo "--><li class=$pkt>6 Weeks</li><!--";
		echo "--><li class=$pkt>10 Weeks</li><!--";
		echo "--><li class=$pkt>14 Weeks</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>Birth</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Bacillus Calmette–Guérin (BCG)</div>";
        echo "<div class=$pb>Oral polio vaccine (OPV 0)</div>";
		 echo "<div class=$pf>Hepatitis B (Hep – B1)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
}

else if  ( $y==0 && $w<=6  ) {
        echo "<ol class=$pk data-progtrckr-steps=$num>";
		echo "<li class=$pkd>Birth</li><!--";
        echo "--><li class=$pkt>6 Weeks</li><!--";
		echo "--><li class=$pkt>10 Weeks</li><!--";
		echo "--><li class=$pkt>14 Weeks</li>";
    echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>6 Weeks</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diptheria, Tetanus and Pertussis vaccine (DTwP 1)</div>";
        echo "<div class=$pb>Inactivated polio vaccine (IPV 1)</div>";
		echo "<div class=$pb>Hepatitis B  (Hep – B2)</div>";
		echo "<div class=$pb>Haemophilus influenzae type B (Hib 1)</div>";
		echo "<div class=$pb>Rotavirus 1</div>";
		 echo "<div class=$pf>Pneumococcal conjugate vaccine (PCV 1)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y==0 && $w>6 && $w<=10 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num>";
		echo "<li class=$pkd>Birth</li><!--";
        echo "--><li class=$pkd>6 Weeks</li><!--";
		echo "--><li class=$pkt>10 Weeks</li><!--";
		echo "--><li class=$pkt>14 Weeks</li>";
    echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>10 Weeks</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diptheria, Tetanus and Pertussis vaccine (DTwP 2)</div>";
        echo "<div class=$pb>Inactivated polio vaccine (IPV 1)</div>";
		echo "<div class=$pb>Haemophilus influenzae type B (Hib 2)</div>";
		echo "<div class=$pb>Rotavirus 2</div>";
		 echo "<div class=$pf>Pneumococcal conjugate vaccine (PCV 2)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y==0 && $w<=14 && $w>10 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num>";
		echo "<li class=$pkd>Birth</li><!--";
        echo "--><li class=$pkd>6 Weeks</li><!--";
		echo "--><li class=$pkd>10 Weeks</li><!--";
		echo "--><li class=$pkt>14 Weeks</li>";
    echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>14 Weeks</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diptheria, Tetanus and Pertussis vaccine (DTwP 3)</div>";
        echo "<div class=$pb>Inactivated polio vaccine (IPV 3)</div>";
		 echo "<div class=$pd>Haemophilus influenzae type B (Hib 3)</div>";
		 echo "<div class=$pd>Rotavirus 3</div>";
		 echo "<div class=$pf>Pneumococcal conjugate vaccine (PCV 3)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y==0 && $m<=6 && $w>14 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkt>6 months</li><!--";
        echo "--><li class=$pkt>9 months</li><!--";
		echo "--><li class=$pkt>12 months</li><!--";
		echo "--><li class=$pkt>15 months</li><!--";
		echo "--><li class=$pkt>18 months</li>";
    echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>6 Months</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Oral polio vaccine (OPV 1)</div>";
		 echo "<div class=$pf>Hepatitis B (Hep – B3)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y==0 && $m<=9 && $m>6 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>6 months</li><!--";
        echo "--><li class=$pkt>9 months</li><!--";
		echo "--><li class=$pkt>12 months</li><!--";
		echo "--><li class=$pkt>15 months</li><!--";
		echo "--><li class=$pkt>18 months</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>9 Months</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Oral polio vaccine (OPV 2)</div>";
		 echo "<div class=$pd>Measles, Mumps, and Rubella (MMR – 1)</div>";
		 echo "<div class=$pf>Typhoid Conjugate Vaccine (9 – 12)Months</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  (($y==1 && $m==12) || $m<12 && $m>9 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>6 months</li><!--";
        echo "--><li class=$pkd>9 months</li><!--";
		echo "--><li class=$pkt>12 months</li><!--";
		echo "--><li class=$pkt>15 months</li><!--";
		echo "--><li class=$pkt>18 months</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>12 Months</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Typhoid Conjugate Vaccine (9 – 12)Months</div>";
		 echo "<div class=$pf>Hepatitis A (Hep – A1)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
    
	}
else if  ($y==1 && $m<=15 && $m>12 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>6 months</li><!--";
        echo "--><li class=$pkd>9 months</li><!--";
		echo "--><li class=$pkd>12 months</li><!--";
		echo "--><li class=$pkt>15 months</li><!--";
		echo "--><li class=$pkt>18 months</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>15 Months</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Measles, Mumps, and Rubella (MMR 2)</div>";
        echo "<div class=$pb>Varicella 1</div>";
		 echo "<div class=$pf>PCV booster</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y==1 && $m<=18 && $m>15 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>6 months</li><!--";
        echo "--><li class=$pkd>9 months</li><!--";
		echo "--><li class=$pkd>12 months</li><!--";
		echo "--><li class=$pkd>15 months</li><!--";
		echo "--><li class=$pkt>18 months</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>16-18 Months</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diphtheria, Perussis, and Tetanus (DTwP B1/DTaP B1)</div>";
        echo "<div class=$pb>Inactivated polio vaccine (IPV B1)</div>";
		 echo "<div class=$pd>Haemophilus influenzae type B (Hib B1)</div>";
		 echo "<div class=$pf>Hepatitis A (Hep – A2) (on 18th Month)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y>=2 && $y<4 ) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>2 years</li><!--";
        echo "--><li class=$pkt>4 years</li><!--";
		echo "--><li class=$pkt>6 years</li><!--";
		echo "--><li class=$pkt>10 years</li><!--";
		echo "--><li class=$pkt>12 years</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>2 years</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Booster of Typhoid Conjugate Vaccine</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y<=4 && $y>2) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>2 years</li><!--";
        echo "--><li class=$pkt>4 years</li><!--";
		echo "--><li class=$pkt>6 years</li><!--";
		echo "--><li class=$pkt>10 years</li><!--";
		echo "--><li class=$pkt>12 years</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>4-6 years</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diphtheria, Perussis, and Tetanus (DTwP B2/DTaP B2)</div>";
        echo "<div class=$pb>Oral polio vaccine (OPV 3)</div>";
		 echo "<div class=$pb>Varicella 2</div>";
		 echo "<div class=$pf>Measles, Mumps, and Rubella (MMR 3)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y<=6 && $y>4) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>2 years</li><!--";
        echo "--><li class=$pkd>4 years</li><!--";
		echo "--><li class=$pkt>6 years</li><!--";
		echo "--><li class=$pkt>10 years</li><!--";
		echo "--><li class=$pkt>12 years</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>4-6 years</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Diphtheria, Perussis, and Tetanus (DTwP B2/DTaP B2)</div>";
        echo "<div class=$pb>Oral polio vaccine (OPV 3)</div>";
		 echo "<div class=$pb>Varicella 2</div>";
		 echo "<div class=$pf>Measles, Mumps, and Rubella (MMR 3)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y<=10 && $y>6) {
        echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>2 years</li><!--";
        echo "--><li class=$pkd>4 years</li><!--";
		echo "--><li class=$pkd>6 years</li><!--";
		echo "--><li class=$pkt>10 years</li><!--";
		echo "--><li class=$pkt>12 years</li>";
		echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
          echo "<a data-toggle=$col href=$col1>10-12 years</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Tdap/Td</div>";
		 echo "<div class=$pf>Human Papilloma Virus (HPV)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";
	}
else if  ($y<=12 && $y>10) {
	echo "<ol class=$pk data-progtrckr-steps=$num1>";
		echo "<li class=$pkd>2 years</li><!--";
        echo "--><li class=$pkd>4 years</li><!--";
		echo "--><li class=$pkd>6 years</li><!--";
		echo "--><li class=$pkd>10 years</li><!--";
		echo "--><li class=$pkt>12 years</li>";
			echo "<p></p>";
		echo "<div class=$con>";
  echo "<h2>Vaccnications</h2>";
  echo "<p></p>";
  echo "<div class=$pg>";
   echo " <div class=$ppd>";
      echo "<div class=$ph>";
       echo "<h4 class=$pt>";
         echo "<a data-toggle=$col href=$col1>10-12 years</a>";
        echo "</h4>";
      echo "</div>";
      echo "<div id=$c1 class=$pcc>";
        echo "<div class=$pb>Tdap/Td</div>";
		 echo "<div class=$pf>Human Papilloma Virus (HPV)</div>";
      echo "</div>";
    echo "</div>";
  echo "</div>";
echo "</div>";
echo " <div style=$tc> <button onclick=$link >Book</button><divform>";

}
}
if(isset($_POST['action']))
{          
    if($_POST['action']=="submit")
    {
		test();
	}
}
?>
  </div>
</body>
</html>