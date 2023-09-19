<?php 
if (!$_SESSION['loggedin']){
    header('Location: /phpmotors/index.php/');
}
?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account Information</title>
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
            <?php echo $navList; ?>
        </nav>
        <main>
        <h1>Update Account Information</h1>
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
            <form action="/phpmotors/accounts/index.php" method="POST">
                <fieldset>
                    <legend>Update Personal Information</legend>
                    <label class="label-top">* First Name <input name="clientFirstname" id="clientFirstname" type="text" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} elseif(isset($_SESSION['clientData']['clientFirstname'])){echo "value='".$_SESSION['clientData']['clientFirstname']."'";} ?> required></label>
                    <label class="label-top">* Last Name<input name="clientLastname" id="clientLastname" type="text" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} elseif(isset($_SESSION['clientData']['clientLastname'])){echo "value='".$_SESSION['clientData']['clientLastname']."'";} ?> required></label>
                    <label class="label-top">* Email<input name="clientEmail" id="clientEmail" type="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} elseif(isset($_SESSION['clientData']['clientEmail'])){echo "value='".$_SESSION['clientData']['clientEmail']."'";} ?> required></label>

                    <input class="submit-button" type="submit" name="submit" id="regbtn" value="Update Information">
                    <input type="hidden" name="action" value="updatePersonal">
                    <input type="hidden" name="invId" <?php if(isset($_SESSION['clientData']['clientId'])){echo "value='".$_SESSION['clientData']['clientId']."'";} ?>>
                </fieldset>
            </form>

            <form action="/phpmotors/accounts/index.php" method="POST">
                <fieldset>
                    <legend>Update Password</legend>
                    <span id = "pass-label" class="pass-label">By entering a password it will change your current password. Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span><br>
                    <label class="label-top">* Password<input name="clientPassword" id="clientPassword" type="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required></label>
                
                    <input class="submit-button" type="submit" name="submit" id="newPassword" value="Update Password">
                    <input type="hidden" name="action" value="updatePassword">
                    <input type="hidden" name="invId" <?php if(isset($_SESSION['clientData']['clientId'])){echo "value='".$_SESSION['clientData']['clientId']."'";} ?>>
                </fieldset>
            </form>

        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>