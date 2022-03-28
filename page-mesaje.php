<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'adapost';
$mysqli = new mysqli($hostname, $username, $password,$db);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Vizualizare produse</title>
	<meta charset="utf-8">
	<meta  name="viewport"  content="width=device-width,  intial-scale=1">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.shopify.com/s/files/1/0004/4600/5305/files/sweetalert.min.js?1359"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css"/>

<style>
body{
	background-color:#ddcecc;
}
.nume{
		background-color: #ddcecc;
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #3c3c7b;
	font-family:Copperplate;
}

li {
  float: left;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

li a:hover {
	background-color: #111;
}

.vizualizare{
	text-align: center;
	margin-left: 35px;
	margin-right: 35px;
}

.vizualizare h1, p{
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	font-family: "Courier New";
	padding-top: 50px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

th {
  color: #334747;
}

th, td {
  border-bottom: 1px solid #ddd;
  padding: 8px;
  font-family:Georgia;
}

.vizualizare h1 {
	font-family:Copperplate;
}

</style>
</head>

<body>
	<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a"><h1 class="titlu"> Speranța </h1>
			<h2>Din dragoste pentru animale</h2>
		</span>
	</div>
	
	<ul>
		<li><a href="index-admin.php">Acasă</a></li>
		<li><a href="modificare.php">Animale</a></li>
		<li><a href="page-mesaje.php">Mesaje</a></li>
		<li><a href="page-voluntari.php">Voluntari</a></li>
		<li><a href="adoptii.php">Cereri adoptii</a></li>
		<li><a href="pagina-acasa.php"><i class="fas fa-sign-out-alt"></i></a></li>
	</ul>
	
	<div class="vizualizare">
		<h1>Mesaje</h1>
		<br><center>
		<?php
			include("Conectare.php");
			if ($result = $mysqli->query("SELECT * FROM mesaje ORDER BY id "))
			{ 
				if ($result->num_rows > 0)
				{
					echo "<table border='1' cellpadding='10'>";
					echo "<tr><th>Nume </th><th>Email</th><th>Telefon</th><th>Mesaj</th></tr>";
					while ($row = $result->fetch_object())
					{
						echo "<tr>";
						echo "<td>" . $row->nume . "</td>";
						echo "<td>" . $row->email . "</td>";
						echo "<td>" . $row->telefon . "</td>";
						echo "<td>" . $row->mesaj . "</td>";
						echo "<td><a href='Stergere-mesaje.php?id=" .$row->id . "'>Stergere</a></td>";
						echo "</tr>";
					}
					echo "</table>";
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
	</div>
</body>
</html>