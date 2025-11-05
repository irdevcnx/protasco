<?php
        $captcha;
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo "<script type='text/javascript'>alert('Please check the the captcha form.');window.history.go(-1);</script>";
          exit;
        }
        $secretKey = "6LfS5uwlAAAAAJQhyK84jacXKGUCBr8jDbnHTzFF";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
        	echo '<script type="text/javascript">alert("Your particulars have been sent successfully! Thank you");window.location = "contact.php"</script>';
        } else {
        	echo "<script type='text/javascript'>alert('You are spammer !');window.history.go(-1);</script>";
        }
?>
<?
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$headers .= "Reply-To: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Return-Path: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "From: IRCNX <sender@ir.chartnexus.com>\r\n";
	$headers .= "Bcc: IRCNX <mizakamelia@gmail.com>\r\n";
	
		$subjectSend="Protasco Berhad Enquiry Form";
		
		
		
		
		$emailBody="Enquiry Form"."\n"."\n";
		$emailBody.="Name: ".$name."\n"."\n";
		$emailBody.="Email : ".$email."\n"."\n";
		$emailBody.="Subject : ".$subject."\n"."\n";
		$emailBody.="Message : ".$message."\n"."\n";
		
		
// 				$to = "miezakamelia@gmail.com,ahmad.kamelia@chartnexus.com";
		$to = "ccd@protasco.com.my";
		$sent = cnxsendmail( $to, $subjectSend, $emailBody, $headers);
		
		
		function cnxsendmail($receiverMail, $subject, $content, $isHtmlMail){
		    
		    $url = "http://cnmail.chartnexus.com:9192/util/emailv2.php?apikey=12345678abc&to=".urlencode($receiverMail)."&subject=".urlencode($subject)."&message=".urlencode($content)."&html_email=".urlencode($isHtmlMail);
		    $contents = file_get_contents($url);
		    return $contents;
		    
		}

?>