<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
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
		</style>
		<link href="css/pwpstylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<title>Trevor's Page</title>
	</head>
	<body>
		<ul id="drop-nav">
			<li><a href="#">Navigation</a></li>
			<ul>
			<li><a href="#">Previous Projects</a>
				<ul>
					<li><a href="#">HTML</a></li>
					<li><a href="#">CSS</a></li>
					<li><a href="#">JavaScript</a></li>
				</ul>
			</li>
			<li><a href="#">About me</a>
				<ul>
					<li><a href="#">History</a></li>
					<li><a href="#">Resume</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a>
				<ul>
					<li><a href="#">General Contact</a></li>
					<li><a href="#">Social Media</a></li>
					<li>Blog</li>
				</ul>
			</li>
				</ul>
		</ul>
		<!--<div class="title">
		<header class="main">Welcome to my Site</header>
			</div>
		<div>
			<table class="title" cellpadding="4">
				<tr>
					<th>Navigation</th>
					<td>About Me</td>
					<td>Resume</td>
					<td>Projects</td>
					<td>Contact Me</td>
				</tr>
			</table>
		</div>-->
		<br>
		<h1>My name is Trevor Pelton, I like my dog:</h1>
		<img src="img/puppy.jpg" height="400" width="400">
		<h2>I also enjoy reading and gaming... but mostly my dog.
		MRW It's my turn:</h2>
		<video src="http://imgur.com/4dUJvWI" title="mrw">

	</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Fushi
 * Date: 10/11/2016
 * Time: 4:25 PM
 */
