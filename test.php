<?php
include('smtp/PHPMailerAutoload.php');

$to_email="shubhampatil6502@gmail.com";
$subject="Pending Fees";
$body="Hi sir/Mam <br>
You are not payed your this month fees please pay and co-operate  with us<br>
thank you
<button>Click here </button>";
$header="From:Unicorn Study Room,Kolhapur";


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
		return 'Sent';
	}
}
?>