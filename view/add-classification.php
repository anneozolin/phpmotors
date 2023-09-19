<?php 
if (!$_SESSION['loggedin'] || $_SESSION['clientData']['clientLevel'] <= 1){
    header('Location: /phpmotors/index.php/');
}
?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car Classification</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href ="/phpmotors/css/normalize.css">
    <link rel="stylesheet" href="/phpmotors/css/main.css">
</head>
<body>
<div class = "page">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php //require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
            echo $navList;
            ?>
        </nav>
        <main>
            <h1>Add Car Classification</h1>
            <?php
                if (isset($message)) {
                echo $message;
                }
            ?>
            <form action="/phpmotors/vehicles/index.php" method="POST">
                <fieldset>
                    <label class="label-top">*Classification Name<input name="classificationName" id="classificationName" type="text" maxlength="30" required></label>
                    <p>Maximum 30 characters</p>
                    <input class="submit-button" type="submit" name="submit" id="regbtn" value="Add Classification" >

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="addClass">
                </fieldset>
            </form>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>