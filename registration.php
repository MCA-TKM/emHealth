<?php

$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));
$qr="insert into REGISTRATION(NAME,AGE,GENDER,EMAIL,PASSWORD) values('$_POST[NAME]','$_POST[AGE]','$_POST[GENDER]','$_POST[EMAIL]','$_POST[PASSWORD]')";
if(mysqli_query($con,$qr))
    echo "REGISTRATION SUCCESSS";
    
?>