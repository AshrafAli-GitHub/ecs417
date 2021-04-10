<!-- Phase 2 -->
<!-- Resets all the $_SESSION variables and redirects to the homepage. -->
<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
 ?>
