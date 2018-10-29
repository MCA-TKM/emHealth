<?php

$con= new mysqli('localhost','u810675456_proj','hupproj','u810675456_proj')or die("Could not connect to mysql".mysqli_error($con));

$qr="insert into questionnaire(QUESTION,OPTION1,OPTION2,OPTION3,OPTION4) values('$_POST[QUESTION]','$_POST[OPTION1]','$_POST[OPTION2]','$_POST[OPTION3]','$_POST[OPTION4]')";

if(mysqli_query($con,$qr))
echo "SUCCESSFULLY ADDED"

   
?>



