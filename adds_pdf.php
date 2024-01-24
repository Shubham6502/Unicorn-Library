<?php
include("connection.php");
$month=$_POST["month"];
$year=$_POST["year"];
$q="select f.seatno,f.month,f.year,a.name, a.mobile,a.email,f.fees from fee f inner join admission a on f.seatno=a.seatno where month='$month' AND year='$year'";



$html .="<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    <caption>$month -$year</caption>
    <tr>
        <th>Seat</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Amount</th>
    </tr>";
    $total=0;
if($res=mysqli_query($con,$q)){
    while($row=mysqli_fetch_array($res)){
        $total+=$row[6];
       
        $html .= "

    <tbody>
        <tr>
            <td>$row[0]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[6]</td>
        </tr>
";





    }
}

$html .="
<tr><td colspan='3'>Total</td><td>$total</td></tr>
</tbody>
</table>";
require_once __DIR__ . '\vendor\autoload.php';
$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file="Monhtly_Report.pdf";
$mpdf->Output($file,'I');
?>