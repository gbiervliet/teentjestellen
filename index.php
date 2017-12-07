<!DOCTYPE HTML>
<!--
	
	CHEEEESY A.F. 
	Als je dit leest ben je een nieuwsgierige AAP!!! 

	Hier ga je niet ontdekken of het een jonge, meisje of brulaap wordt.
-->
<html>
	<head>
		<title>teentjestellen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<?php include('./src/gender.php');


		?>
		        
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar">
								<div id="clockdiv" id="img">
							        <div>
							            <span class="days"></span>
							            <div class="smalltext">Dagen</div>
							        </div>
								
    						</span>
    						</div>
								<h1>Teentjes tellen</h1>
								<p>Aftellen tot we teentjes gaan tellen!</p>
						
						</header>
						
		
						<div id="genderchoice">
							<form action="index.php" method="post">
					<!-- 			<div class="field">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<div class="select-wrapper">
										<select name="department" id="department">
											<option value="">Department</option>
											<option value="sales">Sales</option>
											<option value="tech">Tech Support</option>
											<option value="null">/dev/null</option>
										</select>
									</div>
								</div>
								<div class="field">
									<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
								</div>
								<div class="field">
									<input type="checkbox" id="human" name="human" /><label for="human">I'm a human</label>
								</div> -->
								<?php 
									if($choice =="") {
										echo '
										<div class="field" >
											<label>Wat denk jij dat het wordt?</label>
											<input type="radio" id="gender_yes" name="gender" value="male"/><label for="gender_yes">Jongen</label>
											<input type="radio" id="gender_no" name="gender" value="female" /><label for="gender_no">Meisje</label>
										</div>
										<ul class="actions">
											<li><input type="submit" name="submit" value="Raden" ></li>
										</ul>';
									}
								?>
							</form>
						</div>
						<hr />
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Teentjes tellen</li><li><a href="http://naamraden.nl">naamraden.nl</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
			        <script type="text/javascript" src="src/countdown.js" ></script>

	</body>
</html>