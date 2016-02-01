<?php
unset($_COOKIE['date']);
$sendBack = substr($_SERVER['REQUEST_URI'],33);

if ($sendBack == "party") {
	header("Location: ../party/index.php");
}
