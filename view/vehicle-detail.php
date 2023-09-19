<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$vehiclesDetail[invMake] $vehiclesDetail[invModel]"; ?> | PHP Motors, Inc.</title>
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
        <main class="vehicle-view">
            <h1><?php echo "$vehiclesDetail[invMake] $vehiclesDetail[invModel]"; ?></h1>
            <?php if(isset($message)){
                    echo $message; }
            ?>

            <?php if(isset($vehicleHTML)){
                    echo $vehicleHTML; } 
            ?>
            <?php 
                if(isset($thumbnailsList)){
                    echo $thumbnailsList;
                }
            ?>
            <div class="vehicle-reviews">
                <h3>Customer Review</h3>
                <?php 
                    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                        echo '<p>You can <a href = "/phpmotors/accounts/index.php?action=login">login</a> to create a review.</p>';
                    }
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                ?>
                <form action="/phpmotors/reviews/index.php" method="POST" <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {echo "hidden";}?>>
                    <label>Add your review<textarea id="review" name="newReview" rows="4" cols="50" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required></textarea></label>

                    <input class="submit-button" type="submit" name="submit" id="regbtn" value="Add Review">

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="addReview">

                    <input type="hidden" name="userId" <?php echo 'value="'.$_SESSION['clientData']['clientId'].'"' ?>>
                    <input type="hidden" name="carId" <?php echo 'value="'.$vehicleId.'"' ?>>
                </form>
                <?php 
                    // Put the reviews on the page.
                    if (isset($reviewHTML)){
                        echo $reviewHTML;
                    }
                ?>
            </div>
            
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>