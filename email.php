<?php
$name = $_POST['name'];
$recipient = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['message'];

$scriptUrl = "https://script.google.com/macros/s/AKfycbwA0lZlOp-KSgcEa2niFqNQvfqV6bRmYNnxapulHu6-wXkcWC8BQMpAJlWfu-dRI41XbA/exec";

$data = array(
   "recipient" => $recipient,
   "subject" => $subject,
   "body" => $body,
   "isHTML" => 'true'
);

$ch = curl_init($scriptUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
echo $result;