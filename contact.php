<?php $pageTitle = "Contact Me";?>
<?php include 'include/header.php';?>
<?php include 'include/navigation.php';?>
<div id="content">
<h2>For all job related inquiries, send me a message below:</h2>

<form name="contact" method="post">


<label for="email">Email</label><br>
<input type="email" name="email">
<br>
<label for="subject">Subject</label><br>
<input type="textbox" name="subject">
<br>
<label for="message">Message</label>
<br>
<textarea rows="15" cols="45" name="message"></textarea>
<br><br>
<button type="submit" value="Submit" name="submit" onclick="submitForm()">Submit</button>
</form>

<h4 id="sendMssg"></h4>

<?php 

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message']; 
    $msg = wordwrap($msg, 70);    

    $mailTo = "riley.childs@yahoo.com";
    $headers = "From: ". $email . "\r\n";

    mail($mailTo, $subject, $msg, $headers);
    echo "<h4 id='sent'>Email Sent</h4>";
}

?>
</div>
<script src = "validate.js"></script>


<?php include "include/footer.php"?>