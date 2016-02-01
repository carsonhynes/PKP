<!DOCTYPE html>
<html lang="en">
<head>
    <title>Historical Brothers</title>

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
        <!-- TODO:Mimic layout of actives. Just change people -->
        <div class="row top-buffer">
            <div class="col-md-3">
                <h1 class="text-center">Historical Brothers</h1>
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
