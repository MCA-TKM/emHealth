<?php
$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));

$email=$_POST['EMAIL'];
$pass=$_POST['PASSWORD'];

$qr="select * from REGISTRATION where EMAIL='$email' AND PASSWORD='$pass'";
$result = mysqli_query($con,$qr);
$row=mysqli_fetch_array($result);
 if($row)
 {
 	
 //	$new=mysqli_query($con,$imp);
 //	$row1=mysqli_fetch_array($new);
 	$arr = array('status' => 'true');
   echo json_encode($arr);
 }
else
{
	$arr = array('status' => 'false');
   echo json_encode($arr);
	}
mysqli_close($con);
?>













//<?php

//$con= new mysqli('localhost','u810675456_proj','hupproj','u810675456_proj')or die("Could not connect to mysql".mysqli_error($con));

//$email=$_POST['EMAIL'];
//$pass=$_POST['PASSWORD'];

//$qr="select * from hupreg where NAME='email' AND PASSWORD='password'";

///if(mysqli_query($con,$qr)>0)
{
//    ECHO "SUCCESSFULLY LOGGED IN";
}

//else
//ECHO "INCORRECT USERNAME OR PASSWORD";

?>
