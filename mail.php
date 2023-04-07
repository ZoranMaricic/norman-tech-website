<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailHeader = "From:" .$fullName. "<" .$email. ">\r\n";
$recipient = "lalamarko2@gmail.com";

mail($recipient, "Norman tech contact form", $message, $mailHeader) or die("Error!");

echo '

<!doctype html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><title>Norman tech</title><link rel="stylesheet" href="assets/css/app.ad5ed242.css"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700" rel="stylesheet"><link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.45d31f4e.png"><link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.65fe503e.png"><link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.47aa32ec.png"><link rel="mask-icon" href="assets/images/safari-pinned-tab.178c2830.svg" color="#5bbad5"><meta name="msapplication-TileColor" content="#da532c"><meta name="theme-color" content="#ffffff"><meta itemprop="name" content="Norman tech"><meta itemprop="image" content="assets/images/cover.d7bbd696.png"><meta property="og:title" content="Norman tech - Tech stack"><meta property="og:site_name" content="Norman Tech"><meta property="og:url" content="normantech.dev"><meta property="og:type" content="business.business"><meta property="og:image" content="assets/images/cover.d7bbd696.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"></head><body> <div class="ty-page"> <div class="container"> <img src="assets/images/logo.ed86f44a.svg" alt="Norman Tech logo"> <h1>Thank you!</h1> <p>for contacting us, we will reply promptly</p> <p>once your message is received. </p> <a href="index.html">Back to home</a> </div> </div> </body></html>

';
?>
