<?php

$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));

$qr1="select F1 as ftr1 from FEATURES where FMAIL='$_POST[DMAIL]'";
$qr2="select F2 as ftr2 from FEATURES where FMAIL='$_POST[DMAIL]'";
$qr3="select F3 as ftr3 from FEATURES where FMAIL='$_POST[DMAIL]'";
$qr4="select F4 as ftr4 from FEATURES where FMAIL='$_POST[DMAIL]'";
$qr5="select F5 as ftr5 from FEATURES where FMAIL='$_POST[DMAIL]'";


$result1 = mysqli_query($con, $qr1);
$row1 = $result1->fetch_assoc();
$ft1= $row1["ftr1"];

$result2 = mysqli_query($con, $qr2);
$row2 = $result2->fetch_assoc();
$ft2= $row2["ftr2"];

$result3 = mysqli_query($con, $qr3);
$row3 = $result3->fetch_assoc();
$ft3= $row3["ftr3"];

$result4 = mysqli_query($con, $qr4);
$row4 = $result4->fetch_assoc();
$ft4= $row4["ftr4"];

$result5 = mysqli_query($con, $qr5);
$row5= $result5->fetch_assoc();
$ft5= $row5["ftr5"];



$maxx=max(array($ft1, $ft2, $ft3,$ft4,$ft5));

if($ft1==$maxx)
{
//$ans= "WORK PRESSURE";
}
elseif($ft2==$maxx)
{
$ans= "COPING STYLE";
}
elseif($ft3==$maxx)
{
$ans= "SELF PROMOTION BURDEN";
}
elseif($ft4==$maxx)
{
$ans= "ECONOMIC BURDEN";
}
elseif($ft5==$maxx)
{
$ans= "EXTERNAL SOCIAL SUPPORT";
}

echo $ans;

?>