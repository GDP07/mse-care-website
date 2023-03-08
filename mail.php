<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'info@msecare.org'; // Replace with your email address
    $subject = "$subject - From: $email";
    $body = $message;

    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $body, $headers)){
        echo 'Email sent successfully';
    } else{
        echo 'Error sending email';
    }
}
?>
