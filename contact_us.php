<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: $email\r\nReply-to: info@flmnland.com";

mail("test@flmnland.com", "FL LAND: Message from ".$name, $message, $headers);