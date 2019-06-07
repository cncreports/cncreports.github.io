<?php
if(isset($_POST['email'])) {
    $email_to = "nsx1luke@gmail.com";
    $email_subject = "Sineup form has been done for CNC";
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Sineup for CNC Form details below.\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
 $email_message .= "cncsineups@phpforms.com: ".clean_string($email_from2)."\n";
// create email headers
$headers = 'From: "\r\n".
'Reply-To: '.$email_from2."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">Thanks for sineing up you will get an email soon.</div>
  <?php
}
?>