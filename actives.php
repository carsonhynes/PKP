<!DOCTYPE html>
<html lang="en">
<head>
    <title>Active Brothers</title>
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
            <div class="col-md-6">
                <h1>Active Brothers</h1>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Executive Board</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-offset-3 col-md-2">
                <div id="dugan" class="rounded-edges">
                    <div class="overlay rounded-edges">
	                    <div class="overlay-spacer"></div>
	                    Andrew Dugan<br>
	                    Class of 2016<br>
						Chemical Engineering
                    </div>
                </div>
                <h3>Archon</h3>
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Carson-Hynes.jpg">
                <h3>Vice-Archon</h3>
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Garret-Premo.jpg">
                <h3>Treasurer</h3>
            </div>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-2 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Lucas-Volle.jpg">
                <h3>Secretary</h3>
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Payton-Ide.jpg">
                <h3>Warden</h3>
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/David-Rowe.jpg">
                <h3>Historian</h3>
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Nicholas-Grippo.jpg">
                <h3>Chaplain</h3>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <h2>Seniors</h2>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-2 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Christian-Gonzalez.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/John-Conover.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/James-Adler.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/William-Hooper.jpg">
            </div>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-4 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Taylor-Jellerette.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Kosta-Andoni.jpg">
            </div>
        </div>
        <div class="row text-center">
            <h2>Juniors</h2>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-3 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Spencer-Norris.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/David-Kirman.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Jay-Shaker.jpg">
            </div>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-4 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Mason-Gentner.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Dakota-Pace.jpg">
            </div>
        </div>
        <div class="row text-center">
            <h2>Sophomores</h2>
        </div>
        <div class="row text-center half-top-buffer">
            <div class="col-md-offset-4 col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Vikram-Shah.jpg">
            </div>
            <div class="col-md-2">
                <img class="rounded-edges" src="img/2015-composites/Kamil-Szmyd.jpg">
            </div>
        </div>
        <!-- TODO:Add Brother Images with Colorbox Display-->
        <hr>
    </div>
    <?php loadFooter(); ?>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap-3.3.5.min.js"></script>
</body>
</html>
