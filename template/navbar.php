<?php

function loadNavbar() {

echo '<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Pi Kappa Phi - Castle</a>
            </div>
            <div class="collapse navbar-collapse" id="defaultNavbar1">
                <a href="https://www.facebook.com/pikappcastle"><img style="margin-top: 2px;" src="img/icons/48x48/fb.png" alt="Facebook"></a>
                <a href="https://www.twitter.com/pikappcastle"><img style="margin-top: 2px;" src="img/icons/48x48/twitter.png" alt="Twitter"></a>
                <a href="https://instagram.com/pkpcastle"><img style="margin-top: 2px;" src="img/icons/48x48/instagram.png" alt="Instagram"></a>
                <a href="map.html"><img style="margin-top: 2px;" src="img/icons/48x48/maps.png" alt="Map"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./news.php">News</a></li>
                    <li><a href="./actives.php">Brothers</a></li>
                    <li><a href="./philanthropy.php">Philanthropy</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="./about-brothers.php">About the Brothers</a></li>
                        <li class="divider"></li>
                        <li><a href="./about-house.php">About the House</a></li>
                    </ul>
                </ul>
          </div>
        </div>
    </nav>';
}