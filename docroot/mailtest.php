<?php
$to = "plukalliance@gmail.com";
$subject = "Hi!";
$body = "Hi,\n\n Test script to check working of php mails";
if (mail($to, $subject, $body)) {
  echo("<p>Message successfully sent!</p>");
 } else {
  echo("<p>Message delivery failed...</p>");
 }
?>
