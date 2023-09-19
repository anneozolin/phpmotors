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
    <title><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
	 echo "Delete $invInfo[invMake] $invInfo[invModel]";} 
	    elseif(isset($invMake) && isset($invModel)) { 
		echo "Modify $invMake $invModel"; }?> | PHP Motors</title>
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
            <h1><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
                    echo "Delete $invInfo[invMake] $invInfo[invModel]";} 
                elseif(isset($invMake) && isset($invModel)) { 
                    echo "Delete $invMake $invModel"; }?></h1>
            <p>*Confirm Vehicle Deletion. The delete is permanent.</p>
            <?php
                if (isset($message)) {
                echo $message;
                }
            ?>
            <fieldset>
                <form action="/phpmotors/vehicles/index.php" method="POST">
                    <label class="label-top">Make<input name="invMake" id="invMake" type="text" <?php if(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?> readonly ></label>
                    <label class="label-top">Model<input name="invModel" id="invModel" type="text" <?php if(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?> readonly ></label>
                    <label class="label-top">Description<input name="invDescription" id="invDescription" type="text" <?php if(isset($invDescription)){echo "value='$invDescription'";} elseif(isset($invInfo['invDescription'])) {echo "value='$invInfo[invDescription]'"; } ?> readonly ></label>
                    
                    <input class="submit-button" type="submit" name="submit" id="regbtn" value="Delete Vehicle">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="deleteVehicle">
                    <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){ echo $invInfo['invId'];}  ?>">
                </form>
            </fieldset>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>