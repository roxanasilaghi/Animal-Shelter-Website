<?php
include "config.php";
?>

<html lang="ro">
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
            <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
			<link rel="stylesheet" href="stil.css"/>
			<title><?php echo $lang['cat0']?></title>
			<div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Hope </h1>
			<h2><?php echo $lang['cat1']?></h2>
		</span>
	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark" id="navbar">
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
						<a class="nav-link" href="quiz.html">Quiz</a>
					</a>
			<a class="nav-item">
				<a class="nav-link" href="pagina-login.php"><i class="far fa-user"></i></a>
			</a>
		</div>
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="categorii.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="categorii.php?lang=en"><?php echo $lang['cat10']?></a>
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
	
<style> 
a:hover{
	font-size: 34;
}

a{
	font-weight: normal;
	font-family: "Courier New";
	color: black;
	text-decoration: none;
}

#panel{
	padding-left: 70px;
	font-size: 30;
}

#flip{
	background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
}

h1{
	text-align: center;
	margin-top: 30px;
	font-family: "Courier New";
	font-size: 45;
}

body{
	font-family: "Courier New";
}

h1{
	margin-top: 0px;
}
.imagestyle{

	
}
</style>
</head>
<body class ="imagestyle" style="background-image: url('catanddog.jpg');  background-size: cover; background-repeat:no-repeat; ">
  <div >
	
	<h1 id="flip" style="text-align: left; padding-left: 70px; font-size: 35;"><?php echo $lang['cat11']?></h1>
		<div id="panel" class="ct">
			<a href="lista_animale.php?animal=caini"><?php echo $lang['cat12']?></a>
			<br>
			<a href="lista_animale.php?animal=pisici"><?php echo $lang['cat13']?></a>
			<br>
			<a href="lista_animale.php?animal=hamsteri"><?php echo $lang['cat14']?></a>
			<br>
			<a href="lista_animale.php?animal=papagali"><?php echo $lang['cat15']?></a>
			
		</div>
	</div>
	<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acas?? afi??eaz?? ultimele nout????i legate de centrul nostru de adop??ie. \n 2. Pagina Despre noi??? con??ine informa??ii despre istoricul ??i misiunea noastr??. \n 3. Dac?? dori??i s?? ne ajuta??i o pute??i face prin dou?? metode: don??nd bani pentru a putea acoperi diferite costuri pentru ??ntre??inerea animalelor sau implic??ndu-v?? chiar dumneavoastr?? ??i devenind voluntar. \n a) pentru a putea dona trebuie s?? face??i click pe ,,Cum pot s?? ajut????, iar din meniul ap??rut face??i click pe ,,Doneaz?????, acest lucru va deschide pagina doneaz??, care con??ine toate informa??iile necesare pentru a face o dona??ie. \n b) pentru a deveni voluntar, din acela??i meniu, selecta??i ,,Al??tur??-te voluntarilor??? care va deschide pagina pentru voluntari. \n Aceast?? pagin?? cuprinde toate informa??iile legate de completarea cererilorde voluntariat, precum ??i responsabilit????ile ce revin voluntarilor. \n 4. Dac?? dori??i s?? vede??i ce anim??lu??e se afl?? ??n grija noastr??, selecta??i ,,Adopt????? din bara de meniu. Aici pute??i selecta dintre categoriile de animale pe care le ad??postim f??c??nd un click pe numele categoriei. \n 5. Dac?? dori??i s?? adopta??i un anim??lu??, tot din pagina de vizualizare face??i click pe butonul ,,Adopt?????, care va merge pe formularul ce trebuie completat pentru a ??ncepe procesul de adop??ie. \n 6.	Dac?? ave??i alte ??ntreb??ri sau nel??muriri, ne pute??i contacta prin intermediul num??rului de telefon din subsolul paginii ,,Contact??? sau complet??nd formularul de pe aceea??i pagina. Echipa noastr?? va citi mesajele ??i v?? va r??spunde c??t de repede se poate. \n 7.	Exist?? ??i posibilitatea de logare sau creare cont, acces??nd iconi??a de pe bara de meniu. Astfel, v?? putem ??ine la curent cu activitatea noastr??.");
}
</script>
		</body>
</html>