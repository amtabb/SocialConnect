<?php
//Abdul added
session_start();

session_unset();

// destroy the session
session_destroy();

	header("location:login.php");
	?>
	<script>
	window.location = "login.php"
	</script>