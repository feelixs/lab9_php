<?php include 'includes/book.php'; ?>

<!DOCTYPE html>

<html>
	<head>
		<title>Lab 9: The Bookworm Store</title>
		<link rel="stylesheet" href="css/bookworm-style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<h1>THE BOOKWORM STORE</h1>
			<nav>
				<a href="index.php">HOME</a>
			</nav>
    	</header>

    	<section>
      		<div>
		        <h2>The BookWorm Store</h2>
		        <h4>I'm not a <span class="emphasized">bookworm</span>, I'm an <span class="emphasized">escape artist</span>.</h4>
  			</div>

  			<h4 class="decorated"><span><span class="emphasized">The Hunger Games</span></span></h4>

	  		<div id="content">
	  			<div class="row">

	  				<div class="column">
	  					<img src="images/hunger-games.jpeg" style="width:60%">
	  					<h5><?= $books[0]->title ?></h5>
	  					<h5>by <?= $books[0]->author ?></h5>
	  					<?= $books[0]->showRatingStars() ?>
	  					<h5><span class="emphasized"><?= $books[0]->checkInStock() ?></span>
						<h5>$<?= $books[0]->price ?></h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/catching-fire.jpeg" style="width:60%">
	  					<h5><?= $books[1]->title ?></h5>
	  					<h5>by <?= $books[1]->author ?></h5>
	  					<?= $books[1]->showRatingStars() ?>
	  					<h5><span class="emphasized"><?= $books[1]->checkInStock() ?></span>
						<h5>$<?= $books[1]->price ?></h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/mockingjay.jpeg" style="width:60%">
	  					<h5><?= $books[2]->title ?></h5>
	  					<h5>by <?= $books[2]->author ?></h5>
	  					<?= $books[2]->showRatingStars() ?>
	  					<h5><span class="emphasized"><?= $books[2]->checkInStock() ?></span>
						<h5>$<?= $books[2]->price ?></h5>
	  				</div>
				</div>
			</div>
    	</section>
	</body>
</html>