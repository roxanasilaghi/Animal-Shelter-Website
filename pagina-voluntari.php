<?php
include "config.php";
?>

<html lang="ro">
<head>
<title><?php echo $lang['cat5']?></title>
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
            <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="stil.css"/>
<style>
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
					<a class="nav-link" href="pagina-voluntari.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="pagina-voluntari.php?lang=en"><?php echo $lang['cat10']?></a>
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

<div style="background-color:#ddcecc">
	<div>
		<div>
			<div>
				<div>
					<div class="container">
						<div>
							<div>
								<div style="padding-top:10px;padding-bottom:10px;margin-left:0;margin-right:0;text-align:center"></div>
							</div>
							<h2 style="text-align:center;font-size:100px;font-family:Copperplate;color:#5040ae"><strong><?php echo $lang['cat1']?></strong></h2><br><br>
							<span style='display: table;width:350px;position:relative;float:left;max-width:100%;clear:left;margin-top:0px;padding-right:7px;padding-top:7px;'>
								<a><img src="voluntar2.jpg" style="margin-top: 5px; margin-bottom: 10px; margin-left: 0px; margin-right: 10px; border-width:0px;padding:0px; max-width:100%" alt="Picture"/></a>
							</span>
<div class="paragraph" style="display:block; padding-left:0%; text-align: justify; font-family:Georgia"><strong><font size="4"><?php echo $lang['pg_v0']?> <font color="#8d2424"><?php echo $lang['pg_v1']?></font> <?php echo $lang['pg_v2']?> <br />
<br /><?php echo $lang['pg_v3']?><br><br>
<div style="padding:50px"><ul>
	<li><?php echo $lang['pg_v4']?></li>
	<li><?php echo $lang['pg_v5']?> </li>
	<li><?php echo $lang['pg_v6']?></li>
	<li><?php echo $lang['pg_v7']?></li>
	<li><?php echo $lang['pg_v8']?>​</li>
	<li><?php echo $lang['pg_v9']?> </li>
</ul></div>
<?php echo $lang['pg_v10']?></font></strong><br /><br /></div>
<hr style="width:100%;clear:both;visibility:hidden;"></hr>

<div><div style="padding-top:10px;padding-bottom:10px;margin-left:0px;margin-right:0px;text-align:center">
<img src="caine.jpg" alt="Picture" style="width:auto;max-width:100%" />
<div style="display:block;font-size:90%"></div>
</div></div>

<div><div style="height: 20px; overflow: hidden; width: 100%;"></div>
<hr class="styled-hr" style="width:100%;"></hr>
<div style="height: 20px; overflow: hidden; width: 100%;"></div></div>

<div style="text-align:left;font-family:Copperplate;color:#24678d"><h1 style="text-align:center"><?php echo $lang['pg_v11']?></h1>
	<ul style="font-family:Georgia">
		<li><font-size="4"><?php echo $lang['pg_v12']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v13']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v14']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v15']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v16']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v17']?></font></li>
		<li><font-size="4"><?php echo $lang['pg_v18']?></font></li>
	</ul>
</div>
			</div>
		</div>
				</div>

	</div>
</div>

</div>
<br>
		<center><button style="background-color:#e0e0e0;border:black;border-radius:20px;padding:10px 10px;width:150px;margin: 1px 1px;cursor:pointer;font-size:17px;border-radius=15px;font-family:Copperplate" onclick="document.location='register-voluntari.php'"><?php echo $lang['pg_v19']?></button></center>
			<br>
			<br>
			</div>
			<script>
	function myFunction() {
	alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}
</script>	
</body>
</html>