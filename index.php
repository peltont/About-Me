<!DOCTYPE html>
<html>


	<head>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
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
		<link href='css/tabulous.css' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Baumans|Pattaya|Squada+One|Unica+One" rel="stylesheet">
		<link href="css/pwpstylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>Trevor's Page</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/tabulous.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
	</head>
	<body>

		<div class="title">
		<header class="main">Welcome to my Site</header>
			</div>
		<div id="wrapper">
		<div id="tabs">
			<ul id="nobull">
				<li><a href="#tabs-1" title="Home">Home</a></li>
				<li><a href="#tabs-2" title="About Me">About Me</a></li>
				<li><a href="#tabs-3" title="Contact">Contact</a></li>
			</ul>
			<div id="tabs_container">
				<div id="tabs-1">
					<!--tab content-->
					<p>CONTENT YO</p>
				</div>
				<div id="tabs-2">
					<!--tab content-->
					<p>My name is Trevor Pelton, and I am a full stack web developer versed in HTML, CSS, PHP, JavaScript, mySQL, and Angular 2.</p>
				</div>
				<div id="tabs-3">
					<?php
					//if "email" variable is filled out, send email
					if (isset($_REQUEST['email']))  {

						//Email information
						$admin_email = "tnpflyer20@msn.com";
						$email = $_REQUEST['email'];
						$subject = $_REQUEST['subject'];
						$comment = $_REQUEST['comment'];

						//send email
						mail($admin_email, "$subject", $comment, "From:" . $email);

						//Email response
						echo "Thank you for contacting us!";
					}

					//if "email" variable is not filled out, display the form
					else  {
						?>

						<form method="post">
							Email: <input name="email" type="text" /><br />
							Subject: <input name="subject" type="text" /><br />
							Message:<br />
							<textarea name="comment" rows="15" cols="40"></textarea><br />
							<input type="submit" value="Submit" />
						</form>

						<?php
					}
					?>
					<!--tab content-->
				</div>
			</div><!--End tabs container-->
		</div>
		</div>
			<!--End tabs-->

	</body>
</html>

