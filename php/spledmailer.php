<?php 
if(isset($_POST['submit'])){
    $to = "mrapagao@egmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $phone = $_post ['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " " . $phone ."\n\n" . $_POST['message'] . "\n\n" . $_POST['message2'];
    $message2 = "Obrigado pelo seu contacto " ."\n\n" . $first_name . " " . $last_name . " " . $phone . "\n\n" . $_POST['message'] . "\n\n" . $_POST['message2'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Email enviado. Obrigado" . $first_name . "\n\n" ."Iremos contacta-lo em breve.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!--
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

-->