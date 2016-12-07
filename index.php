<!DOCTYPE html>
<html>


	<head>



		<!--<style type="text/css">
			ul {list-style: none;padding: 0px;margin: 0px;}
			ul li {display: block;position: relative;float: left;border:1px solid #000}
			li ul {display: none;}
			ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
				white-space: nowrap;color: #fff;}
			ul li a:hover {background: #f00;}
			li:hover ul {display: block; position: absolute;}
			li:hover li {float: none;}
			li:hover a {background: #f00;}
			li:hover li a:hover {background: #000;}
			#drop-nav li ul li {border-top: 0px;}
		</style>-->
<!--		<link href='css/tabulous.css' rel='stylesheet' type='text/css'>-->
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Baumans|Pattaya|Squada+One|Unica+One" rel="stylesheet">
		<link href="css/pwpstylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>Trevor's Page</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--		<script type="text/javascript" src="js/tabulous.js"></script>-->
<!--		<script type="text/javascript" src="js/js.js"></script>-->
		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>

		<div class="title">
		<header class="main">Welcome to my Site</header>
			</div>
		<ul class="tabs" role="tablist">
			<li>
				<input type="radio" name="tabs" id="tab1" checked />
				<label for="tab1"
						 role="tab"
						 aria-selected="true"
						 aria-controls="panel1"
						 tabindex="0">Description</label>
				<div id="tab-content1"
					  class="tab-content"
					  role="tabpanel"
					  aria-labelledby="description"
					  aria-hidden="false">
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			</li>

			<li>
				<input type="radio" name="tabs" id="tab2" />
				<label for="tab2"
						 role="tab"
						 aria-selected="false"
						 aria-controls="panel2"
						 tabindex="0">Specification</label>
				<div id="tab-content2"
					  class="tab-content"
					  role="tabpanel"
					  aria-labelledby="specification"
					  aria-hidden="true">
					<!--Begin Contact Form-->
<form id="contact-form" action="php/email.php" method="post">
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
			<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
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
</ul>

<!--		<div id="wrapper">-->
<!--		<div id="tabs">-->
<!--			<ul id="nobull">-->
<!--				<li><a href="#tabs-1" title="Home">Home</a></li>-->
<!--				<li><a href="#tabs-2" title="About Me">About Me</a></li>-->
<!--				<li><a href="#tabs-3" title="Contact">Contact</a></li>-->
<!--			</ul>-->
<!--			<div id="tabs_container">-->
<!--				<div id="tabs-1">-->
<!--					<!--tab content-->
<!--					<p>CONTENT YO</p>-->
<!--				</div>-->
<!--				<div id="tabs-2">-->
<!--					<!--tab content-->
<!--					<p>My name is Trevor Pelton, and I am a full stack web developer versed in HTML, CSS, PHP, JavaScript, mySQL, and Angular 2.</p>-->
<!--				</div>-->
<!--				<div id="tabs-3">-->
<!--					</div>-->
<!--					<!--tab content-->
<!--				</div>-->
<!--			</div><!--End tabs container-->
<!--		</div>-->
<!--		</div>-->
<!--			<!--End tabs-->

	</body>
</html>

