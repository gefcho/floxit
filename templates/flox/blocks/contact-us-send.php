<?php 
	$msg = "";
	if($_POST['fname']) $msg .= "<strong>First Name:</strong> ".$_POST['fname'];
	if($_POST['lname']) $msg .= "<br><strong>Last Name:</strong> ".$_POST['lname'];
	$msg .= "<br><strong>Phone:</strong> ".$_POST['phone'];
	if($_POST['email']) $msg .= "<br><strong>Email:</strong> ".$_POST['email'];
	$msg .= "<br><strong>City:</strong> ".$_POST['city'];
	$msg .= "<br><strong>Category:</strong> ".$_POST['category'];
	if($_POST['text']) $msg .= "<br><strong>Message:</strong> ".$_POST['text'];
    
	$EOL = "\r\n";
    $boundary     = "--".md5(uniqid(time())); 
    $headers    = "MIME-Version: 1.0;$EOL";   
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
    $headers   .= "From: informer@floxit.co"; // mail from 
      
    $multipart  = "--$boundary$EOL";   
    $multipart .= "Content-Type: text/html; charset=utf8$EOL";   
    $multipart .= "Content-Transfer-Encoding: base64$EOL";   
    $multipart .= $EOL;
    $multipart .= chunk_split(base64_encode($msg));  
	
	$to  = 'gef1207@gmail.com';  // mail to change here

	$subject = $_POST['city'].", ".$_POST['category']; 
	
	mail($to, $subject, $multipart, $headers); 
								
?>