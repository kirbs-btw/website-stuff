<?php

$email = $_POST['eMail'];
$name = $_POST['name'];
$content = $_POST['content'];

$to = "some.mail@example.com";
$subject = "Feedback from: ". $name;
$txt ="Feedback: " . $content .  "\n Name: ". $name . "\n e-mail: " . $email;
$headers = "From: noreply@kw-corp.de";

mail($to,$subject,$txt,$headers);

header("Location:main.html")

?>
