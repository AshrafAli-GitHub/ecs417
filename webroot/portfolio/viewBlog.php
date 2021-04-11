<!-- Phase 2 -->
<!-- Displays blog post stored in your table within the MySQL database on your server, and redirects user to login.html if there is no entry -->
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/style.php">
		<title>Viewing Blog - Mohamed Ashraf Ali</title>

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


			<div class="container">
				<div class="blogEntry">
					<?php
					$dbhost = getenv("MYSQL_SERVICE_HOST");
					$dbport = ("MYSQL_SERVICE_PORT");
					$dbuser = getenv("DATABASE_USER");
					$dbpwd = getenv("DATABASE_PASSWORD");
					$dbname = getenv("DATABASE_NAME");
					$connect = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Connection failed");


						if(!$connect){
							echo '<script language="javascript">';
							echo 'alert("Could not connect to database")';
							echo '</script>';
						}

						$sql = "SELECT id, dt, title, message from blogpost";
						$result = $connect -> query($sql);

						// Place each sql row in an array element
						$data = array();
						if(mysqli_num_rows($result) >0){
							while($row = mysqli_fetch_assoc($result)){
								$data[] = $row;
							}
						}

						// Bubblesort function
						function bubbleSort($data){
							$length = count($data);

							$temp = 0;

							for ($i = 0; $i < $length; $i++){
								for($j = 1; $j < $length; $j++){
									if($data[$j - 1]['dt'] < $data[$j]['dt']){
										$temp = $data[$j - 1];
										$data[$j - 1] = $data[$j];
										$data[$j] = $temp;
									}
								}
							}
							return $data;
						}

						$sortedData = bubbleSort($data);

						$months = array();
						foreach($sortedData as $data){
							$SQLdt = $data["dt"];
							$time = strtotime($SQLdt);

						}

						// Print each blog post from DB.
						foreach($sortedData as $data){
							$SQLdt = $data["dt"];
							// Change time to different format
							$time = strtotime($SQLdt);
							$timeFormatted = date('jS F Y, G:i', $time);

							echo "<h2>". $data["title"] ."</h2>";
							echo "<p id='dt'>". $timeFormatted ." UTC</p>";
							echo "<br>";
							echo "<br>";

							echo "<p>". $data["message"] ."<p>";
							echo "<hr>";
						}
						?>
						<div class="addPost">
							<p>
								<?php
								if (isset($_SESSION['email'])){
									echo '<a id="blogLink" href="addEntry.php">Create a blog post</a>';
									echo '<br>';
									echo '<br>';
									echo '<a id="blogLink" href="logout.php">Logout</a>';
								}
								else{

									echo '<a id="blogLink" href="index.php">Login to create a blog post</a>';
								}
							  ?>
						</p>

					 </div>
				 </div>
			 </div>
			 <footer>
				 <p>Mohamed Ashraf Ali - Portfolio</p>
			 </footer>
		</div>
	</body>
</html>
