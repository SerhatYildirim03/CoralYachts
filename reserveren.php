<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering | Coral Yachts</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/reserveren.css">
</head>

<body>

<?php include_once 'include/header.php'; ?>

<section class="hero">
<?php
if ($_SESSION["loggedin"] ?? false) : ?>
    <h2>Je bent nu ingelogd als gebruiker <?php echo $_SESSION["username"]; ?></h2>
<?php else : ?>
    <script>
        alert("Je bent ingelogd. Eerst inloggen!");
        window.location = "login.php";
    </script>
<?php endif; ?>
    <h1>Reserveren</h1>
    <p>Deze module bevat alle reserveringen en die kunnen van hieruit worden beheerd.</p>
</section>
<section>
    <form>
        <fieldset>
            <legend>Jachtinformatie</legend>
            <div>
                <label for="yacht-type">Type jacht:</label>
                <select id="yacht-type" name="yacht-type" class="form-control">
                    <option value="motor">Motorjachten</option>
                    <option value="zeil">Zeiljachten</option>
                    <option value="motor">Superyachten</option>
                    <option value="motor">Luxe jachten</option>
                    <option value="motor">Speedboten</option>
                </select>
            </div>
            <div>
                <label for="harbor">Haven:</label>
                <select name="harbor" id="harbor" class="form-control">
                    <option value="Amsterdam Marina">Amsterdam Marina</option>
                    <option value="Rotterdam Haven">Rotterdam Haven</option>
                    <option value="Antwerpen Haven">Antwerpen Haven</option>
                    <option value="IJmuiden Haven">IJmuiden Haven</option>
                    <option value="Scheveningen Haven">Scheveningen Haven</option>
                </select>
            </div>
            <div>
                <label for="departure_date">Datum vertrek:</label>
                <input type="date" id="departure_date" name="departure_date" class="form-control" required>
            </div>
            <div>
                <label for="return_date">Datum retour:</label>
                <input type="date" name="return_date" class="form-control" required>
            </div>
            <div>
                <label>Extra mogelijkheden:</label>
                <ul class="opties">
                    <li>
                        <ul>
                            <li><input type="checkbox" name="extras[]" value="Catering">Catering</li>
                            <li><input type="checkbox" name="extras[]" value="Schipper">Schipper</li>
                            <li><input type="checkbox" name="extras[]" value="Catering">Flottije</li>
                            <li><input type="checkbox" name="extras[]" value="Schipper">Gevulde koelkast</li>
                            <li><input type="checkbox" name="extras[]" value="Catering">Aanvullende vezekering</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><input type="checkbox" name="extras[]" value="Schipper">Kinderzwemvesten</li>
                            <li><input type="checkbox" name="extras[]" value="Catering">Stand up paddleboard</li>
                            <li><input type="checkbox" name="extras[]" value="Schipper">Transfer naar haven</li>
                            <li><input type="checkbox" name="extras[]" value="Schipper">Schoonmaak</li>
                        </ul>
                    </li>
            </div>
        </fieldset>

        <fieldset>
            <legend>NAW gegevens</legend>
            <div>
                <label for="first_name">Voornaam:</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div>
                <label for="last_name">Achternaam:</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div>
                <label for="email_address">E-mailadres:</label>
                <input type="email" name="email_address" class="form-control" required>
            </div>
            <div>
                <label for="adres">Adres:</label>
                <input type="text" name="adres" class="form-control" required>
            </div>
            <div>
                <label for="postcode">Postcode:</label>
                <input type="text" name="postcode" class="form-control" required>
            </div>
            <div>
                <label for="stad">Stad:</label>
                <input type="text" name="stad" class="form-control" required>
            </div>
            <div>
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="tel" name="telefoonnummer" class="form-control" required>
            </div>
        </fieldset>


        <fieldset>
            <legend>Betalingsgegevens</legend>
            <div>
                <label for="payment_method">Betaalmethode:</label>
                <select name="payment_method" class="form-control">
                    <option value="bank">Ideal</option>
                    <option value="abn">ABN AMRO</option>
                    <option value="rabobank">Rabobank</option>
                    <option value="ing">ING Bank</option>
                    <option value="creditcard">Creditcard</option>
                    <option value="Paypal">Paypal</option>
                </select>
            </div>
        </fieldset>

        <div>
            <button type="submit">Reserveren</button>
        </div>
    </form>
</section>

<?php include_once 'include/footer.php'; ?>

</body>

</html>
