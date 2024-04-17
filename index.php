<?php
	// Include the session script
	require 'includes/session.php';


	/*
	   TO-DO: Write SQL query to retrieve ALL info on the zodiac signs
	 		  Execute the SQL query using the pdo function and fetch the result
	 */
	$sql = "SELECT *
		FROM zodiac";

	$zodiac = pdo($pdo, $sql) -> fetchAll();
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
					<a href="horoscope.php?sign=<?= $zodiac[0]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[0]['imgSrc'] ?>" alt="<?= $zodiac[0]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[0]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[0]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[1]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[1]['imgSrc'] ?>" alt="<?= $zodiac[1]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[1]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[1]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[2]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[2]['imgSrc'] ?>" alt="<?= $zodiac[2]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[2]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[2]['birthday'] ?></p>
				</div>

			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[3]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[3]['imgSrc'] ?>" alt="<?= $zodiac[3]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[3]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[3]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[4]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[4]['imgSrc'] ?>" alt="<?= $zodiac[4]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[4]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[4]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[5]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[5]['imgSrc'] ?>" alt="<?= $zodiac[5]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[5]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[5]['birthday'] ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[6]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[6]['imgSrc'] ?>" alt="<?= $zodiac[6]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[6]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[6]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[7]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[7]['imgSrc'] ?>" alt="<?= $zodiac[7]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[7]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[7]['birthday'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[8]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[8]['imgSrc'] ?>" alt="<?= $zodiac[8]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[8]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[8]['birthday'] ?></p>
				</div>
				
			</div>

			<div class="horoscopes-row">

				<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[9]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[9]['imgSrc'] ?>" alt="<?= $zodiac[9]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[9]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[9]['birthday'] ?></p>
				</div>

    			<div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[10]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[10]['imgSrc'] ?>" alt="<?= $zodiac[10]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[10]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[10]['name'] ?></p>
				</div>

			    <div class="horoscope">
					<!-- Create a hyperlink to horoscope.php page with sign as parameter -->
					<a href="horoscope.php?sign=<?= $zodiac[11]['name'] ?>">
						<!-- Display image of zodiac with its name as alt text -->
						<img src="<?= $zodiac[11]['imgSrc'] ?>" alt="<?= $zodiac[11]['name'] ?>">
					</a>
					<!-- Display name of zodiac sign -->
					<h3><?= $zodiac[11]['name'] ?></h3>
					<!-- Display birthday range of zodiac sign -->
					<p><?= $zodiac[11]['birthday'] ?></p>
				</div>
				
			</div>

		</div>

	</body>
</html>