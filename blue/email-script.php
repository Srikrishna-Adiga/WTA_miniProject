<?php
    $email=$_POST['email'];
    $subject = 'Test email';
    $message = 'Test email';

    mail($email, $subject, $message);
?>