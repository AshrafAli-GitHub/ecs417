<!-- Phase 2 -->
<!-- Asks the user to post a blog entry -->

<!-- Loads the homepage for the website -->
<!-- REQUIREMENTS
1. Use HTML semantic structure. <header>, <hgroup>, <nav>, <article>, ...
2. For login and addpost, create the required forms with HTML5 elements and allign elements.
3. Use HTML5 elements that allow validation of the fields within the form for login. Two forms needed.(TOPIC 4)
	One form for login and another to capture blog entry.
	ONLY HTML VALIDATION FOR PHASE 1.
 -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.php">
		<title>View Blog - Mohamed Ashraf Ali</title>
	</head>

	<body>
		<div class="content-wrap">

			<header>
				<hgroup>
					<nav class="navbar">
						<ul class="navbar_list">
							<li><a href="index.php">Home</a></li>
							<li><a href="skills.html">About Me</a></li>
							<li><a href="skills.html#Skills">Skills</a></li>
							<li><a href="education.html">Education</a></li>
							<li><a href="#Experience">Experience</a></li>
							<li><a href="#Portfolio">Portfolio</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="current"><a href="viewBlog.php">Blog</a></li>
						</ul>
					</nav>
				</hgroup>
			</header>

			<section id="Blogpost">
				<div class="container">
					<h1>My Blog</h1>
					<h2>Add A Blog Post</h2>
					<form name="blogpost" method="get">
						<input type="text" name="title" class="title" id="title" placeholder="Title">
						<textarea name="message" id="message" rows="20" cols="80" placeholder="Enter text"></textarea>
						<button type="submit" name="ButtonSubmit" value="submit" class="blog_btn" onclick="validateForm(event)">Post</button>
						<button  name="preview" class="blog_btn" onclick="validatePreview(this.form)">Preview</button>
						<button  class="blog_btn" onclick="return clearBtn()">Clear</button>
					</form>
				</div>
			</section>

		</div>
			<footer>
				<p>Mohamed Ashraf Ali - Portfolio</p>
			</footer>
	</body>

	<script type="text/javascript">
		function validateForm(event) {
			if(document.getElementById("title").value == ''){
				alert("The title is empty");
				document.getElementById("title").style.border = "1px solid red";
				event.preventDefault();
			}
			if(document.getElementById("message").value == ''){
				alert("The message is empty");
				document.getElementById("message").style.border = "1px solid red";
				event.preventDefault();
			}
		}

		function validatePreview(form) {
			if(document.getElementById("title").value == ''){
				alert("The title is empty");
				document.getElementById("title").style.border = "1px solid red";
				event.preventDefault();
			}
			if(document.getElementById("message").value == ''){
				alert("The message is empty");
				document.getElementById("message").style.border = "1px solid red";
				event.preventDefault();
			}
			formPreview(form);
		}

		function formPreview(form){
			form.action = 'preview.php'
			form.submit();
		}

		function clearBtn(){
			if (confirm("Are you sure you want to clear?")){
				document.getElementById("title").value = "";
				document.getElementById("message").value = "";
			}
			else {
				return false;
			}
		}
	</script>
	 <?php include_once("addPost.php") ?>
</html>
