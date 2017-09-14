<?php 
require '../vendor/autoload.php';
// The Swift_Message class is now automatically available
$transport = Swift_SmtpTransport::newInstance('smtp.example.com', 25);
$mailer = Swift_Mailer::newInstance($transport);


$message = Swift_Message::newInstance();
$message->setFrom('julia@example.com');
$message->setTo(array('james@example.com' => 'James Beard'));
$message->setSubject('Delicious New Recipe');
$message->setBody(<<<_TEXT_
Dear James,
You should try this: puree 1 pound of chicken with two pounds
of asparagus in the blender, then drop small balls of the mixture
into a deep fryer. Yummy!
Love,
Julia
_TEXT_
);
$mailer->send($message);
?>