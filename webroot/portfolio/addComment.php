<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "blog", "") or die("Connection failed");

if (!$connect) {
	echo '<script>';
	echo 'alert("Could not connect to database")';
	echo '</script>';
}

$sql = "SELECT * FROM comments";
$result = $connect -> query($sql);

if (isset($_REQUEST['submitC'])){
	exit("connected");
	$dt = date('Y-m-d H:i:s');
	$comment = $_REQUEST["comment"];

	$connect -> query("INSERT INTO (userid, comment, dt) VALUES ('".$_SESSION['email']." ',' $comment',' $dt) ");
	exit('success');
}

if(!empty($_POST['submitC']))
{
	exit("Connected");
	}
else {
	echo '<script language="javascript">';
	echo 'alert("Login unsuccessful")';
	echo '</script>';
}

?>
