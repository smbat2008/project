<?php
$to = "rockybd1995@gmail.com"; // куда отправлять письма
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$number = $_POST['number'];
$cmessage = $_POST['message'];

$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$subject = "U heeft een bericht van uw Bitmap Photography."; // тема письма

$logo = 'img/logo.png';
$link = '#';

// HTML-тело письма
$body  = "<!DOCTYPE html><html lang='nl'><head><meta charset='UTF-8'><title>Contactformulier</title></head><body>";
$body .= "<table style='width: 100%; font-family: Arial, sans-serif; border-collapse: collapse;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt='Logo'></a><br><br>";
$body .= "</td></tr></thead><tbody>";
$body .= "<tr><td style='border:none;'><strong>Naam:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>E-mail:</strong> {$from}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Onderwerp:</strong> {$subject}</td>";
$body .= "<td style='border:none;'><strong>Telefoonnummer:</strong> {$number}</td></tr>";
$body .= "<tr><td colspan='2' style='border:none; padding-top:10px;'><strong>Bericht:</strong><br>{$cmessage}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

$send = mail($to, $subject, $body, $headers);

if($send){
    echo "Bericht succesvol verzonden!";
} else {
    echo "Er is een fout opgetreden. Probeer het later opnieuw.";
}
?>
