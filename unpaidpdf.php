<?php
include("connection.php");
  
if(isset($_REQUEST['mode'])){
	
	if($_REQUEST['mode']=='sent'){
		echo"<script>alert('Mail Sent')</script>";
	}
	else{
		echo"<script>alert('Mail Not Found')</script>";
		}
}


if(isset($_REQUEST['month']))
{
	$month=$_REQUEST["month"];
	$year=$_REQUEST["year"];
}
else{
	$month=$_POST["month"];
	$year=$_POST["year"];

}
$q="select DISTINCT f.seatno,f.month,f.year,a.name, a.mobile,a.email from fee f inner join admission a on f.seatno=a.seatno where month!='$month' AND year=$year group by f.seatno,a.seatno";



echo "<table border='1' width='100%' cellspacing='0' cellpadding='10'>
    <caption>$month.' '.$year</caption>
    <tr>
        <th>Seat</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
		<th></th>
    </tr>";
if($res=mysqli_query($con,$q)){
	if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_array($res)){
		// $to_email=$row[5];
		echo"<tr>
        <td>$row[0]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
		<td><a href='mail.php?month=$month & year=$year &mail=$row[5]  '><button  style='background-color:orange;border:1px solid;border-radius:20px'>Send Mail</button></a></td>
    </tr>";

            
	}
}
}







          

      
				
					
		
      






    


// $html .="</table>";
// require_once __DIR__ . '\vendor\autoload.php';
// $mpdf= new \Mpdf\Mpdf();
// $mpdf->WriteHTML($html);
// $file="Monhtly_Report.pdf";
// $mpdf->Output($file,'I');
?>