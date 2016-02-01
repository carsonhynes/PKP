<!DOCTYPE html>
<html lang="en">
<head>
    <title>News</title>

    <?php
    include "./template/head.php";
    include "./template/footer.php";
    include "./template/navbar.php";
    loadHead();
    ?>
</head>
<body>
    <?php loadNavbar(); ?>
    <div class="container-fluid">
        <!-- TODO:Add Drupal for content submission-->
        <!-- TODO:Maybe add Facebook ticker-->
        <!-- TODO:Make sure news content loads on scroll with AJAX-->
        <div class="row top-buffer">
            <div class="col-md-3">
                <h1 class="text-center">News</h1>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h3>Welcome to the Alpha Tau Chapter of Pi Kappa Phi</h3>
            </div>
        </div>
        <hr>
    </div>
    <?php loadFooter(); ?>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap-3.3.5.min.js"></script>
    <script src="leaflet/leaflet.js"></script>
    <script src="js/leafletMap.js"></script>
</body>
</html>
