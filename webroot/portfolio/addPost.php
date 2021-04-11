<!-- Phase 2 -->
<!-- Adds a new post to a simple table within a MySQL database and redirects to viewBlog.php. -->
<?php
	session_start();
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("DATABASE_USER");
	$dbpwd = getenv("DATABASE_PASSWORD");
	$dbname = getenv("DATABASE_NAME");
	$connect = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Connection failed");


	if(!$connect){
		echo '<script language="javascript">';
		echo 'alert("Could not connect to database")';
		echo '</script>';
	}

	if(isset($_REQUEST["submit"])){
		$dt = date('Y-m-d H:i:s');
		$title = $_REQUEST["title"];
		$message = $_REQUEST["message"];


		$sql = "INSERT INTO blogpost(dt, title, message) VALUES('$dt','$title', '$message')";
		mysqli_query($connect, $sql);
		echo '<script type="text/javascript">';
		echo 'alert("a")' ;
		echo '</script>';
		header("Location: viewBlog.php");
		exit();
	}
?>

