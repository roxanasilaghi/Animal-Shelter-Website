<?php
include("Conectare.php");
$error='';
if (isset($_POST['submit']))
{
	$nume = htmlentities($_POST['nume'], ENT_QUOTES);
	$email= htmlentities($_POST['email'], ENT_QUOTES);
	$telefon = htmlentities($_POST['telefon'], ENT_QUOTES);
	$adresa = htmlentities($_POST['adresa'], ENT_QUOTES);
	$oras = htmlentities($_POST['oras'], ENT_QUOTES);
	$tara = htmlentities($_POST['tara'], ENT_QUOTES);
	$varsta = htmlentities($_POST['varsta'], ENT_QUOTES);
	$mesaj = htmlentities($_POST['mesaj'], ENT_QUOTES);
	if ($nume == '' || $email == ''|| $telefon == '' || $adresa == '' || $oras == '' || $tara == ''|| $varsta == '' || $mesaj == '')
	{
		$error = 'ERROR: Campuri goale!';
	} else {
		if ($stmt = $mysqli->prepare("INSERT into voluntari (nume, email, telefon, adresa, oras, tara, varsta, mesaj) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"))
		{
			$stmt->bind_param("ssssssss", $nume, $email, $telefon, $adresa, $oras, $tara, $varsta, $mesaj);
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
body{
	background-color: #dbcbcb;
}

.formular{
	text-align: center;
	padding-top: 20px;
}

.formular h1{
	font-size: 150%;
	margin-bottom: 5px;
	text-shadow: 2px 2px 5px #dbcbcb;
	font-family: "Georgia";
}

.formular .buton{
	background-color: fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 10px;
	width: 400px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 14px;
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.formular .buton:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.formular .mesaj{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 10px;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 14px;
	height: 150px;
	width: 400px;
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.formular input[type=submit]{
	background-color: #cbf2ea;
	border: black;
	border-radius: 20px;
	padding: 10px 20px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 16px;
	-webkit-transition-duration: 0.4s; Safari 
	transition-duration: 0.4s;
}

.formular input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.formular textarea:hover{
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

}

</style>
<body>
<div class="formular">
    <h1>Formular voluntari</h1>
	<?php if ($error != '') {
			echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
    <form action="" method="post">
        <br><input type="text" name="nume" placeholder="Nume" id="nume" required class="buton" value=""></br>
		<br><input type="email" name="email" placeholder="Email" id="email" required class="buton" value=""></br>
		<br><input type="text" name="telefon" placeholder="Telefon" id="telefon" required class="buton" value=""></br>
		<br><input type="text" name="adresa" placeholder="Adresa" id="adresa" required class="buton" value=""></br>
		<br><input type="text" name="oras" placeholder="Oras" id="oras" required class="buton" value=""></br>
		<br><input type="text" name="tara" placeholder="Tara" id="tara" required class="buton" value=""></br>
		<br><input type="text" name="varsta" placeholder="Varsta" id="varsta" required class="buton" value=""></br>
		<p>Care sunt motivele pentru care dorești să faci parte din echipa noastră de voluntari?</p>
		<textarea name="mesaj" placeholder="Mesaj" id="mesaj" required class="mesaj" rows="10" cols="30" value=""></textarea></br><br>
        <input type="submit" name="submit" value="Alătură-te voluntarilor!">
    </form>
	<img src="voluntariat.png" style="align: center">
</div>
</body>
</html>

