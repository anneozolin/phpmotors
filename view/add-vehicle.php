<?php 
if (!$_SESSION['loggedin'] || $_SESSION['clientData']['clientLevel'] <= 1){
    header('Location: /phpmotors/index.php/');
}

// Build a car classification drop down list.
$carClassifications = "<select name = 'carClassifications'>";
foreach($classifications as $classification) {
    $tag = '<option value=""';
    
    if(isset($classType)){
        if ($classification['classificationId'] === $classType){
            $tag .= ' selected ';
        }
    }

    $tag .= '>'.$classification['classificationName'].'</option>';
    $tag = substr_replace($tag, $classification['classificationId'], 15, 0);
    $carClassifications .= $tag;
}
$carClassifications .= '</select>';


?><!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
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
            <h1>Add Vehicle</h1>
            <p>*Note all Fields are Required</p>
            <?php
                if (isset($message)) {
                echo $message;
                }
            ?>
            <fieldset>
                <form action="/phpmotors/vehicles/index.php" method="POST">
                    <label class="label-top">Classification <?php echo $carClassifications; ?> </label>
                    <label class="label-top">Make<input name="invMake" id="invMake" type="text" <?php if(isset($invMake)){echo "value='$invMake'";}  ?> required></label>
                    <label class="label-top">Model<input name="invModel" id="invModel" type="text" <?php if(isset($invModel)){echo "value='$invModel'";}  ?> required></label>
                    <label class="label-top">Description<input name="invDescription" id="invDescription" type="text" <?php if(isset($invDescription)){echo "value='$invDescription'";}  ?> required></label>
                    <label class="label-top">Image Path<input name="invImage" id="invImage" type="text" <?php if(isset($invImage)){echo "value='$invImage'";}  ?> required></label>
                    <label class="label-top">Thumbnail Path<input name="invThumbnail" id="invThumbnail" type="text" <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  ?> required></label>
                    <label class="label-top">Price<input name="invPrice" id="invPrice" type="text" <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?> required></label>
                    <label class="label-top">Stock<input name="invStock" id="invStock" type="text" <?php if(isset($invStock)){echo "value='$invStock'";}  ?> required></label>
                    <label class="label-top">Color<input name="invColor" id="invColor" type="text" <?php if(isset($invColor)){echo "value='$invColor'";}  ?> required></label>

                    <input class="submit-button" type="submit" name="submit" id="regbtn" value="Add Vehicle">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="addVehicle">
                </form>
            </fieldset>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>