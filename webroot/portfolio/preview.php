<div class="container">;
	<div class="blogEntry">
		<h2> <a id='close_link' href="javascript:Close()">Close Preview</h2></a>
		<form method="get">
			<button type="submit" name="btnSubmit" class="blog_btn">Post</button>
			<button  class="blog_btn" onclick="close()">Close</button>

		</form>

		<?php

		if(isset($_POST['preview'])){
			$timeFormatted = date('jS F Y, G:i');
			$title = $_POST['title'];
			$message = $_POST['message'];

			echo "<h2>". $title. "</h2>";
			echo "<p id='dt'>". $timeFormatted ."</p>";
			echo "<br>";
			echo "<br>";

			echo "<p>". $message ."<p>";
			echo "<hr>";
			SendPreview($timeFormatted, $title, $message);
		}

		function SendPreview($time, $title, $message){
			echo '<script>';
			echo 'console.log("Running func")';
			echo '</script>';


			if (isset($_GET["btnSubmit"])) {
				echo '<script>';
				echo 'console.log("Running button")';
				echo '</script>';
				session_start();
				$dbhost = getenv("MYSQL_SERVICE_HOST");
				$dbport = getenv("MYSQL_SERVICE_PORT");
				$dbuser = getenv("DATABASE_USER");
				$dbpwd = getenv("DATABASE_PASSWORD");
				$dbname = getenv("DATABASE_NAME");

				$connect = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Connection failed");


				if (!$connect) {
					echo '<script language="javascript">';
					echo 'alert("Could not connect to database")';
					echo '</script>';
				}

				echo '<script>';
				echo 'console.log("Hello")';
				echo '</script>';

				$sql = "INSERT INTO blogpost(dt, title, message) VALUES('$time','$title', '$message')";
				mysqli_query($connect, $sql);

				//header("Location: viewBlog.php");
			}
			else{
				//header("Location: addEntry.php");
				}
		}


		?>
	</div>
</div>


<?php
include('viewBlog.php');
 ?>
