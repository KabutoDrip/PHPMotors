<!DOCTYPE html>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/heading.php'?>    
    
<body>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/navigation.php'?>
        <nav>
            <!-- <?php include $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/navigation.php';
            echo $navList; ?> -->
        </nav>
        <main>
            <div id="showcase">
                <canvas class="webgl"></canvas>
                <script type="module" src="/PHPMotors/view/index.js"></script>
            </div>  
            <div id="main">
                <div id="upgrades">
                    <div class="upgrade-box">
                        <img src="assets/capacitor.png" alt="flux capacitor icon">
                        <h2>Flux Capacitor</h2>
                    </div>
                    <div class="upgrade-box">
                        <img src="assets/flame.png" alt="flame icon">
                        <h2>Flame Decals</h2>
                    </div>
                    <div class="upgrade-box">
                        <img src="assets/sticker.png" alt="sticker icon">
                        <h2>Bumber Stickers</h2>
                    </div>
                    <div class="upgrade-box">
                        <img src="assets/cap.png" alt="hub cap icon">
                        <h2>Hub Caps</h2>
                    </div>
                </div> 
                <div id="reviews">
                    <h2>DMC Delorean Reviews</h2>
                    <ul>
                        <li>"So fst its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day."(4.5/5)</li>
                        <li>"80's livin and I love it! (5/5)</li>
                    </ul>
                </div>
            </div>
        </main>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMotors/snippets/footer.php'?>
        <script src="../js/lastmodified.js"> </script>
    </body>
</html>
