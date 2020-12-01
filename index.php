<?php

if(isset($_POST['submit'])){
    $to='brittanywyatt1189@gmail.com';
    $subject='Message from Portfolio Website';
    $sender=$_POST['sender'];
    $from=$_POST['senderEmail'];
	$message = $sender . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);
	echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Brittany Wyatt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar2.png" alt="" /></span>
							<h1 id="title">Brittany Wyatt</h1>
							<p>Magento Developer</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon solid fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://www.linkedin.com/in/brittany-wyatt/" class="icon brands fab fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
							<li><a href="https://github.com/rockwell89" class="icon brands fa-github" target="_blank"><span class="label">Github</span></a></li>
							<li><a href="mailto: brittanywyatt1189@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi! I'm <strong>Brittany</strong>, <br />
									</h2>
								<p class="alt">I specialize in Magento development and automation</p>
							</header>

							<footer>
								<a href="#about" class="button scrolly">Learn more</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Portfolio</h2>
							</header>

							

							<div class="row">
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Ipsum Feugiat</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Rhoncus Semper</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="https://www.threepennyapparel.com" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Magento Ecommerce Website</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										<header>
											<h3>Natoque Vitae</h3>
										</header>
									</article>
								</div>
								<div class="col-4 col-12-mobile">
									<article class="item">
										<a href="https://github.com/rockwell89/jsLogicChallenge" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
										<header>
											<h3>JavaScript HEX ↔ RGB Converter</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
										<header>
											<h3>Orci Convallis</h3>
										</header>
									</article>
								</div>
							</div>
							<p></p>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

							<p>I left high school not fully knowing what I wanted to do or even what job titles there were. I did know that I loved my multimedia class, 
								so I got an associates degree in Graphic and Web Design. It was mainly graphic focused and I enjoyed that, but in my last semester I got a job
								as the first employee for an e-commerce store. I quickly became the one to handle everything graphic and web related, and when I say everything,
								I mean evvvvverything. I enjoyed the different challenging tasks and constant learning, but Google wasn't doing it quick enough for me. I went back
								to school for a web development certificate. The company I worked for grew, but I wanted to be able to focus more on development.</p>
							<p>A couple years later I started my own e-commerce side business with my mom. Yup, my mom. I love working with her. I wanted to be able to practice 
								more with web developement but again, I was tasked with most of the technology and design aspects of the company. Only, this time it was different. 
								We both still worked full time jobs, so time was more limited. 
								I decided I would and could automate as much of the business as possible. I learned Python, expanded my knowlege of Excel VBA and SQL, and got to 
								writing code. Nothing is more satisfying than writing code that cuts what would normally take hours, down to just a couple seconds with a click 
								of a button.
							</p>
							<p>That's when I realized what my real passion was... data.</p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>
							<?  ?>
							<form action="index.php" method="post" name="EmailForm">
								<div class="row">
									<div class="col-6 col-12-mobile"><input type="text" name="sender" placeholder="Name" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="senderEmail" placeholder="Email" /></div>
									<div class="col-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="col-12">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Brittany Wyatt. All rights reserved.</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>