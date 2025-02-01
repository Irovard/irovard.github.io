<?php
// IP-Adresse des Besuchers holen
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// E-Mail-Empfänger (hier musst du die E-Mail-Adresse anpassen)
$to = "deine-email@example.com";

// Betreff der E-Mail
$subject = "Neue IP-Adresse besucht die Seite";

// Nachricht der E-Mail
$message = "Die IP-Adresse des Besuchers lautet: " . $visitor_ip;

// Kopfzeilen für die E-Mail
$headers = "From: noreply@deinedomain.com" . "\r\n" .
           "Reply-To: noreply@deinedomain.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// E-Mail senden
mail($to, $subject, $message, $headers);

// Bestätigung auf der Website anzeigen
echo "<h1>Deine IP-Adresse wurde erfolgreich erfasst und versendet!</h1>";
?>
