<?php
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];

      $email_from = "DAN CV";
      $email_subject = "Message";
      $email_body = "Name: $name\n".
                    "Email: $email\n".
                    "Subject: $subject\n".
                    "Message: $message\n";

                    $to="pelumidd@gmail.com";
                    $headers = "From: $email_from \r\n";
                    $headers = "Reply-To: $email \r\n";
                    mail($to,$email_subject,$email_body,$headers);
                    header("Location: index.html");  
?>

<!--?php
   if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];

      $to='pelumidd@gmail.com';
      $subject='Website RSVP Form';
      $message="Name: ".$name."\n"."Phone: ".$phone/*."\n".*/;
      $headers="From: ".$email;

      if(mail($to, $subject, $message, $headers)){
         echo "<h1>Sent Successfully! Thank you"." ".$name.", We hope to see you there!</h1>";
      }
      else{
         echo "Something went wrong, try again!";
      }
   }
?> -->
