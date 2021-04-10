<!-- Phase 2 -->
<!-- Adds a new post to a simple table within a MySQL database and redirects to viewBlog.php. -->
<?php
session_start();

	$connect = mysqli_connect("localhost", "root", "", "blog") or die("Connection failed");

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

		header("Location: viewBlog.php");
		exit();
	}
?>
