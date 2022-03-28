<?php
include("../Conectare.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../pagina-login.php');
	exit;
}

$error='';
if (isset($_POST['submit']))
{

$id = htmlentities($_POST['id'], ENT_QUOTES);
$nume = htmlentities($_POST['nume'], ENT_QUOTES);
$varsta = htmlentities($_POST['varsta'], ENT_QUOTES);
$poza1 = htmlentities($_POST['poza1'], ENT_QUOTES);
$poza2 = htmlentities($_POST['poza2'], ENT_QUOTES);

if ($id == '' || $nume == ''||$varsta=='')
{

$error = 'ERROR: Campuri goale!';
} else {

if ($stmt = $mysqli->prepare("INSERT into pisici (id, nume, varsta, poza1, poza2) VALUES (?, ?, ?, ?, ?)"))
{
$stmt->bind_param("issss", $id, $nume, $varsta, $poza1, $poza2);
$stmt->execute();
$stmt->close();
}

else
{
echo "ERROR: Nu se poate executa insert.";
}
}
}

$mysqli->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head> <title><?php echo "Inserare"; ?> </title>
<style>
body{
	background-image: url('pisica4.jpg');
	background-size: cover;
}

h1{
	padding-top: 50px;
	text-align: center;
	font-family: "Copperplate", Fantasy;
	color: #3c3c7b;
	text-shadow: 3px 0 3px #a9a4c1;
}

div{
	text-align: center;
	background: #f5f0f0;
	color: #3c3c7b;
	font-size: 25;	
	font-weight: bold;
	font-family: "Georgia", Serif;
	margin: 0px 530px 0px 530px;
	padding: 50px 0px 45px 0px;
	border-radius: 50px;
}

a{
	color: #3c3c7b;
	font-size: 23;
	text-shadow: 3px 0 3px #a9a4c1;	
	font-weight: bold;
	font-family: "Georgia", Serif;	
	text-decoration: none;
}

#submit{
	border-radius: 18px;
  background: rgba(0, 100, 156, 0);
  border: 2px solid #3c3c7b;
  color: #3c3c7b;
  text-align: center;
  font-size: 15px;
  font-family: "Georgia", Serif;
  font-weight: bold;
  padding: 2px 0px 2px 0px;
  width: 70px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head> <body>
<h1><?php echo "Inserare"; ?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
<div>
<strong>ID: </strong> <input type="text" name="id" value=""/><br/>
<strong>Nume: </strong> <input type="text" name="nume" value=""/><br/>
<strong>Varsta: </strong> <input type="text" name="varsta" value=""/><br/>
<strong>Prima poza: </strong> <input type="text" name="poza1" value=""/><br/>
<strong>A doua poza: </strong> <input type="text" name="poza2" value=""/><br/>
<br/>
<input id="submit" type="submit" name="submit" value="Submit" />
<b><span> | </span></b>
<a href="vizualizare.php">Tabel pisici</a>
</div></form></body></html>