
<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');
 $con= new mysqli('localhost','id7967766_emhealth','emhealth','id7967766_emhealth')or die("Could not connect to mysql".mysqli_error($con));
 $qr="select * from QUESTIONNAIRE";
 $result = mysqli_query($con, $qr);
 $data = array();
$fp = fopen('php://output', 'wb');
 while ( $row = $result->fetch_assoc() )
{
   $data[]=$row;

foreach ($data as $line) {
    
   fputcsv($fp, $line, ',');
                        }
}
fclose($fp);
    //echo json_encode( $data );
    
?>
