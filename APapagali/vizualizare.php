<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<style>
table{
	background: #f5f0f0;
	text-align: center;
	color: #3c3c7b;	
	font-weight: bold;
	font-family: "Georgia", Serif;
}

body{
	background-image: url('papagali.jpg');
	background-size: cover;
}

h1{
	font-family: "Copperplate", Fantasy;
	color: #3c3c7b;
	text-shadow: 3px 0 3px #a9a4c1;
	font-size: 39px;
}

p{
	color: #3c3c7b;
	text-shadow: 3px 0 3px white;
	font-size: 25px;	
	font-weight: bold;
	font-family: "Georgia", Serif;
}

div{
	text-align: center;
}

a{
	color: #3c3c7b;
	font-size: 23;
	font-weight: bold;
	font-family: "Georgia", Serif;	
	text-decoration: none;
}

.ad{
	text-shadow: 3px 0 3px #a9a4c1;
	font-size: 29px;
	font-weight: bold;
	font-family: "Copperplate", Fantasy;
}

table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}

</style>
<title>Vizualizare tabela papagali</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Inregistrarile din tabela papagali</h1>
<br>
<?php

 include("../Conectare.php");
 session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../pagina-login.php');
	exit;
}
 
 
if ($result = $mysqli->query("SELECT * FROM papagali ORDER BY id"))
{ 
if ($result->num_rows > 0)
{
echo "<div>";
echo "<table border='1' cellpadding='10'>";
// antetul tabelului
echo "<tr><th>ID</th><th>Nume</th><th>Varsta</th><th>Poza 1</th><th>Poza 2</th></tr>";
while ($row = $result->fetch_object())
{
	
echo "<tr>";
echo "<td>" . $row->id . "</td>";
echo "<td>" . $row->nume . "</td>";
echo "<td>" . $row->varsta . "</td>";
echo "<td>" . $row->poza1 . "</td>";
echo "<td>" . $row->poza2 . "</td>";
echo "<td><a href='modificare.php?id=" . $row->id . "'>Modificare</a></td>";
echo "<td><a href='stergere.php?id=" .$row->id . "'>Stergere</a></td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
}

else
{
echo "Nu sunt inregistrari in tabela!";
}
}

else
{ echo "Error: " . $mysqli->error(); }

$mysqli->close();
?>
<br>
<a class="ad" href="inserare.php">Adaugare</a>
</body>
</html>