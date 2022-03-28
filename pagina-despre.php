<?php
include "config.php";
?>

<html lang="ro">
    <head>
        <title>
        <?php echo $lang['pg_d0']?>
            </title>
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
                .despre
                {
                    background-color: #3c447c;
                    font-family: Georgia;
                }
                
                .despre .row
                {
                    box-sizing: border-box;
                }
                *, *:before, *:after 
                {
                    box-sizing: border-box;
                }
                
                .despre .column 
                {
                        float: left;
                        width: 33.3%;
                        margin-bottom: 16px;
                        padding: 0 8px;
                }
                
                .despre .card 
                {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                    margin: 8px;
                    border-width: 3px;
                    border-style: solid;
                    border-color: black;
                }
                
                .despre .about-section 
                {
                    padding: 50px;
                    text-align: center;
                    background-color: #c2186e;
                    color: white;
                }
                
                .despre .realiz-section 
                {
                    padding: 50px;
                    text-align: center;
                    background-color: #6cacbc;
                    color: black;
                }
                
                .despre .container 
                {
                    padding: 0 16px;
                    background-color: #5d649c;
                    
                }

                .despre .container::after, .row::after 
                {
                    content: "";
                    clear: both;
                    display: table;
                    
                }

                .despre .title 
                {
                    color: grey;
                }

                .despre .button 
                {
                    border: none;
                    outline: 0;
                    display: inline-block;
                    padding: 8px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                }

                .despre .button:hover 
                {
                    background-color: #404040;
                }

                @media screen and (max-width: 650px) 
                {
                    .column 
                    {
                        width: 100%;
                        display: block;
                    }
                }
            </style>

</head>
<body>
   <div class="nume">
		<span class="a"><img src="logo.png" class="logo"></span>
		<span class="a">
			<h1 class="titlu"> Hope </h1>
			<h2><?php echo $lang['cat1']?></h2> <!--ref luate de la categorii.php-->
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
					<a class="nav-link" href="pagina-despre.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="pagina-despre.php?lang=en"><?php echo $lang['cat10']?></a>
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
	<div class="despre">
		<div class="about-section" style="text-align:center;">
                <h1><?php echo $lang['pg_d0']?></h1></br/>
                <p><?php echo $lang['pg_d1']?> <i>Hope</i> <?php echo $lang['pg_d2']?></p>
                <img src="love.jpeg" alt="doglove" style="width:50%">
            </div>
            
            <div class="realiz-section" >
                <h1><?php echo $lang['pg_d3']?></h1></br/>
                <ul>
                    <li><?php echo $lang['pg_d4']?> </li>
                    <li><?php echo $lang['pg_d5']?> </li>
                    <li><?php echo $lang['pg_d6']?> </li>
                    <li><?php echo $lang['pg_d7']?></li>
                </ul>
                <img src="capt.png" alt="" style="width:50%">                
                </br/>
                </br/>
                <h3><?php echo $lang['pg_d8']?></h3></br/>
                <ul>
                    <li><?php echo $lang['pg_d9']?> </li>
                    <li><?php echo $lang['pg_d10']?> </li>
                    <li><?php echo $lang['pg_d11']?> </li>
                </ul>
                <img src="steriliz.jpg" alt="" style="width:50%">
            </div></br/>
            </br/>

            <h2 style="text-align:center"><?php echo $lang['pg_d12']?></h2>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="Andreea.jpg" alt="Andreea" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Andreea Neag</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                    <img src="Marian.jpg" alt="Marian" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Marian Mălinaș</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <img src="Alexandra.jpg" alt="Alexandra" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Alexandra Istrate</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <img src="Roxana.jpg" alt="Roxana" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Roxana Silaghi</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <img src="Paula.jpg" alt="Paula" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Paula Vilău</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card">
                    <img src="Daria.jpg" alt="Daria" style="width:auto; height: 400px;">
                        <div class="container">
                            <h2>Daria Serețan</h2>
                            <p><button class="button">Contact</button></p>
                        </div>
                    </div>
                </div>
            </div>

</div>
<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}
</script>
</body>
</html>