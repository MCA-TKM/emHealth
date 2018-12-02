<?php

$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));
$qr="insert into RESPONSE(RMAIL,QID,RESPONSE) values('$_POST[RMAIL]','$_POST[QID]','$_POST[RESPONSE]')";
if(mysqli_query($con,$qr))
    echo "SUCCESSS";
    
$con->close();
?>
