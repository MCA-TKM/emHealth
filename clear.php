<?php

$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));

$qr="delete from RESPONSE where RMAIL='$_POST[DMAIL]'";
$qr1="delete from FEATURES where FMAIL='$_POST[DMAIL]'";
mysqli_query($con,$qr);
mysqli_query($con,$qr1);
?>