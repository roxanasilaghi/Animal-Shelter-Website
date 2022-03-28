<?php
include "config.php";
?>


<!doctype html>
<html lang="ro"> <!--lang="en"-->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
            <title><?php echo $lang['cat2']?></title> <!--folosit de la categorii.php-->
  </head>
  <body>
    <style>
      .carousel-item{
        height: 32rem;
        background: #777;
        color:white;
        position:relative;
      }
      .container{
        position:absolute;
        bottom:0;
        right:0;
        left:0;
        padding-bottom: 60px;
        padding-left: 50px;
      }
      .bubble{
        position:static;
        text-align: center;
        margin-top: 30px;
        padding-top: 10px;
        padding-bottom: 10px;
      }
      .divider{
        margin-left:10rem;
        margin-right: 10rem;
      }
      .row{
        --bs-gutter-x:1.5rem;
        --bs-gutter-y:0;
        display:flex;
        flex-wrap:wrap;
        margin-top: calc(var(--bs-gutter-y)*-1);
        margin-right: calc(var(--bs-gutter-x)*-.5);
        margin-left: calc(var(--bs-gutter-x)*-.5);
      }
      .description{
        flex: 0 0 auto;
        width:58.33333333%;
      }
      .desctitle{
        font-weight: 400;
        margin-top: 7rem;
        font-size: 50px;
        line-height: 1;
        letter-spacing: -.05rem;
        font-family: var(--bs-font-sans-serif);
        text-align: center;
        padding-bottom: 30px;
      }
      .text-muted{
        color:lightslategray;
      }
     .descdesc{
      font-size: 1.25rem;
      font-weight: 300;
      text-align:center;
     }
     .overlay-image {
       position:absolute;
       bottom:0;
        right:0;
        left:0;
        top:0;
        background-position: center;
        background-size: cover;
     }

    </style>
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
					<a class="nav-link" href="pagina-acasa.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="pagina-acasa.php?lang=en"><?php echo $lang['cat10']?></a>
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
    <div id = "myCarousel" class = "carousel slide" data-bs-ride = "carousel">
      <ol class = "carousel-indicators">
        <li data-bs-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
        <li data-bs-target = "#myCarousel" data-slide-to = "0"></li>
      </ol>
      <div class = "carousel-inner">
        <div class = "carousel-item active">
          <div class="overlay-image" style="background-image:url(slide-1.webp);"></div>
          <div class = "container">
            <h1 style="text-shadow: 2px 2px black; font-family: 'Georgia',Serif;color:#dbcbcb "><?php echo $lang['pg_a1']?></h1>
            <p style="text-shadow: 2px 0px black;font-family: 'Copperplate',Fantasy; "><?php echo $lang['pg_a2']?></p>
            <a href = "pagina-despre.php" class = "btn btn-lg btn-primary">
            <?php echo $lang['pg_a3']?>
            </a> 
          </div>
        </div>
        <div class = "carousel-item">
          <div class="overlay-image" style="background-image:url(slide-2.jpg);"></div>
          <div class = "container">
            <h1 style="text-shadow: 2px 2px black;font-family: 'Georgia',Serif;color:#dbcbcb"><?php echo $lang['pg_a4']?></h1>
            <p style="text-shadow: 2px 0px black;font-family: 'Copperplate',Fantasy; "><?php echo $lang['pg_a5']?></p>
            <a href = "pagina-contact.php" class = "btn btn-lg btn-primary">
            <?php echo $lang['pg_a6']?>
            </a> 
          </div>
        </div>
      </div>
      <a href = "#myCarousel" class = "carousel-control-prev" role = "button" data-slide = "prev">
        
        <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
      </a>
      <a href = "#myCarousel" class = "carousel-control-next" role = "button" data-slide = "next">
        
        <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
      </a>
    </div>
    <div class = "container bubble">
      <div class = "row">
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="dog.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc"><?php echo $lang['pg_a7']?></h2>
          <p style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a8']?></p>
          <p>
            <a class = "btn btn-secondary" href = "pagina-doneaza.php" style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a9']?></a>
          </p>
        </div>
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="rabbit.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc"><?php echo $lang['pg_a10']?></h2>
          <p style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a11']?></p>
          <p>
            <a class = "btn btn-secondary" href = "categorii.php" style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a12']?></a>
          </p>
        </div>
        <div class = "col-lg-4">
          <!--
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777"></rect>
            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
        -->
        <img style="border-radius: 50%; width:140px; height:140px" src="cat.jpg">
          <h2 style="font-family: 'Georgia',Serif; color:#6cacbc"><?php echo $lang['pg_a13']?></h2>
          <p style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a14']?></p>
          <p>
            <a class = "btn btn-secondary" href = "pagina-voluntari.php" style="font-family: 'Copperplate',Fantasy;"><?php echo $lang['pg_a15']?></a>
          </p>
        </div>
      </div>
    </div>
    <hr class = "divider">
    <div class = "content row">
      <div class = "description">
        <h2 class = "desctitle" style="font-family: 'Georgia',Serif;color:#c2186e">Robi
        <span class = "text-muted" style="font-family: 'Georgia',Serif;">, <?php echo $lang['pg_a16']?></span>
        </h2>
        <p class = "descdesc" style="margin-left: 10px; margin-right: 10px; font-family: 'Copperplate',Fantasy;color:#3c3c7b;"><?php echo $lang['pg_a17']?>
        </p>
      </div>
      <div class = "image">
        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee"></rect>
          <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>
      -->
      <img style=" width:500px; height:500px" src="robi.jpg">
      </div>
    </div>
    <hr class = "divider">
    <div class = "content row">
      <div class = "description">
        <h2 class = "desctitle" style="font-family: 'Georgia',Serif;color:#c2186e">Lola
        <span class = "text-muted" style="font-family: 'Georgia',Serif;">, <?php echo $lang['pg_a18']?></span>
        </h2>
        <p class = "descdesc" style="margin-left: 10px; margin-right: 10px; font-family: 'Copperplate',Fantasy; color:#3c3c7b;"><?php echo $lang['pg_a19']?>
        </p>
      </div>
      <div class = "image">
        <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#eee"></rect>
          <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
        </svg>
      -->
      <img style=" width:500px; height:500px" src="lola.webp">
      </div>
    </div>
    <hr class = "divider">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<script>
function myFunction() {
  alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}
</script>
  </body>
</html>
