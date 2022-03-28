<?php
include("../Conectare.php");

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../pagina-login.php');
	exit;
}

if (isset($_GET['id']) && is_numeric($_GET['id']))
{

	$id = $_GET['id'];

if ($stmt = $mysqli->prepare("DELETE FROM pisici WHERE id = ? LIMIT 1"))
{
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$stmt->close();
}
else
{
	echo "ERROR: Nu se poate executa delete.";
}
$mysqli->close();
	echo "<h1 style='color: #3c3c7b; font-size: 35px; text-align: center; padding-top: 50px'>Inregistrarea a fost stearsa!!!!</h1>";
}
echo "<p  style='color: #3c3c7b; font-size: 35px; text-align: center;'><a style='text-decoration: none;' href=\"vizualizare.php\">Tabel pisici</a></p>";
?>
<html>
<head>
<style>
body{
	background-image: url('pisica4.jpg');
	background-size: cover;
}
</style>
</head>
</html>
