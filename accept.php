<?php
include("connection.php");
$no=$_REQUEST["no"];
$mo=$_REQUEST["mo"];
$date=date('Y-m=d');

$q="select * from seat where no=$no AND mobile=$mo";
if($res=mysqli_query($con,$q)){
    if($row=mysqli_fetch_array($res)){
       
        $name=$row[1];
        $mobile=$row[2];
        $email=$row[3];

        $r="select * from admission";
        $flag=0;
        if($res=mysqli_query($con,$r)){
            while($row=mysqli_fetch_array($res)){
                if($row[0]==$no){
                    $flag=1;
                }

              
            }

        }
        if($flag==0){
            $r="insert into admission values($no,'$name','$mobile','$email','$date')";
            if(mysqli_query($con,$r)){


                
               

                // $fields = array(
                //     "variables_values" => "Your Desk No:$no.sucessfully Booked",
                //     "route" => "otp",
                //     "numbers" => "$mo",
                // );
                
                // $curl = curl_init();
                
                // curl_setopt_array($curl, array(
                //   CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                //   CURLOPT_RETURNTRANSFER => true,
                //   CURLOPT_ENCODING => "",
                //   CURLOPT_MAXREDIRS => 10,
                //   CURLOPT_TIMEOUT => 30,
                //   CURLOPT_SSL_VERIFYHOST => 0,
                //   CURLOPT_SSL_VERIFYPEER => 0,
                //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                //   CURLOPT_CUSTOMREQUEST => "POST",
                //   CURLOPT_POSTFIELDS => json_encode($fields),
                //   CURLOPT_HTTPHEADER => array(
                //     "authorization: 3fIYdyzs8WLUAa0KXHRCFBMtE9PbO1T7S5qjQlDVx6ieruvg4o93y0zjscPSt5VLNFBJGg7WDYEQekwI",
                //     "accept: */*",
                //     "cache-control: no-cache",
                //     "content-type: application/json"
                //   ),
                // ));
                
                // $response = curl_exec($curl);
                // $err = curl_error($curl);
                
                // curl_close($curl);
                
                // if ($err) {
                //   echo "cURL Error #:" . $err;
                // } else {
                //   echo $response;
                // }
    
    
                $s="delete from seat where no=$no AND mobile=$mo";
                if(mysqli_query($con,$s))
                {
                    header("Location:request.php?mode=accept");
                    
                }
            }
            
        }
        else{
            header("Location:request.php?mode=fail");
        }

      
    }



}