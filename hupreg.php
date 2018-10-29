<?php

$con= new mysqli('localhost','u810675456_proj','hupproj','u810675456_proj')or die("Could not connect to mysql".mysqli_error($con));
$qr="insert into registration(NAME,AGE,GENDER,EMAIL,PASSWORD) values('$_POST[NAME]','$_POST[AGE]','$_POST[GENDER]','$_POST[EMAIL]','$_POST[PASSWORD]')";
if(mysqli_query($con,$qr))
    echo "REGISTRATION SUCCESSS";
    
    $con->close();
?>

