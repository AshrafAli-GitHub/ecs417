<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form class="testForm" method="post">
			<button type="submit" name="button">Test</button>
		</form>
	</body>
</html>

<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$sql = "INSERT INTO USERS (firstName, lastName, email, password) VALUES ('test', 'test', 'test', 'test')";

	if ($conn->query($sql) === TRUE) {

	}
 	else {
 		echo "Error: " . $sql . "<br>" . $conn->error;
 	}
 		$conn->close();
 }
