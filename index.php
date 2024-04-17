<?php
	// Include the session script
	require 'includes/session.php';


	/*
	   TO-DO: Write SQL query to retrieve ALL info on the zodiac signs
	 		  Execute the SQL query using the pdo function and fetch the result
	 */
	function get_zodiac(PDO $pdo, int $id) {

		// SQL query to retrieve toy information based on the toy ID
		$sql = "SELECT * 
			FROM zodiac
			WHERE ID= :id;";	// :id is a placeholder for value provided later 
		                               // It's a parameterized query that helps prevent SQL injection attacks and ensures safer interaction with the database.


		// Execute the SQL query using the pdo function and fetch the result
		$zodiac = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the toy information (associative array)
		return $zodiac;
	}
	$zodiac1 = get_zodiac($pdo, 1);

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

	<body onload="loaderAnimation()">

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

		<div class="wrapper">
			<div class="oval"></div>
		</div>

		<div id="content" class="animate-bottom">
			<h1>Choose Your Zodiac Sign</h1>
			<hr />
			<br />

			<!-- 
				TO DO: Fill in the cards for ALL zodiac signs from the database
  			-->

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac['ID'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac['imgSrc'] ?>" alt="<?= $zodiac['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= '' ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= '' ?>" alt="<?= '' ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= '' ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= '' ?></p>
				</div>
				
			</div>

		</div>

	</body>
</html>