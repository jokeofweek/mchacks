<?php

include 'php/config.php';

if(isset($_POST['submit']))
{
	$result = signup_post();
}

?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta property="og:image" content="http://mchacks.io/assets/images/mchacksfb.jpg"/>
<meta property="og:description" content="McHacks 2014. Canada's largest student hackathon for undergraduate students. Get pumped. 500 Hackers. 24 hours. $30k in prizes. Feb 22-23. Check us out at http://mchacks.io/" />
<title>McHacks | McGill's official student hackathon</title>
<!--[if lt IE 9]>
  <script src="./assets/javascripts/html5.js"></script>
<![endif]-->
<!--[if (gt IE 8) | (IEMobile)]><!-->
<!--  <link rel="stylesheet" href="./assets/css/unsemantic-grid-responsive.css" /> -->
<!--<![endif]-->
<!--[if (lt IE 9) & (!IEMobile)]>
  <link rel="stylesheet" href="./assets/css/ie.css" />
<![endif]-->
<link rel="stylesheet" href="./assets/css/unsemantic-grid-responsive.css" />
<link rel="stylesheet" href="./assets/css/site.css" />
<script src="./assets/javascripts/jquery.js"></script>
<script src="./assets/javascripts/jquery.typer.js"></script>
<script src="./assets/javascripts/custom.js"></script>

<link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon" /> 

</head>
<body>
<header>
	<div class="grid-container">
		<div class="grid-100 mobile-grid-100 body75" id="mtlbg">
			<div id="logo-wrapper">
				<img src="./assets/images/mchacks_dark_1200.png" id="logo">
			</div>
		</div>
	</div>
</header>

<div class="clear"></div>

<section id="faq">
	<div class="grid-container">
		<div class="grid-100 mobile-grid-100 button-wrapper" id="pre-register">
			<a href="#" class="button">Register your spot!</a>
		</div>

		<div class="grid-100 mobile-grid-100 button-wrapper" id="register">
			<form action="" method="post">
				<input type="text" value="" placeholder="Enter your email" name="email" />
				<input type="submit" name="submit" value="It's go time." />
			</form>
		</div>
	</div>

	<div class="clear"></div>

	<div class="grid-container">

		<div class="grid-100 mobile-grid-100" id="teaser">
			<?php if (isset($result)): ?>
				<?php if($result['error'] != false): ?>
					<div class="result-well result-well-error">
						<?= $result['error']; ?>
					</div>
				<?php else: ?>
					<div class="result-well result-well-success">
						<?= $result['message']; ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			<h1>
				<span class="highlight-faint">Feb 22-23/2014</span> at McGill.
				<span class="highlight-faint">$30k</span> prizes, <span class="highlight-faint">500</span> hackers. À Montréal, mon chéri.
				Canada's <span class="highlight" data-typer-targets="official student,most aesthetic,most badass,best,coolest,biggest,tastiest,most hip,best dressed,best judged,zestiest,most Canadian">biggest</span> hackathon.
			</h1>
		</div>
 
		<div class="clear clearfix"></div>
		<hr>

		<div class="grid-25 mobile-grid-95">
			<h3>Who's invited?</h3>
			<p>If you're an undergraduate from any university, from any country, you're welcome! If you're in high school or a grad student, get in touch with us and we'll do this on a case by case basis. Bring Student ID!</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>What do I have to pay for?</h3>
			<p>Admission is free and that includes food and drink for the duration of the hackathon. We'll also pitch in $200 dollars for your travel costs  (not hotels). Stay tuned for buses to your university as well!</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>How big should teams be?</h3>
			<p>Teams are capped at 4 people. Don't worry if you don't have a team, we'll help you find people to hack with before the event. It's also ok to go it alone, but it probably won't be as fun.</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>What's the format?</h3>
			<p>Anything goes! Web, desktop, mobile, and hardware projects are all welcome. (All hacks should be computer-related, though.) Projects will be judged based on creativity, technical difficulty, polish, and usefulness.</p>
		</div>

		<div class="clear clearfix"></div>

		<div class="grid-25 mobile-grid-95">
			<h3>Can I keep working on a past project?</h3>
			<p>No, start fresh. If you do decide to skirt this rule, let us know so we can judge your work fairly. Using third-party APIs and libraries is definitely okay, as long as they're accessible by everyone else as well.</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>What if I'm a noob?</h3>
			<p>This is a great opportunity for you to learn how to hack! We'll have lots of evangelists walking around and some fantastic tech talks lined up. Please note that we only reimburse travel if you submit a hack.</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>What should I bring?</h3>
			<p>Bring whatever you hack with, a student ID and whatever you're hacking on like a device or hardware.</p>
		</div>
		 
		<div class="grid-25 mobile-grid-95">
			<h3>My question isn't answered here.</h3>
			<p>Hit us up via <a href="mailto:contact@mchacks.io">email</a>, <a href="http://twitter.com/hack_mcgill">Twitter</a>, or <a href="http://facebook.com/mcgillhacks">Facebook</a>.</p>
		</div>

		<div class="clear clearfix"></div>
	</div>
</section>

<div class="clear clearfix"></div>

<footer>
	<div class="grid-container">
		<div class="grid-100 mobile-grid-100">
			<h3>McHacks is organized by <a href="http://hackmcgill.com">HackMcGill</a> and <a href="http://csus.cs.mcgill.ca/">CSUS</a>. Design by <a href="http://prokoudine.com">Mark</a> and <a href="http://xav.io">Xavier</a>. For sponsorship inquiries, contact <a href="mailto:sponsorship@mchacks.io">sponsorship@mchacks.io</a>.</h3>
			<br/>
			<!--<h4>Every curl is a golden idea.</h4>-->
		</div>
	</div>
</footer>

</body>
</html>