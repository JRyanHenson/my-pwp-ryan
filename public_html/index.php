<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>


		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- particleground -->
		<script src="js/jquery.particleground.min.js" type="text/javascript"></script>

		<!-- not an easter egg -->
		<script src="https://cdn.rawgit.com/mikeflynn/egg.js/master/egg.min.js"> type="text/javascript" </script>
		<script src="js/egg.js" type="text/javascript"></script>

		<!-- custom js -->
		<script src="js/custom.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Ryan Henson</title>
	</head>
	<body data-spy="scroll" data-target=".navbar-fixed-top">
		<img id="egggif" src="https://media.giphy.com/media/DpXqHdILXRRDi/giphy.gif"/>
		<header>
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger"></span>
							</button>
						</div>
						<!-- Collect the nav links for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#">Home</a></li>
								<li><a href="#section-2">About Me</a></li>
								<li><a href="#section-3">Portfolio</a></li>
								<li><a href="#section-4">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="https://github.com/jryanhenson/" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a></li>
								<li><a href="https://www.linkedin.com/in/j-ryan-henson-4415a2117/" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
							</ul>
						</div><!-- .navbar-collapse -->
					</div><!-- container -->
				</nav>
		</header>
		<main>
			<section id="particleground">
				<div class="container-fluid">
					<div id="welcome">
						<div class="row">
							<div class="col-xs-4 col-md-5">
								<img src="https://www.fillmurray.com/150/150" class="img-responsive center-block img-rounded" alt="Responsive image">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" >
								<h2>J. Ryan Henson</h2>
								<h4>Information Security Consultant and Developer</h4>
							</div>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</section>
			<section id="section-2">
				<div class="container-fluid">
					<div class="row">
						  <h2>About Me</h2>
							<p>My name is Ryan Henson. I am an information security professional and full stack developer. For the past ten years,
								I have worked in various roles in the information technology. My career began in the United States Navy as a Cryptologic Technician.
								After an honorable discharge, I moved into private industry where I have worked in network engineering, system administration, and
								information security. Recently, I have begun to combine my experience in information security and full stack development to develop
								tools to automate information security compliance processes. Contact me below if you think I can help you with your unique security and/or devlopment needs.</p>
					</div><!-- row -->
					<div class="row">
						<div class="col-xs-6" data-animate="fadeIn" data-animate-delay="400">
							<div class="icon-box"><i class="fa fa-desktop fa-4x"></i></div>
							<h5>Web Development</h5>
							<p>In 2017, my passion for technology led me to enroll in a full stack web development program at Central New Mexico Community College.
								The program allowed me to transition from a novice developer to an aspiring professional developer with a skillset that includes in-depth
								experience in MySQL, PHP, JQuery, and Angular. Check out my portfolio below and let me know what you think.</p>
						</div>
						<div class="col-xs-6" data-animate="fadeInRight" data-animate-delay="400">
							<div class="icon-box"><i class="fa fa-lock fa-4x"></i></div>
							<h5>Information Security</h5>
							<p>I have five years of experience conducing vulnerability and risk assessments in accordance with compliance standards such as the National
								Institute of Standards and Technology (NIST) Risk Management Framework (RMF). My experience includes analysis of various technologies in tactical
								systems and enterprise networks. I also hold a Certified Information System Security Professional certification which I obtained in 2015.
							</p>
						</div>
					</div><!-- row -->
				</div><!-- container -->
			</section>
			<section id="section-3">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h2>Web Development Portfolio</h2>
						</div>
					</div>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="https://www.google.com" title="Link to ABQ Town Hall Website">
									<img src="images/abqth.png" alt="ABQ Townhall" class="center-block">
								</a>
								<div class="carousel-caption">
									<h3>ABQ Town Hall Website</h3>
									<p>A concept website that allows constituents in the city of Albuquerque to communicate with their city council
										representatives.</p>
								</div>
							</div>
							<div class="item">
								<a href="https://www.colonellevels.net/" title="Link to Colonel Levels Website">
								<img src="images/colonellevels.png" alt="Colonel levels" class="center-block">
								</a>
								<div class="carousel-caption">
									<h3>Colonel Levels Website</h3>
									<p>A concept web application with tools meant to automate information security compliance processes.</p>
								</div>
							</div>
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div><!-- container -->
			</section>
			<section id="section-4">
			<div class="container-fluid">
				<h2>Contact Section</h2>
				<h4>Tell me about your unique security or development needs</h4>
				<div class="row">
					<div class="col-xs-12">
						<!-- BEGIN CONTACT FORM -->
						<form id="contact-form" method="POST" action="php/mailer.php">
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
									<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment"></i>
									</div>
									<textarea rows="5" name="message" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
								</div>
							</div>
						<!-- Google reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6Ldd5S4UAAAAAImWRRtDNaltEqpTjk4pkWvHB44K"></div>
							<button class="btn btn-default" type="reset">Reset</button>
							<button class="btn btn-info" type="submit">Submit</button>
						</form>
						<!-- END CONTACT FORM-->
					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->
			<!-- EMPTY FORM OUTPUT AREA -->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div><!-- container -->
			</section>
		</main>
	</body>
		<footer>
			<div class="footer">
				Ryan Henson © 2017 | <a href="http://www.github.com/jryanhenson">github</a> | <a href="#section-3">portfolio</a> | <a href="#section-4">contact</a>
			</div>
		</footer>
</html>