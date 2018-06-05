<!DOCTYPE>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--		<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">-->

		<!-- Custom CSS -->
<!--		<link rel="stylesheet" href="css/style.css" type="text/css">-->

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

<!--		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>-->
<!--		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Michael's Website</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<img src="../images/" class="cir img-fluid rounded-circle">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="../images/Michael-Figueroa.pdf" target="_blank">Resume.pdf</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://bootcamp-coders.cnm.edu/~mfigueroa14/michaels-portfolio/" target="_blank">Portfolio.pdf</a>

<!--							<a href="https://www.tumblr.com/blog/spider811" id="imgTumblr" target="_blank">-->
<!--								<img id="imgTumblr" src="../images/square-tumblr-512.png" title="Tumblr" alt="Tumblr">-->
<!--							</a>-->
							<a href="https://twitter.com/spider811games" id="imgTwitter" target="_blank">
								<img id="imgTwitter" src="../images/twitter.png" title="Twitter" alt="Twitter">
							</a>
<!--							<a href="https://www.facebook.com/michael.figueroa.52438?ref=bookmarks" id="imgFacebook" target="_blank">-->
<!--								<img id="imgFacebook" src="../images/2000px-F_icon.svg.png" title="Facebook" alt="Facebook">-->
<!--							</a>-->
							<a href="https://github.com/Mike1f" id="imgGithub" target="_blank">
								<img id="imgGithub" src="../images/github-512.png" title="Guthub" alt="Github">
							</a>
							<a href="https://www.linkedin.com/in/michaelfigueroa811/" id="imgLinkedIn" target="_blank">
								<img id="imgLinkedIn" src="../images/square-linkedin-512.png" title="LinkedIn" alt="LinkedIn">
							</a>

					</ul>
				</div>
			</nav>
		</header>
		<div class="row">
			<div class="col-md-3">
				<img src="../images/pwp1.jpg" class="img-fluid rounded-circle">
				<img src="../images/pwp2.jpg" class="img-fluid rounded-circle">
				<img src="../images/pwp3.jpg" class="img-fluid rounded-circle">
			</div>
			<div class="col-md-9">
				<p id="midContent"></p>
			</div>
		</div>
		<body class="sfooter">
			<div class="sfooter-content">

				<header class="py-5">
					<div class="container">
						<h1>Contact Me</h1>
					</div>
				</header>

				<main class="container pb-5">
					<div class="row">
						<div class="col-md-6">

							<!-- BEGIN CONTACT FORM -->
							<form id="demo-form" method="post" action="php/mailer.php">
								<div class="form-group">
									<label for="demoName">Name</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-user"></i></span>
										</div>
										<input class="form-control" type="text" name="demoName" id="demoName" placeholder="Your Name">
									</div>
								</div>
								<div class="form-group">
									<label for="demoEmail">Email</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-envelope"></i></span>
										</div>
										<input class="form-control" type="email" name="demoEmail" id="demoEmail" placeholder="Your Email">
									</div>
								</div>
								<div class="form-group">
									<label for="demoSubject">Subject</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-pencil"></i></span>
										</div>
										<input class="form-control" type="text" name="demoSubject" id="demoSubject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="demoMessage">Message</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-comment"></i></span>
										</div>
										<textarea name="demoMessage" rows="5" id="demoMessage" class="form-control" placeholder="Your Message (1500 characters max)"></textarea>
									</div>
								</div>
								<div class="g-recaptcha" data-sitekey="6LcNJl0UAAAAAHsPlaHgytG9NFjGgdS05oLDlZ6u"></div>

								<button class="btn btn-info" type="submit">Submit</button>
								<button class="btn btn-default" type="reset">Reset</button>

							</form>
							<!-- END CONTACT FORM-->

							<div id="output-area"></div>

						</div><!-- /.col-sm-6 -->
					</div><!-- /.row -->
				</main>
			</div>

			<footer class="py-4 text-white">
				<div class="container">
					<a class="text-white" href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">Documentation</a> | <a class="text-white" href="https://github.com/rlewis2892/pwp-form-demo" target="_blank">GitHub</a>
				</div>
			</footer>
	</body>
</html>