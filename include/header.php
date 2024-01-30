<?php $page = $_SERVER['SCRIPT_NAME']; ?>
<?php
// Start the session
session_start();

// Check if the user is already logged in
$loggedin = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true;
?>

<header>
    <nav>
        <div id="logo">
            <img src="images/logo-coral-yachts.jpg" alt="Coral Yachts Logo" width="150"><!-- Consider adding a logo image -->
        </div>
        <ul class="navbar">
            <li><a href="index.php" class="nav-link<?php echo $page === '/index.php' ? ' active' : ''; ?>">Home</a></li>
            <li><a href="jachten.php" class="nav-link<?php echo $page === '/jachten.php' ? ' active' : ''; ?>">Jachten</a></li>
            <li><a href="reserveren.php" class="nav-link<?php echo $page === '/reserveren.php' ? ' active' : ''; ?>">Reserveren</a></li>
            <li><a href="contact.php" class="nav-link<?php echo $page === '/contact.php' ? ' active' : ''; ?>">Contact</a></li>
            <?php
                if (!$loggedin) {
                    echo '<li><a href="login.php" class="nav-link">
                            <img src="images/icon-login.png" alt="Inloggen" class="login-icon">
                          </a>
                    </li>';
                } else {
                    echo '<li><a href="logout.php" class="nav-link2">
                            <img src="images/icons8-logout-64.png" alt="Log out" class="logout-icon">
                          </a>
                    </li>';
                }
                ?>
            
        </ul>
    </nav>
</header>

