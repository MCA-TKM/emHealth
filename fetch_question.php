<?php

$con= new mysqli('localhost','u810675456_proj','hupproj','u810675456_proj')or die("Could not connect to mysql".mysqli_error($con));

$qr="select * from questionnaire";

$result = mysqli_query($con, $qr);

$data = array();

while ( $row = $result->fetch_assoc() ){
   // $data[] = json_encode($row);
   $data[]=$row;
}
    echo json_encode( $data );

   
?>



