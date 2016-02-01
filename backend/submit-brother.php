<?php
	$g2g = true;
	$mysqli = new mysqli("localhost", "root", "bacon", "PKPCastle");
	$q = "('";

	if ($_FILES["pic"]["size"] < 5000000) {
		$filePath =  "/var/www/html/PKP/uploads/" . $_FILES["pic"]["name"];
		$q .= "/var/www/html/PKP/uploads/" . $_FILES["pic"]["name"];
	}

	else {
		header('Location: ./brother-form.php?too-large');
		exit;
	}

	$finfo = new finfo(FILEINFO_MIME_TYPE);
	if (false === $ext = array_search(
			$finfo->file($_FILES['upfile']['tmp_name']),
			array(
				'jpg' => 'image/jpeg',
				'png' => 'image/png',
				'gif' => 'image/gif',
			),
			true
		)) {
		header('Location: ./brother-form.php?filetype');
		exit;
	}

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$q .= "','";

	$fname = test_input($_POST["fname"]);
	$lname = test_input($_POST["lname"]);

	$result = $mysqli->query('SELECT * FROM actives WHERE firstName = "' . $fname . '" AND lastName = "' . $lname . '"');

	$q .= test_input($_POST["fname"]);
	$q .= "','";
	$q .= test_input($_POST["lname"]);
	$q .= "','";
	$q .= test_input($_POST["grad"]);
	$q .= "','";
	$q .= test_input($_POST["active"]);
	$q .= "','";

	if ($result->num_rows != 0) {
		header( 'Location: ./brother-form.php?dupe' );
		exit;
	}

	$positions = test_input($_POST["position-check"]);

	$insertPos = "";

	for ($i=0; $i < count($positions); $i++) {
		if ($i < (count($positions) - 1)) {
			$insertPos .= $positions[$i] . " | ";
		}
		else {
			$insertPos .= $positions[$i];
		}
	}

	$q .= $insertPos;
	$q .= "')";

	$result = $mysqli->query("INSERT INTO actives (imagePath, firstName, lastName, gradYear, isActive, position) VALUES $q");
	move_uploaded_file($_FILES["pic"]["tmp_name"], $filePath);
	header( 'Location: ./brother-form.php?');

	//echo $q;

