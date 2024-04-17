<?php
	// Include the session script
	include 'includes/session.php';

	// Include script to generate a star rating
	require 'includes/starRating.php';

	// Redirect user if not logged in
	require_login($logged_in);


	// Retrieve the username from the session data
	$username = $_SESSION['username'];



	/*
     TO-DO: Write a query that retrieves ALL user and zodiac info from the database based on 
     		the username from the session data.
	 		Execute the SQL query using the pdo function and fetch the result
   */



	// Check if the horoscope details are not already set in the session
	if (!isset($_SESSION['horoscope'])) {

		// If not set, fetch a random horoscope from the database
		$sql = "SELECT * 
			FROM horoscope 
			ORDER BY RAND() LIMIT 1";

		// Execute the query and fetch the result
		$details = pdo($pdo, $sql)->fetch();

		// Store the fetched horoscope details in the session
		$_SESSION['horoscope'] = $details;
	}

	// Retrieve the stored horoscope details from the session
	$horoscope = $_SESSION['horoscope'];

?>

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Cosmic Horoscopes</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Press Start 2P">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  		<script src="js/loader.js"></script>
  		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  		<script src="js/horoscope.js"></script>
	</head>
	<body>

			<header>
				<div class="header-left">
					<div class="logo">
						<img src="imgs/logo.png" alt="URI Cosmic Horoscopes Logo">
	      			</div>

		      		<nav>
		      			<ul>
		      				<li><a href="index.php">Horoscopes</a></li>
				        </ul>
				    </nav>
			   	</div>

			    <div class="header-right">
			    	<ul>
			    		<li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
			    	</ul>
			    </div>
			</header>


			<!-- 
				TO DO: Fill in ALL the placeholders for this zodiac sign and horoscope from the database
			-->

			<div id="content" class="animate-bottom">
				<h1><?= '' ?>'s Personal Horoscope</h1>
				<hr />
				<br />

				<div id="horoscope-content">

			    <div class="horoscope-info">
			        <div class="horoscope-header">
			            <img src="<?= '' ?>" alt="<?= '' ?>">
			            <h2><?= '' ?></h2>
			            <p><?= '' ?>

			        <div class="horoscope-ratings">
			            <h3>Today's Ratings:</h3>
			            <ul>
			                <li>Mood: <?= '' ?></li>
			                <li>Success: <?= '' ?></li>
			                <li>Love: <?= '' ?></li>
			            </ul>
			        </div>
			    </div>

			    <hr />

			    <div class="horoscope-description">
			        <h3>Today's Horoscope:</h3>
			        <p><?= '' ?></p>
			    </div>
			</div>			

			</div>

		</body>
	</html>
