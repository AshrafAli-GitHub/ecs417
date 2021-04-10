<!-- Phase 2 -->
<!-- Checks the username and password by validating the credentials against information in your database. If login successful then the screipt redirects to addPost; otherwise, display an error message. -->

<?php
	session_start();
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("DATABASE_USER");
	$dbpwd = getenv("DATABASE_PASSWORD");
	$dbname = getenv("DATABASE_NAME");
	$connect = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname) or die("Connection failed");
	if(!empty($_POST['submit']))
	{
		$email = $_POST ['email'];
		$password = $_POST ['password'];
		$query = "select * from login where email='$email' and password='$password'";
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		if($count>0){
			session_start();
			$_SESSION["email"] = $email;
			$_SESSION["password"] = $password;
			header("Location: addEntry.php");

		}
		else {
			echo '<script language="javascript">';
			echo 'alert("Login unsuccessful")';
			echo '</script>';
		}
	}
 ?>
