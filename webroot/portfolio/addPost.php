<!-- Phase 2 -->
<!-- Adds a new post to a simple table within a MySQL database and redirects to viewBlog.php. -->
<?php
	session_start();
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("DATABASE_USER");
	$dbpwd = getenv("DATABASE_PASSWORD");
	$dbname = getenv("DATABASE_NAME");

	$connect = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

	if ($connect->connect_error){
		die("communication failed: ". $connect->connect_error);
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_REQUEST["ButtonSubmit"])) {
			$dt = date('Y-m-d H:i:s');
			$title = $_REQUEST["title"];
			$message = $_REQUEST["message"];

			$sql = "INSERT INTO blogpost(dt, title, message) VALUES('$dt','$title', '$message')";

			if ($connect->query($sql) === TRUE) {
				echo '<script type="text/javascript">';
				echo 'console.log("Added to SQL")';
				echo '</script>';
				header("Location: viewBlog.php");
			}
			else {
				echo "Error" .$sql . "<br>" . $connect->error;
			}
			$connect->close();
		}
		if (isset($_REQUEST['preview'])){
			$timeFormatted = date('jS F Y, G:i');
			$title = $_POST['title'];
			$message = $_POST['message'];

			echo "<h2>". $title. "</h2>";
			echo "<p id='dt'>". $timeFormatted ."</p>";
			echo "<br>";
			echo "<br>";

			echo "<p>". $message ."<p>";
			echo "<hr>";
		}
	}
?>

