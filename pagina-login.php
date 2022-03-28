<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="utf-8">
	<title>Login</title>
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
		<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>

.login{
	text-align: center;
	padding-top: 80px;
	padding-bottom: 50px; 
	background-color: #5d649c;
}

.login .buton{
	background-color: #fffff;
	border: none;
	border-radius: 20px;
	padding: 16px 32px;
	margin: 4px 2px;
	cursor: pointer;
	font-size: 16px;
	font-family: "Georgia";
	font-color: #00000;
	-webkit-transition-duration: 0.4s; /* Safari */
	
}

.login .buton:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.login input[type=submit]{
	background-color: #e6e7e8;
	border: none;
	border-radius: 10px;
	padding: 10 px 20px;
	margin: 4px 2px;
	text-decoration: none;
	font-size: 16px;
	font-family: "Georgia";
	height: 30px;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}

.login input[type=submit]:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.login h1{
	font-size: 40px;
	font-family: "Copperplate";
	padding-bottom: 80px;
}

.utilizator{
	font-family: "Georgia";
	font-size: 20px;
	color: #fffff;
	text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
	background-color: #5d649c;
}

.register{
	text-align: center;
	padding-top: 20px;
	background-color: #5d649c;
	font-family: "Georgia";
}

.register h1{
	font-size: 150%;
	margin-bottom: 5px;
	font-family: "Georgia";
}

.register input[type=text], input[type=password], input[type=email], input[type=date]{
	background-color: #fffff;
	border: black;
	border-radius: 20px;
	padding: 10px 40px;
	text-decoration: none;
	margin: 1px 1px;
	cursor: pointer;
	font-size: 14px;
	font-family: "Georgia";
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}

.register input[type=submit]{
	background-color: #fffff;
	border: none;
	border-radius: 10px;
	padding: 10 px 20px;
	margin: 4px 2px;
	text-decoration: none;
	font-size: 16px;
	font-family: "Georgia";
	height: 30px;
	margin-top: 10px;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}

.register input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.register input[type=text]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.register input[type=password]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.register input[type=email]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.register input[type=date]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
</head>

<body>
	<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Hope </h1>
			<h2><?php echo $lang['cat1']?></h2> <!--ref luata de la categorii.php-->
		</span>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark" id="navbar"> <!--ref luate de la categorii.php-->
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
			<a class="navbar-brand" href="pagina-acasa.php"><?php echo $lang['cat2']?></a>   
			<a class="nav-item">
				<a class="nav-link" href="pagina-despre.php"><?php echo $lang['cat3']?></a>
			</a>
			<div class="dropdown">
				<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $lang['cat4']?>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="pagina-voluntari.php"><?php echo $lang['cat5']?></a>
					<a class="dropdown-item" href="pagina-doneaza.php"><?php echo $lang['cat6']?></a>
				</div>
			</div>
			<a class="nav-item">
				<a class="nav-link" href="categorii.php"><?php echo $lang['cat7']?></a>
			</a>
			<a class="nav-item">
				<a class="nav-link" href="pagina-contact.php"><?php echo $lang['cat8']?></a>
			</a>
			<a class="nav-item">
						<a class="nav-link" href="quiz.php">Quiz</a>
					</a>
			<a class="nav-item">
				<a class="nav-link" href="pagina-login.php"><i class="far fa-user"></i></a>
			</a>
		</div>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="pagina-login.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="pagina-login.php?lang=en"><?php echo $lang['cat10']?></a>
				</a>
</li>
<li class="nav-item">
				<a class="nav-item">
          <a class="nav-link"><i class="fas fa-question" onclick="myFunction()"></i></a> 
				</a>
</li>
			</ul>
		</div>
    </nav>
	<div class="login">
		<h1><?php echo $lang['pg_l0']?></h1>
		<form action="autentificare.php" method="post">
			<label for="username">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="username" placeholder="<?php echo $lang['pg_l1']?>" id="username" required class="buton">
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="<?php echo $lang['pg_l2']?>" id="password" required class="buton">
			<input type="submit" value="Login">
		</form>
	</div>
	<div class="utilizator"><?php echo $lang['pg_l3']?></a>
	<br><i class="fas fa-arrow-down"></i></br></div>
	<div class="register">
		<h1><?php echo $lang['pg_l4']?></h1>
		<form action="register.php" method="post" autocomplete="off">
			<br><input type="text" name="username" placeholder="<?php echo $lang['pg_l1']?>" id="username" ></br>
			<br><input type="password" name="password" placeholder="<?php echo $lang['pg_l2']?>" id="password" ></br>
			<br><input type="email" name="email" placeholder="<?php echo $lang['pg_l5']?>" id="email" ></br>
			<br><input type="text" name="telefon" placeholder="<?php echo $lang['pg_l6']?>" id="telefon" ></br>
			<br><input type="text" name="adresa" placeholder="<?php echo $lang['pg_l7']?>" id="adresa" ></br>
			<br><input type="text" name="oras" placeholder="<?php echo $lang['pg_l8']?>" id="oras" ></br>
			<br><input type="text" name="tara" placeholder="<?php echo $lang['pg_l9']?>" id="tara" ></br>
			<input type="submit" value="Creează cont">
		</form>
		<img src="catei.png" style="align: center">
	</div>
	<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}
</script>
</body>
</html>
