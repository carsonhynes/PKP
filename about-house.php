<!DOCTYPE html>
<html lang="en">
<head>
    <title>About the House</title>
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
        <div class="row top-buffer">
            <div class="col-md-3">
                <h1 class="text-center">About the House</h1>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid">
        <!-- TODO:Add virtual tour of the House-->
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
            <p>The house was built in the late 19th century, with construction finishing in 1896, at a cost of about
                500,000 dollars. It was owned by John W. Paine, a wealthy local businessman. At the time it was
                built, the house was heralded as the most extravagant residence in Troy.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-2"></div>
            <h2>Where To Find Us</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="map"></div>
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
