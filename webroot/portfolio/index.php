<!-- Loads the homepage for the website -->
<!-- REQUIREMENTS
1. Use HTML semantic structure. <header>, <hgroup>, <nav>, <article>, ...
2. For login and addpost, create the required forms with HTML5 elements and allign elements.
3. Use HTML5 elements that allow validation of the fields within the form for login. Two forms needed.(TOPIC 4)
	One form for login and another to capture blog entry.
	ONLY HTML VALIDATION FOR PHASE 1.
 -->
<?php
	include_once("login.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.php">
		<title>Portfolio - Mohamed Ashraf Ali</title>
	</head>

	<!-- <script type="text/javascript">
		function validate(){
			var email = document.forms[0]["email"].value;
			console.log(email);
			if(email=="ec20930@qmul.ac.uk"){
				alert("Correct");
				return true;
			}
		}
	</script> -->
	<body>
		<header>
			<hgroup>
				<nav class="navbar">
					<ul class="navbar_list">
						<li class="current"><a href="#home">Home</a></li>
						<li><a href="skills.html">About Me</a></li>
						<li><a href="skills.html#Skills">Skills</a></li>
						<li><a href="education.html">Education</a></li>
						<li><a href="education.html#Experience">Experience</a></li>
						<li><a href="education.html#Portfolio">Portfolio</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="viewBlog.php">Blog</a></li>
					</ul>
				</nav>
			</hgroup>
		</header>

		<article class="main">
			<section id="home">
				<div class="container">
					<h1>Mohamed Ashraf Ali</h1>
					<p>Welcome to my portfolio</p>
					<p></p>
				</div>
			</section>


			<aside id="login">
				<div class="container">
					<h3>Login to the blog</h3>
					<form name"login" method="post">
						<input name ="email" type="email" placeholder="Enter Email">
						<input name="password" type="password" placeholder="Enter Password">
						<button nametype="submit" name="submit" type="submit" value="submit" class="submit_btn">Enter</button>
					</form>
				</div>
			</aside>
		</article>

		<footer>
			<p>Mohamed Ashraf Ali - Portfolio</p>
		</footer>
	</body>

</html>
