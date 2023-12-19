<?php

// Define variables and initialize with empty values
$username = $password = $confirm_password = $firstname = $lastname = $address = $email = $number = $birthdate = "";
$username_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = $address_err = $email_err = $number_err = $birthdate_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $connection;

    // Validate firstname
    if (empty(trim($_POST["firstname"]))) {
        $firstname_err = "Please enter your first name.";
    } else {
        $firstname = trim($_POST["firstname"]);
    }

    // Validate lastname
    if (empty(trim($_POST["lastname"]))) {
        $lastname_err = "Please enter your last name.";
    } else {
        $lastname = trim($_POST["lastname"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate address
    if (empty(trim($_POST["address"]))) {
        $address_err = "Please enter your address.";
    } else {
        $address = trim($_POST["address"]);
    }

    // Validate number
    if (empty(trim($_POST["number"]))) {
        $number_err = "Please enter your phone number.";
    } else {
        $number = trim($_POST["number"]);
    }

    // Validate birthdate
    if (empty(trim($_POST["birthdate"]))) {
        $birthdate_err = "Please enter your birthdate.";
    } else {
        $birthdate = trim($_POST["birthdate"]);
    }


    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm-password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm-password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                $username_err = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        } else {
            $username_err = "Oops! Something went wrong. Please try again later.";
        }
    }

    if(!empty($username_err)) : ?>
        <script>
            alert("<?php echo $username_err; ?>");
        </script>
    <?php endif;

    // Check input errors before inserting in database
    if (empty($password_err) && empty($confirm_password_err) && empty($firstname_err) && empty($lastname_err) && empty($address_err) && empty($email_err) && empty($number_err) && empty($birthdate_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (firstname, lastname, username, email, address, number, birthdate, password) 
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($connection, $sql)) {
            // Set parameters
            $param_username = $username;
            // Creates a password hash
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_address = $address;
            $param_email = $email;
            $param_number = $number;
            $param_birthdate = $birthdate;

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_firstname, $param_lastname, $param_username, $param_email, $param_address, $param_number, $param_birthdate, $param_password);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) : ?>
                <script>
                    alert("Opslaan gelukt! Je kunt inloggen.");
                    // Redirect to login page
                    window.location = 'login.php';
                </script>
            <?php else : ?>
                <script>
                    alert("Opslaan MISLUKT! Probeer het later nog eens ajb.");
                </script>
            <?php endif;

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($connection);
}
?>