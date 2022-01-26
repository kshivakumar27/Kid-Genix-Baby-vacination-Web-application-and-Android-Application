<?php
$statestring="Mississippi Alabama Texas Massachetts Kansas";
$statesarray=[];
$states=explode(' ',$statestring);
echo "String is";
foreach($states as $i=>$value)
print("STATES[$i]=$value<br/>");

foreach($states as $state)
{
if(preg_match('/xas$/',($state)))
{$statesarray[0]=($state);
}
}
foreach($states as $state)
{
if(preg_match('/^K.*s$/',($state)))
{$statesarray[1]=($state);
}
}
foreach($states as $state)
{
if(preg_match('/^M.*s$/',($state)))
{$statesarray[2]=($state);
}
}
foreach($states as $state)
{
if(preg_match('/a$/',($state)))
{$statesarray[3]=($state);
}
}


foreach($statesarray as $i=>$value)
print("STATES[$i]=$value<br/>");

?>
