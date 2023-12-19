<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren | Coral Jachts</title>
    <link rel="stylesheet" href="styles/register.css">
</head>

<body>

<?php
    require_once "connect.php";
?>

<header>
    <nav>
        <div id="logo">
            <img src="images/jachtlogo.jpg" alt="Coral Yachts Logo" width="150">
        </div>
        <ul class="navbar">
            <li><a href="index.html" class="nav-link">Home</a></li>
            <li><a href="jachten.html" class="nav-link">Jachten</a></li>
            <li><a href="reserveren.html" class="nav-link">Reserveren</a></li>
            <li><a href="contact.html" class="nav-link">Contact</a></li>
            <li><a href="login.php" class="nav-link">
                    <img src="images/login-icon.png" alt="Inloggen" class="login-icon">
                </a>
            </li>
        </ul>
    </nav>
</header>

<main>
    <section class="register-section">
        <h2>Registreren</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registerForm">
            <label for="firstname">Voornaam:</label>
            <input type="text" id="firstname" name="firstname"
                   class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $firstname; ?>">
            <span class="invalid-feedback"><?php echo $firstname_err; ?></span>

            <label for="lastname">Achternaam:</label>
            <input type="text" id="lastname" name="lastname"
                   class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $lastname; ?>">
            <span class="invalid-feedback"><?php echo $lastname_err; ?></span>

            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username"
                   class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>

            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email"
                   class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $email; ?>">
            <span class="invalid-feedback"><?php echo $email_err; ?></span>

            <label for="address">Adres:</label>
            <input type="text" id="address" name="address"
                   class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $address; ?>">
            <span class="invalid-feedback"><?php echo $address_err; ?></span>

            <label for="number">Telefoonnummer:</label>
            <input type="tel" id="number" name="number"
                   class="form-control <?php echo (!empty($number_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $number; ?>">
            <span class="invalid-feedback"><?php echo $number_err; ?></span>

            <label for="birthdate">Geboortedatum:</label>
            <input type="date" id="birthdate" name="birthdate"
                   class="form-control <?php echo (!empty($birthdate_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $birthdate; ?>">
            <span class="invalid-feedback"><?php echo $birthdate_err; ?></span>

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password"
                   class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>

            <label for="confirm-password">Bevestig Wachtwoord:</label>
            <input type="password" id="confirm-password" name="confirm-password"
                   class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </form>
    </section>
</main>

<footer>
    <!-- Footer content -->
</footer>

<script>
    // Stel de maximale geboortedatum in op de huidige datum
    document.getElementById('birthdate').max = new Date().toISOString().split('T')[0];

    document.getElementById("registerForm").addEventListener("submit", function(event){
        event.preventDefault();

        // Voeg hier code toe om het formulier te verwerken
    });
</script>

</body>
</html>
