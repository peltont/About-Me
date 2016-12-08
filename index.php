<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Baumans|Pattaya|Squada+One|Unica+One"
				rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<meta charset="UTF-8">
		<title>Trevor's Coding Corner</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body class="main">

		<div class="title">
			<header class="main">Welcome to Trevor's Coding Corner</header>
		</div>
		<div>
			<ul class="tabs" role="tablist">

				<li>
					<input type="radio" name="tabs" id="tab1" checked/>
					<label for="tab1"
							 role="tab"
							 aria-selected="true"
							 aria-controls="panel1"
							 tabindex="0">About Me</label>
					<div id="tab-content1"
						  class="tab-content"
						  role="tabpanel"
						  aria-labelledby="about-me"
						  aria-hidden="false">
						<img src="img/hershey-profresized.jpg" class="profile-image">
						<p>My Name is Trevor and I'm an entry level developer familiar with PHP, HTML5, CSS, JavaScript,
							mySQL, MATLAB,
							and Angular 2. I'm currently looking for work with a company with whom I may develop my skills</p>
					</div>
				</li>

				<li>
					<input type="radio" name="tabs" id="tab2"/>
					<label for="tab2"
							 role="tab"
							 aria-selected="false"
							 aria-controls="panel2"
							 tabindex="0">Contact Me</label>
					<div id="tab-content2"
						  class="tab-content"
						  role="tabpanel"
						  aria-labelledby="contact-me"
						  aria-hidden="true">
						<!--Begin Contact Form-->
						<form id="contact-form" action="php/mailer.php" method="post">
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="message" name="message"
												 placeholder="Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6Lfflg0UAAAAAP9TvVee34Bp7ELsblprbXUMPKqq"></div>

							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

						<!--empty area for form error/success output -->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>

						</div>
				</li>
				<li>
					<input type="radio" name="tabs" id="tab3"/>
					<label for="tab3"
							 role="tab"
							 aria-selected="false"
							 aria-controls="panel3"
							 tabindex="2">Projects</label>
					<div id="tab-content1"
						  class="tab-content"
						  role="tabpane3"
						  aria-labelledby="description"
						  aria-hidden="true">
						<img src="img/hershey-profresized.jpg" class="profile-image">
						<p>To be Added once more projects are completed...</p>
					</div>
				</li>
			</ul>
		</div>
	</body>
</html>

