<?php

$EmailFrom = "scholarscooperative@wayne.edu";
$EmailTo = "scholarscooperative@wayne.edu";
$Subject = "Message for The Scholars Cooperative";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
$Website = Trim(stripslashes($_POST['Website'])); 

// validation

if (strlen($Website) != 0) {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	  exit;
}

else {

	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $Name;
	$Body .= "\n";
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";
	$Body .= "\n";
	$Body .= "Tel: ";
	$Body .= $Tel;
	$Body .= "\n";
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $Message;
	$Body .= "\n";

	// send email 
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

	// redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	}
}
?>