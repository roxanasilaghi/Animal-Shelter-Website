<?php
	session_start();
	session_destroy();
	header('Location: pagina-acasa.php');
?>