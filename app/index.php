<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__.'../../');
$dotenv->load();

require 'includes/dbc.php';
require 'includes/statement.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link href="css/main.min.css" rel="stylesheet">
	</head>
	<body>

		<script src="js/main.min.js"></script>
	</body>
</html>