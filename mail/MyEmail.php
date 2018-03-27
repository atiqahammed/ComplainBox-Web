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
	    $mail->Username = "khayrul.atiq@gmail.com";
    	$mail->Password = "08170822";
    	$mail->SetFrom("khayrul.atiq@gmail.com");
    	

    	$mail->Subject = $email['sub'];
    	$mail->Body = $email['body'];
    	$mail->AddAddress($email['to']);

     	if(!$mail->Send()) {
        	//echo "Mailer Error: " . $mail->ErrorInfo;
    	} else {
        	//echo 'send succefully';
        	//header("location: index.php");
    	}
	}
}

?>