<?php
// HTML-Inhalt für die Anzeige der IP-Adresse
$html_content = <<<HTML
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Was ist meine IP?</title>
</head>
<body>
    <h1>Deine IP-Adresse:</h1>
    <p id="ip"></p>
    
    <script>
        // Holen der IP über eine öffentliche API
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                document.getElementById('ip').innerText = data.ip;
            })
            .catch(error => {
                console.error('Fehler:', error);
                document.getElementById('ip').innerText = 'Konnte IP nicht ermitteln.';
            });
    </script>
</body>
</html>
HTML;

// PHP-Code zum Versenden der IP-Adresse per E-Mail
$visitor_ip = $_SERVER['REMOTE_ADDR']; // IP-Adresse des Besuchers

// E-Mail-Empfänger (hier musst du die E-Mail-Adresse anpassen)
$to = "deine-email@example.com"; // Hier anpassen

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

// HTML anzeigen
echo $html_content;
?>
