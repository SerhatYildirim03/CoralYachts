<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ontvanger_email = "je-eigen-email@example.com";
  $onderwerp = "Bedankt voor je bericht";
  $naam = $_POST['naam'];
  $afzender_email = $_POST['email'];
  $telefoonnummer = $_POST['telefoonnummer'];
  $bericht = $_POST['bericht'];
  
  $inhoud = "Beste $naam,\n\nBedankt voor je bericht!\n\nHier is een samenvatting van je gegevens:\nNaam: $naam\nE-mail: $afzender_email\nTelefoonnummer: $telefoonnummer\nBericht: $bericht";

  $headers = "From: $ontvanger_email\r\nReply-To: $afzender_email";

  if(mail($ontvanger_email, $onderwerp, $inhoud, $headers)) {
    echo "Bedankt! Je bericht is verzonden.";
  } else {
    echo "Er is een probleem opgetreden bij het verzenden van het bericht. Probeer het later opnieuw.";
  }
}
