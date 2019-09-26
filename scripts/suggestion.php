<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $comments = $_POST['comments'];

  $email_from = "baheithold@crimson.ua.edu";
  $email_subject = "Suggestion for PhotoTK";
  $email_body = "Name: $name\n".
                "Email: $email\n".
                "Suggestions/Comments: $comments\n";
  $to = "baheithold@crimson.ua.edu";
  
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");


?>