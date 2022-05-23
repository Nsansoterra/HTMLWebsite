<!DOCTYPE html>
<html>
    <body>

    <form class="my-form" action="process.php" method="POST">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input type="text" name="email">
            </div>
            <div class="form-group">
                <label>Message: </label>
                <textarea name="message"></textarea>
            </div>
            <input class="button" type="submit" value="Send Form" name="">
</form>


<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

	$email_from = 'sansoterran@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

  $to = "sansoterran@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>




</body>
</html>
