<?php

$con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));

$qr="select * from QUESTIONNAIRE";

$result = mysqli_query($con, $qr);

$data = array();

while ( $row = $result->fetch_assoc() ){
   // $data[] = json_encode($row);
   $data[]=$row;
}
    echo json_encode( $data );

   
?>



