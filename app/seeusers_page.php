<?php
session_start();
/**
 * class auto loader:
 */
require $_SERVER["DOCUMENT_ROOT"].'/includes/autoloader.inc.php';

/**
 * config:
 */
require $_SERVER["DOCUMENT_ROOT"].'/includes/config.inc.php';
    
/**
 * check if user is logged in
 */
userLoginStatus('Bitte loggen Sie zuerst ein.');

$usersobject = new SeeUsers;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="omid soleimani" />
    <link href="../style/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/css/seeusers_page.css" />
    <link rel="stylesheet" href="../style/css/fonts.css" />
    <script defer src="../style/fontawesome/js/all.js"></script>
    <title>Alle Benutzer</title>
</head>
<body>
    <header>    
        <span id="pill-icon"><i class="fas fa-capsules"></i></span>
        <span id="back-icon"><a href="home_page.php"><i class="fas fa-arrow-circle-left"></i></a></span>
    </header>
    <main>
        <section class="flex container">
            <table class="main-table">
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-Mail</th>
                    <th>Benutzername</th>
                    <th>Rolle</th>
                </tr>
                <?php $usersobject->readusers(); ?>
            </table>
        </section>  
    </main>
</body>
</html>