<?php

$con= new mysqli('localhost','u810675456_proj','hupproj','u810675456_proj')or die("Could not connect to mysql".mysqli_error($con));
$qr="insert into huptable(id,email,status) values('$_POST[RID]','$_POST[ID]','$_POST[RESPONSE]')";
if(mysqli_query($con,$qr))
    echo "SUCCESSS";
    
$con->close();
?>
