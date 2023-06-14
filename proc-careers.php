<?php


$name = $_POST['name']; 
$sender = $_POST['sender'];
// $subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];


if(!$name || !$sender || !$phone || !$message)
{
    $error = 'formerror';
    include('error-c.php');
    exit;
}

if (!filter_var($sender, FILTER_VALIDATE_EMAIL))
{
    $error = 'emailerror';
    include('error-c.php');
    exit;
}


else {
    $to = 'muyiwa@aledoy.com';
    $mailsubject = 'Message from Masterpiece career form';
    $from = "From: noreply@masterpieceenergies.com";
    
    $content = 'Below are the details that were filled'."\n"
                .'Name: '.$name."\n"
                // .'Subject: '.$subject."\n"
                .'Email: '.$sender."\n"
                .'Phone: '.$phone."\n"
                .'Cover letter: '.$message."\n";
    
    mail($to, $mailsubject, $content, $from);
    include('thank-you-c.php');
    }
    
    
?>