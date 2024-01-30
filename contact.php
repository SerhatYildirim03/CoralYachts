<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Coral Jachts</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<?php include_once 'include/header.php'; ?>
<section class="hero">
    <h1>Contact</h1>
    <p>Voor vragen en opmerkingen kunt u onderstaande formulier invullen.</p>
</section>
<section>
    <form action="https://formspree.io/f/mqkvrjle" method="POST" class="contact-form">
        <fieldset>
            <legend>Jachtinformatie</legend>
            <div>
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" class="form-control" required>
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div>
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" class="form-control"
                       pattern="[0-9]+" title="Alleen numerieke waarden toegestaan" required>
            </div>
            <div>
                <label for="bericht">Bericht:</label>
                <textarea id="bericht" name="bericht" class="form-control"
                          rows="5" cols="40" required></textarea>
            </div>
        </fieldset>
        <div>
            <button type="submit">Verzenden</button>
        </div>
    </form>
</section>
<?php include_once 'include/footer-contact.php'; ?>
</body>
</html>