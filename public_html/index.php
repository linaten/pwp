<!DOCTYPE=html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
			integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
			  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
			  crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
			  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
			  crossorigin="anonymous"></script>


	<!-- jQuery Form, Additional Methods, Validate -->
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>


	<!-- this imports google's Russo One font" -->
	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../php/style.css">

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- form validate js -->
	<script src="js/form-validate.js"></script>


	<title>Lindsey Atencio</title>
</head>
<body>
<!--beginning of navbar bootstrap code-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="#container">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Examples</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About Me</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact Me</a>
			</li>
		</ul>
	</div>
</nav>
<!--end of navbar bootstrap code -->

<div class="welcome">
	<h1>Welcome!</h1>
</div>

<div class="container">
	<p>Are you interested in attracting more English-speaking tourists to your business? I can assist. I build websites. I can create a website for you in English. If you already have a website, I can add an English page to your website.</p>
</div>

<h2>Examples</h2>
<img src="../php/rmenu.png">
<p></p>
</div>
<div>
<div class="aboutme">
<h2>About Me</h2>
</div>

	<!--example attempt at a card with bootstrap -->
<div class="container1 bg-transparent">
<div class="row">
	<div class="card col-md-3 mx-auto" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title">About Me</h5>
			<h6 class="card-subtitle mb-2 text-muted">English</h6>
			<p class="card-text">I am a traveler and a freelance writer and computer programming. I have travelled through over 30 countries, and am passionate about experiencing new cultures and locations. As a tourist and a backpacker, I am uniquely qualified to understand what this demographic needs.</p>
		</div>
		</div>
	<div class="card col-md-3 mx-auto" style="width: 18rem;">
		<div class="card-body">
<img src="../php/facebook.jpg">
		</div>
	</div>
			<div class="card col-md-3 mx-auto" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Обо мне</h5>
				<h6 class="card-subtitle mb-2 text-muted">русский</h6>
				<p class="card-text">Я путешественник, независимый писатель и программист. Я путешествовал по более чем 30 странам и страстно желаю познакомиться с новыми культурами и местами. Как турист и турист, я обладаю уникальной квалификацией, чтобы понять, что нужно этой демографической потребности.</p>
		</div>
		</div>
</div>
</div>
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
								<input class="form-control" type="text" name="demoName" id="demoName"
										 placeholder="Your Name">
							</div>
						</div>
						<div class="form-group">
							<label for="demoEmail">Email</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-envelope"></i></span>
								</div>
								<input class="form-control" type="email" name="demoEmail" id="demoEmail"
										 placeholder="Your Email">
							</div>
						</div>
						<div class="form-group">
							<label for="demoSubject">Subject</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-pencil"></i></span>
								</div>
								<input class="form-control" type="text" name="demoSubject" id="demoSubject"
										 placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="demoMessage">Message</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-comment"></i></span>
								</div>
								<textarea name="demoMessage" rows="5" id="demoMessage" class="form-control"
											 placeholder="Your Message (2000 characters max)"></textarea>
							</div>
						</div>
						<div class="g-recaptcha" data-sitekey="6LfJEpQUAAAAAPgG3aU_LxfW9284ZClYuKvvMjQ0"></div>
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
			<a class="text-white" href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/"
				target="_blank">Documentation</a> | <a class="text-white"
																	href="https://github.com/rlewis2892/pwp-form-demo"
																	target="_blank">GitHub</a>
		</div>


		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<!-- form validate js -->
		<script src="js/form-validate.js"></script>
		<title>PWP Form Demo</title>
		</head>
		<body class="sfooter">
		<div class="sfooter-content">
			<header class="py-5">
				<div class="container">
					<h1>PWP Form Demo</h1>
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
									<input class="form-control" type="text" name="demoName" id="demoName"
											 placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="demoEmail">Email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input class="form-control" type="email" name="demoEmail" id="demoEmail"
											 placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="demoSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-pencil"></i></span>
									</div>
									<input class="form-control" type="text" name="demoSubject" id="demoSubject"
											 placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="demoMessage">Message</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-comment"></i></span>
									</div>
									<textarea name="demoMessage" rows="5" id="demoMessage" class="form-control"
												 placeholder="Your Message (2000 characters max)"></textarea>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="6LeyTsQUAAAAAOcy7HZ5rCMA3NHna8JVKAozW1rq"></div>
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
				<a class="text-white" href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/"
					target="_blank">Documentation</a> | <a class="text-white"
																		href="https://github.com/rlewis2892/pwp-form-demo"
																		target="_blank">GitHub</a>
			</div>
		</footer>
	</footer>
</body>