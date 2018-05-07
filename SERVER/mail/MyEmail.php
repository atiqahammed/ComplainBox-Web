<?php  

class MyEmail
{
	
    
	function __construct()
	{
		require("src/PHPMailer.php");
  		require("src/SMTP.php");
	}

	function sendEmail($email) {
		$mail = new PHPMailer\PHPMailer\PHPMailer();
	    $mail->IsSMTP(); 
	    $mail->SMTPDebug = 1;
	    $mail->SMTPAuth = true; 
	    $mail->SMTPSecure = 'ssl'; 
	    $mail->Host = "smtp.gmail.com";
	    $mail->Port = 465;
	    $mail->IsHTML(true);
	    $mail->Username = "complainbox.a.k@gmail.com";
    	$mail->Password = "complainbox123456789";
    	$mail->SetFrom("complainbox.a.k@gmail.com");
    	

    	$mail->Subject = $email['sub'];
    	$mail->Body = $email['body'];
    	$mail->AddAddress($email['to']);

    	

     	if(!$mail->Send()) {
     		
    	} else {
    		
        	if (isset($email['path'])) {
     			//echo "done";
                header("location: ".$email['path']);
     		}
    	}
	}
}

?>