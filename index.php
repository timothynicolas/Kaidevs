<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaidevs</title>
    <link rel="stylesheet" href="css/main.css">

    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="assets/favicon.png" type="image/x-icon" />

    
</head>
<body>

    <?php include 'components/navbar.php'; ?>

    <?php include 'components/modal.php'; ?>

    <?php include 'components/mobile-navbar.php'; ?>

    <div class="container">
        <div class="grid-container">

            <?php include 'components/hero.php'; ?>

            <?php include 'components/about.php'; ?>
            
            <?php include 'components/services.php'; ?>
            <?php include 'components/cta.php'; ?>
            

            
           
            
            
            <?php include 'components/footer.php'; ?>

            </div>  <!-- idk para san to, but the code breaks when u remove it -->


        </div> <!-- grid-container -->
    </div> <!-- container -->

    <script type="module" src="script.js"></script>

</body>
</html>