<?php
	session_start();
	 
	// Unset todas as vari�veis
	$_SESSION = array();
	session_destroy();
	
	header("location: index.php");
	exit;
?>