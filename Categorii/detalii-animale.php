<?php
include("Conectare.php");
?>
<html> 
	<head>
	<style>
a.visited{
	color: black;
	text-decoration: none;
}


.un{
	text-align: center; 
	font-family: "Courier New";
	font-size: 20px;
}

#btnEmpty{
	text-align: center;
}

img{
	border-radius: 40px;
	height: 300px;
}

.button {
  border-radius: 18px;
  background: linear-gradient(to right, #bfbfbf -37%, #ffffff 100%);
  border: none;
  color: black;
  text-align: center;
  font-size: 20px;
  font-family: "Courier New";
  font-weight: bold;
  padding: 20px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	</style>
		<title> <?php if ($_GET['id'] != '') { echo "Detalii"; }?> </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
	</head>
	<body>
		<div style="margin-left: 20px;">
			<?php
			$tab_animal = $_GET['animal'];
			$id_animal = $_GET['id'];
			$query = "SELECT * FROM ".$tab_animal." where id='".$id_animal."'";
			if ($result = $mysqli->query($query))
			{
				if ($result->num_rows > 0)
				{ $row = $result->fetch_object();?>
				<h1><?php if ($_GET['id'] != '') { echo $row->nume; }?></h1>
				<h2>Varsta:<?php echo $row->varsta;?><h2>
				<form method="post" action="cos.php?action=add&produs_id=<?php echo $row->produs_id;?>">
					 <button class="button"><span>Adoptă </span></button>
					 <button class="button"><span>Foster </span></button>
				</form>
		
					<img src="<?php echo $row->poza1;?>" style="margin-right: 50px;">
					<img src="<?php echo $row->poza2;}}?>">
				<br>
				<br>
				<br>
				<a class="button" href="lista_animale.php?animal=<?php echo $tab_animal;?>"><span>Înapoi la pagina principala</span></a>
		</div> 
	</body> 
</html>
