<?php 
include("../../Conectare.php");
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../pagina-login.php');
	exit;
}

$error='';
if (!empty($_POST['id']))
{ if (isset($_POST['submit']))
{ 
if (is_numeric($_POST['id']))
{ 
	$id = $_POST['id'];
	$nume = htmlentities($_POST['nume'], ENT_QUOTES);
	$varsta = htmlentities($_POST['varsta'], ENT_QUOTES);
	$poza1 = htmlentities($_POST['poza1'], ENT_QUOTES);
	$poza2 = htmlentities($_POST['poza2'], ENT_QUOTES);

if ($nume == '' || $varsta == ''||$poza1==''||$poza2=='')
{ 
echo "<div> ERROR: Completati campurile obligatorii!</div>";
}else
{ 
if ($stmt = $mysqli->prepare("UPDATE hamsteri SET nume=?, varsta=?, poza1=?, poza2=? WHERE id='".$id."'"))
{
$stmt->bind_param("ssss", $nume, $varsta, $poza1, $poza2);
$stmt->execute();
$stmt->close();
 }
else
{echo "ERROR: nu se poate executa update.";}
}
}

else
{echo "id incorect!";} }}
?>
<html> <head><title> <?php if ($_GET['id'] != '') { echo "Modificare inregistrare"; }?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>

<style>
body{
	background-image: url('hamster.jpg');
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
	font-size: 21px;	
	font-weight: bold;
	font-family: "Georgia", Serif;
	margin: 0px 530px 0px 530px;
	padding: 50px 0px 45px 0px;
	border-radius: 50px;
}

a{
	color: #3c3c7b;
	font-size: 21px;
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

</head>
<body>
<h1><?php if ($_GET['id'] != '') { echo "Modificare inregistrare"; }?></h1>
<?php if ($error != '') {
echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<div>
<form action="" method="post">
	<?php if ($_GET['id'] != '') { ?>
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
		<p>ID: <?php echo $_GET['id'];
		if ($result = $mysqli->query("SELECT * FROM hamsteri where id='".$_GET['id']."'"))
	{
	if ($result->num_rows > 0)
	{ $row = $result->fetch_object();?>
	</p>
	<strong>Nume: </strong> <input type="text" name="nume" value="<?php echo $row->nume;?>"/><br/>
	<strong>Varsta: </strong> <input type="text" name="varsta" value="<?php echo $row->varsta;?>"/><br/>
	<strong>Poza1: </strong> <input type="text" name="poza1" value="<?php echo $row->poza1;?>"/><br/>
	<strong>Poza2: </strong> <input type="text" name="poza2" value="<?php echo $row->poza2; }}}?>"/><br/>
	<br/>
	<input id="submit" type="submit" name="submit" value="Submit" />
	<a href="vizualizare.php">Tabel hamsteri</a>
	</div>
</form>
</body> 
</html>