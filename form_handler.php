<!DOCTYPE html>


<style><?php include 'styles.css'; ?></style>

<html>
	<head>
		<meta charset="UTF-16">
		<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
			
		<link href="styles.css" rel="stylesheet" type="text/css">

		<title>Check Out These Buns!</title>
	</head>
	
	<body>
		<div class="wrapper">
			<header>
				<img class="logo" src="bun_icon.png" alt="A steamed bun with a smiley face.">
				<h1>Check Out<br>These Buns!</h1>
				<nav>
					<ul>
						<li><a href="index.htm">Home</a></li>
						<li><a href="history.htm">History</a></li>
						<li><a href="recipe.htm">Recipe</a></li>
						<li><a href="quiz.htm">Quiz</a></li>
					</ul>
				</nav>
			</header>
			<main>
				<h1 id="quiz_result_title">You are a: Nǎihuáng bāo!</h1>
				<img src="custardbao.jpg" id="quiz_result_img">
				<p id="quiz_result_p">Congratulations! You're a tasty custard bun! You may look plain and unassuming on the outside, but once people get to know you, you become a bright ray of sunshine in their life. You are extremly sweet and kind, and you bring joy to everybody around you. You always check to make sure your friends are doing well, and you always put others before yourself. When someone you love is happy, you feel like you just want to burst with happiness. You have a rich personality and your partners would all describe you as hot and sweet. </p>
			
				<h2>Let's see what you put!</h2>
					<p class="quiz_p"><div class="result_label">Name:</div>
						<?php echo $_POST["name"];?>
					</p>

					<p class="quiz_p"><div class="result_label">Do you love spicy food?</div>
						<?php echo $_POST["spicy"];?>
					</p>
					
					<p class="quiz_p"><div class="result_label">Choose some of your favorite fillings:</div>
						<br><?php echo $_POST["Pork"];?><br>
						<?php echo $_POST["Custard"];?><br>
						<?php echo $_POST["Beef"];?><br>
						<?php echo $_POST["Tofu"];?><br>
						<?php echo $_POST["Lotus Seed"];?><br>
						<?php echo $_POST["Black Sesame"];?><br>
						<?php echo $_POST["Broth"];?><br>
						<?php echo $_POST["Veggies"];?></p>
					
					<p class="quiz_p"><div class="result_label">If you could travel anywhere right now, where would you go?</div>
						<?php echo $_POST["travel"];?>
					</p>
					
					<p class="quiz_p"><div class="result_label">Anything you'd like to say about our website?</div>
						<br><?php echo $_POST["comments"]; ?>
					</p>
			</main>
			<footer>
				<img class="logo" src="bun_icon.png" alt="A steamed bun with a smiley face.">
				<h1>Check Out<br>These Buns!</h1>
				<p>This site is authored and maintained by Amani Medcroft. It is not an official website of the Maricopa County Community College District, and Maricopa is not responsible for the content of this site.</p>
			</footer>
		</div>
	</body>
</html>