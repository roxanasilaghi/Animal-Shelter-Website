<?php
include("Conectare.php");
$error='';
if (isset($_POST['submit']))
{
	$nume = htmlentities($_POST['nume'], ENT_QUOTES);
	$email= htmlentities($_POST['email'], ENT_QUOTES);
	$telefon = htmlentities($_POST['telefon'], ENT_QUOTES);
	$alegere = htmlentities($_POST['alegere'], ENT_QUOTES);
	$animal = htmlentities($_POST['animal'], ENT_QUOTES);
	$nume_animal = htmlentities($_POST['nume_animal'], ENT_QUOTES);
	if ($nume == '' || $email == ''|| $telefon == '' || $alegere == '' || $animal == '' || $nume_animal=='')
	{
		$error = 'ERROR: Campuri goale!';
	} else {
		if ($stmt = $mysqli->prepare("INSERT into adoptie (nume, email, telefon, alegere, animal, nume_animal) VALUES (?, ?, ?, ?, ?, ?)"))
		{
			$stmt->bind_param("ssssss", $nume, $email, $telefon, $alegere, $animal, $nume_animal);
			$stmt->execute();
			$stmt->close();
			header('Location: succes.html');
		}
		else
		{
			echo "ERROR: Nu se poate executa insert.";
		}
	}
}
	$mysqli->close();
?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta  name="viewport"  content="width=device-width,  intial-scale=1">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://cdn.shopify.com/s/files/1/0004/4600/5305/files/sweetalert.min.js?1359"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            <link rel="stylesheet" href="stil.css"/>
<style>
.formular-adoptie h1{
	margin-bottom: 30px;
	font-family: "Copperplate";
}

.formular-adoptie{
	text-align: center;
	padding-bottom: 50px;
	padding-top: 30px;
	background-color: #dbcbcb;
	padding-left: 560px;
	padding-right: 560px;
	font-family: Georgia;
}

.formular-adoptie input[type=submit]{
	background-color: #6cacbc;
	border: black;
	border-radius: 20px;
	padding: 10px 20px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.formular-adoptie .form-control{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 20px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}
.formular-adoptie .buton{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 10px;
	width: 400px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.formular-adoptie .buton:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.formular-adoptie input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.formular-adoptie .form-control:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>

<div class="formular-adoptie">
<img src="formular-adoptie.png">
<h1>Formular pentru adopție</h1>

<?php if ($error != '') {
			echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
			<input type="text" name="nume" placeholder="Nume" id="nume" required class="buton" value=""></br>
			<br>
			<input type="email" name="email" placeholder="Email" id="email" required class="buton" value=""></br>
			<br>
			<input type="text" name="telefon" placeholder="Telefon" id="telefon" required class="buton" value=""></br>
			<br>
			<div class="form-group">
				<label for="">Pentru ce optați?</label>
				<select name="alegere" class="form-control" placeholder="Alegeti" required class="buton">
					<option value="adoptie">Adopție</option>
					<option value="foster">Foster</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Ce animal doriți?</label>
				<select name="animal" class="form-control" placeholder="Alegeti" required class="buton">
					<option value="caine">Câine</option>
					<option value="pisica">Pisică</option>
					<option value="hamster">Hamster</option>
					<option value="papagal">Papagal</option>
				</select>
			</div>
			<label>Aveți un animal preferat?</label><br>
			<input type="text" name="nume_animal" placeholder="Numele animalului" id="nume_animal" required class="buton" value=""></br>
			<br><a class="button" href="succes.html"><input type="submit" name="submit" value="Trimite" /></br></a>
			<a href="pagina-acasa.html"> Înapoi la pagina principală</a>
		</form>
</div>
</html>


		