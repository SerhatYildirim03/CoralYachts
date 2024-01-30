<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen - Coral Yachts</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>

<header>
    <nav>
        <div id="logo">
            <img src="images/jachtlogo.jpg" alt="Coral Yachts Logo" width="150"><!-- Consider adding a logo image -->
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="jachten.html">Jachten</a></li>
            <li><a href="reserveren.html">Reserveren</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</header>

<?php require_once "database/connect.php"; ?>

<main id="login-page">
    <h2>Inloggen</h2>
    <form action="/path_to_backend_script" method="post">
        <div class="input-group">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password" required>
        </div>


        <div class="input-group">

        </div>

        <div class="button-group">
            <button type="submit" class="yacht-button">Inloggen</button>
            <a href="register.php" class="register-button yacht-button">Registreren</a>
        </div>


    </form>
</main>

<footer>

    <p><a href="mailto:info@coralyachts.com"> send us mail for more information </a></p>
    <p><a href="tel:+1800229933">Call us free!</a></p><!-- Voeg je eigen telefoonnummer toe -->
    <div class="social-icons">
        <a href="https://www.instagram.com/jouwprofiel" target="_blank" title="Instagram">
            <img src="images/path_to_instagram_icon.png" alt="Instagram"/>
        </a>
        <a href="https://www.facebook.com/jouwprofiel" target="_blank" title="Facebook">
            <img src="images/path_to_facebook_icon.png" alt="Facebook"/>
        </a>
        <a href="https://twitter.com/jouwprofiel" target="_blank" title="Twitter">
            <img src="images/path_to_twitter_icon.png" alt="X"/>
        </a>

    </div>
</footer>

</body>
</html>
