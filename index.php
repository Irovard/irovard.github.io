<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Was ist meine IP?</title>
</head>
<body>
    <h1>Deine IP-Adresse:</h1>
    <p>
        <?php
        // Gibt die IP-Adresse des Besuchers aus
        echo $_SERVER['REMOTE_ADDR'];
        ?>
    </p>
</body>
</html>
