<?php 
/** 
 * Code To Send Out Email
 * 
 * PHP version 7.4
 * 
 * @category Element_Groups
 * @package  Components
 * @author   Riley Childs <riley.childs@yahoo.com>
 * @license  Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
 * @link     http://wh963069.ispot.cc/include/sendEmail.php
 */
?>

<?php 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message']; 
    $msg = wordwrap($msg, 70);    

    $mailTo = "riley.childs@yahoo.com";
    $headers = "From: ". $email . "\r\n";

    mail($mailTo, $subject, $msg, $headers);
    echo "<script>alert('Email has been sent');</script>";
}

?>