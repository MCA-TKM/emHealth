
<?php
$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));

$f1="select sum(RESPONSE) as rsum1 from RESPONSE where RMAIL='$_POST[DMAIL]' and QID between 21 and 25";
$f2="select sum(RESPONSE) as rsum2 from RESPONSE where RMAIL='$_POST[DMAIL]' and QID between 26 and 30";
$f3="select sum(RESPONSE) as rsum3 from RESPONSE where RMAIL='$_POST[DMAIL]' and QID between 30 and 35";
$f4="select sum(RESPONSE) as rsum4 from RESPONSE where RMAIL='$_POST[DMAIL]'  and QID between 36 and 40";
$f5="select sum(RESPONSE) as rsum5 from RESPONSE where RMAIL='$_POST[DMAIL]'  and QID between 41 and 45";


$result1 = mysqli_query($con, $f1);
$row1 = $result1->fetch_assoc();
$sum1= $row1["rsum1"];

$result2 = mysqli_query($con, $f2);
$row2 = $result2->fetch_assoc();
$sum2= $row2["rsum2"];

$result3 = mysqli_query($con, $f3);
$row3= $result3->fetch_assoc();
$sum3= $row3["rsum3"];

$result4 = mysqli_query($con, $f4);
$row4 = $result4->fetch_assoc();
$sum4= $row4["rsum4"];

$result5 = mysqli_query($con, $f5);
$row5 = $result5->fetch_assoc();
$sum5= $row5["rsum5"];


$qr="Insert into FEATURES(FMAIL,F1,F2,F3,F4,F5) values('$_POST[DMAIL]','$sum1','$sum2','$sum3','$sum4','$sum5')";

if(mysqli_query($con,$qr))
echo "SUCCESSFULLY ADDED"

?>