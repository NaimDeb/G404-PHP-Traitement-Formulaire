


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="info-container">
        <h1>Informations du Client</h1>
        <div class="info">
            <p>🖥️ <strong>User Agent :</strong> <?= $_SERVER["HTTP_USER_AGENT"] ?> </p>
            <p>🌐 <strong>Adresse IP :</strong> <?= $_SERVER["REMOTE_ADDR"] . ":" . $_SERVER["REMOTE_PORT"]?></p>
            <p>📡 <strong>Nom du Serveur :</strong> <?= $_SERVER["SERVER_NAME"] ?></p>
        </div>
    </div>
</body>
</html>
