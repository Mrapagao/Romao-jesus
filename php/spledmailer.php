<?php
@extract($_POST);
$admin = 'comercial@marfoto.net' ; // Change to your admin email 'from' address
$subject = 'Formulario do Website'; //Your email subject
$name = spledmailer($fname); //can be stripslashes('name');
$email = spledmailer($email);
// Your HTML message with table, links and images
$message = '
<html>
<head>
<title>HTML & CSS Tutorial</title>
</head>
<body>
<p style="color: red;"><img src="http://www.wickham43.net/images/orangew90x90.jpg" alt="Orange W"> Here are some urls regarding my tutorial</p>
<table border="1" cellspacing="2" cellpadding="20" bgcolor="#eeeeee">
<tr>
<th>Introduction</th><th>Contents</th><th>Useful Sites</th>
</tr>
<tr>
<td><img src="http://www.wickham43.net/images/green16x16.jpg" alt="Green Square"/> <a href="http://www.wickham43.net/">Introduction</a></td>
<td><img src="http://www.wickham43.net/images/green16x16.jpg" alt="Green Square"/> <a href="http://www.wickham43.net/contents.php">Contents</a></td>
<td><img src="http://www.wickham43.net/images/green16x16.jpg" alt="Green Square"/> <a href="http://www.wickham43.net/lists.php">Lists</a></td>
</tr>
</table>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Additional headers as http://php.net/manual/en/function.mail.php
$headers .= 'From: Your Name <mail@your-domain.com>' . "\r\n";
//ACTIVE mail below to $admin (you) and $email (the other person)
mail( $admin, "Feedback: $subject", "$name $email", "From: $admin>" );
$send_contact=mail("$name <$email>", "Feedback: $subject", $message, $headers );
if($send_contact){
echo "Thanks," . $name. ", I have sent you an email with the information.";
}
else {
echo "ERROR";
}
?>