<?php
include("connection.php");
include('smtp/PHPMailerAutoload.php');
$mail=$_REQUEST['mail'];
$month=$_REQUEST['month'];
$year=$_REQUEST['year'];
if($mail==""){
   
    header("Location:unpaidpdf.php?month=$month & year=$year & mode=null");
}
else{
    echo $mail;
}
$to_email=$mail;
$subject="Pending Fees";
$body="Hi sir/Mam <br>
You are not payed your this month fees please pay and co-operate  with us<br>
thank you";
$header="From:Unicorn Study Room,Kolhapur";
// if(mail($to_mail,$subject,$body,$header)){
//     echo"mail sent succesfully";

// }
// else{
//     echo"failed";

// }
echo smtp_mailer($to_email,$subject,$body);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "mrecofreak2020@gmail.com";
	$mail->Password = "qhyqynfvkxuqgjrf";
	$mail->SetFrom("mrecofreak2020@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		header("Location:unpaidpdf.php?month=$month & year=$year & mode=sent");
	}
}

?>