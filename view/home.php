<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors | Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" href ="/phpmotors/css/normalize.css">
    <link rel="stylesheet" href="/phpmotors/css/main.css">
</head>
<body>
<div class="page">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
            
        </header>
        <nav>
            <?php //require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; 
            echo $navList;
            ?>
        </nav>

        <main>
            <h1>Welcome to PHP Motors!</h1>
            <section class="delorean-hero">
                <img src = "/phpmotors/images/vehicles/delorean.jpg" alt = "Delorean">
                <div class="delorean-highlights">
                    <h2>DMC Delorean</h2>
                    <p>
                        3 Cup holders<br>
                        Superman doors<br>
                        Fuzzy dice!<br>
                    </p>
                </div>
                <a href="#" class="button">Own Today</a>
                
            </section>

            <section class="delorian-content">
                <div class="reviews">
                    <h2>DMC Delorean Reviews</h2>
                    <ul>
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (4/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </ul>
                </div>
                <div>
                    <h2>Delorean Upgrades</h2>
                    <div class="upgrades">
                        <div class="upgrade-item">
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                            <a href="#">Flux Capacitor</a>
                        </div>
                        <div class="upgrade-item">
                            <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flame Decals">
                            <a href="#">Flame Decals</a>
                        </div>
                        <div class="upgrade-item">
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker">
                            <a href="#">Bumper Sticker</a>
                        </div>
                        <div class="upgrade-item">
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
                            <a href="#">Hub Caps</a>
                        </div>
                    </div>
                </div>
            </section>       
        </main>

        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>