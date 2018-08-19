<?php

$name = $_POST[0];
$email = $_POST[1];
$message = $_POST[2];
$from = "info@flmnland.com"
$headers = "From: $from\r\nReply-to: $from";

mail($email, "FL LAND: Message from ".$name, $message, $headers);

header("Location: http://flmnland.com/");
die();