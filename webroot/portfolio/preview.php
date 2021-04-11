<div class="container">;
	<div class="blogEntry">
		<h2> <a id='close_link' href="javascript:Close()">Close Preview</h2></a>
		<?php
		if(isset($_POST['preview'])){
			$timeFormatted = date('jS F Y, G:i');

			echo "<h2>". $_POST['title']. "</h2>";
			echo "<p id='dt'>". $timeFormatted ."</p>";
			echo "<br>";
			echo "<br>";

			echo "<p>". $_POST["message"] ."<p>";
			echo "<hr>";

		}
		?>
	</div>
</div>
<script type="text/javascript">
	function Close(){
		close();
	}
</script>
<?php
include('viewBlog.php');
 ?>
