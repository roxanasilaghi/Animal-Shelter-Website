
<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="ro">

	<head>
		<title><?php echo $lang['q0']?></title>
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
h1 {
  padding-top: 10px;
  padding-bottom: 5px;
  font-size: 50px;
  font-weight: 100;
  text-align: center;
  font-family: "Georgia";
  color: #3c3c7b;
}

ul {
width: 620px;
margin-left: 570px;
margin-top: 40px;
  
  li {
    float: left;
    list-style: none;
    margin-right: 10px;
    position: relative;
    } 
    
  }
.decoration:hover {
 background-color: #3c447c;
 color: white;
}
.decoration {
    max-weight:100px;
	border-width:5px;  
    border-style:groove;
	border-radius: 25px;
    border: 2px solid #c2186e;
    padding:1px;
    width: 150px;;
    height: 35px;
}
.txt {
 font-family: "Georgia"
 padding-top: 100px; 
}
body {
  background-color: #dbcbcb;
}
p{
	font-align: center;
	font-family: Georgia;
}
.fresult {
 font-size:50px;
 padding-left:440px;
 font-family:"Copperplate"
}
.dbutton {
 background: #c2186e;
 margin-left:600px;
 border-radius: 20px;
 height: 50px;
 margin-bottom: 30px; 
}
.dbutton:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.aa {
margin-bottom :20px;
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
					<a class="nav-link" href="quiz.php?lang=ro"><?php echo $lang['cat9']?></a>
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-item">
					<a class="nav-link" href="quiz.php?lang=en"><?php echo $lang['cat10']?></a>
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
	<br>
	<h1 ><?php echo $lang['q0']?></h1>
<ul>

		<div class ="aa">
		<p id="result" class="txt"><?php echo $lang['q1']?></p>
		 <select id="activity" class="decoration">
		<li><option value="a1">Jogging</option></li>
		<li><option value="a1" selected><?php echo $lang['q2']?></option></li>
		<li><option value="a3"><?php echo $lang['q3']?></option></li>
		<li><option value="a4"><?php echo $lang['q4']?></option></li>
		</select>
		</div>
		
		<div class ="aa">
		<p id="result2" class="txt"><?php echo $lang['q5']?></p>
		<select id="personality" class="decoration">
			<option value="p1"><?php echo $lang['q6']?></option>
			<option value="p2" selected><?php echo $lang['q7']?></option>
		</select>
		</div>
		
		<div class ="aa">
		<p id="hoursresult" class="txt"><?php echo $lang['q8']?></p>
		
		<select id="hours" class="decoration">
			<option value="h1">2-4</option>
			<option value="h2" selected>5-7</option>
			<option value="h3">7-9</option>
			<option value="h4">> 10</option>
		</select>
		</div>
		
		<div class ="aa">
		<p id="relaxresult" class="txt"><?php echo $lang['q9']?></p>
		
		<select id="relax" class="decoration">
			<option value="r1"><?php echo $lang['q10']?></option>
			<option value="r2" selected><?php echo $lang['q11']?></option>
			<option value="r3"><?php echo $lang['q12']?></option>
			<option value="r4"><?php echo $lang['q13']?></option>
		</select>
		</div>
		
	</ul>	
		<p id="finalresult" class="fresult"><p>
	
		<script>

			

	    function GetSelectedText(){
	    var e = document.getElementById("activity");
		var result = e.options[e.selectedIndex].text;
		var e2 = document.getElementById("personality")
		var result2 = e2.options[e2.selectedIndex].text;
		var e3 = document.getElementById("hours")
		var result3 = e3.options[e3.selectedIndex].text;
		var e4 = document.getElementById("relax")
		var result4 = e4.options[e4.selectedIndex].text;
		if (result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("O plimbare in parc")==0 ||
			result.localeCompare("Jogging")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("O plimbare in parc")==0 
		   ) 
				{document.getElementById("finalresult").innerHTML = '<?php echo $lang['q14']?>';}
		   
		   else {
				   if(result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Un film/o carte")==0 ||
					result.localeCompare("Dansul")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Un film/o carte")==0
					   )
							{document.getElementById("finalresult").innerHTML = '<?php echo $lang['q15']?>';   
							}
					
				 else {
						if( result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa stau pur si simplu")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa stau pur si simplu")==0
						)
								{document.getElementById("finalresult").innerHTML = '<?php echo $lang['q16']?>';  }
						else {
						if( result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Introvertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("2-4")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("5-7")==0 && result4.localeCompare("Sa ascult muzica")==0 ||
							result.localeCompare("Bicicleta de slabit")==0 && result2.localeCompare("Extrovertita")==0&& result3.localeCompare("7-9")==0 && result4.localeCompare("Sa ascult muzica")==0
						)
							{document.getElementById("finalresult").innerHTML = '<?php echo $lang['q17']?>';  }
						else {document.getElementById("finalresult").innerHTML = '<?php echo $lang['q18']?>';}
						}
					}
				}
		
				
			}
$("li").mouseover(function(){
 $(this).find('.drop-down').slideDown(300);
 $(this).find(".accent").addClass("animate");
 $(this).find(".item").css("color","#FFF");
}).mouseleave(function(){
  $(this).find(".drop-down").slideUp(300);
   $(this).find(".accent").removeClass("animate");
   $(this).find(".item").css("color","#000");
});

function myFunction() {
  alert("HELP! \n 1. Pagina Acasă afișează ultimele noutăți legate de centrul nostru de adopție. \n 2. Pagina Despre noi” conține informații despre istoricul și misiunea noastră. \n 3. Dacă doriți să ne ajutați o puteți face prin două metode: donând bani pentru a putea acoperi diferite costuri pentru întreținerea animalelor sau implicându-vă chiar dumneavoastră și devenind voluntar. \n a) pentru a putea dona trebuie să faceți click pe ,,Cum pot să ajut?”, iar din meniul apărut faceți click pe ,,Donează”, acest lucru va deschide pagina donează, care conține toate informațiile necesare pentru a face o donație. \n b) pentru a deveni voluntar, din același meniu, selectați ,,Alătură-te voluntarilor” care va deschide pagina pentru voluntari. \n Această pagină cuprinde toate informațiile legate de completarea cererilorde voluntariat, precum și responsabilitățile ce revin voluntarilor. \n 4. Dacă doriți să vedeți ce animăluțe se află în grija noastră, selectați ,,Adoptă” din bara de meniu. Aici puteți selecta dintre categoriile de animale pe care le adăpostim făcând un click pe numele categoriei. \n 5. Dacă doriți să adoptați un animăluț, tot din pagina de vizualizare faceți click pe butonul ,,Adoptă”, care va merge pe formularul ce trebuie completat pentru a începe procesul de adopție. \n 6.	Dacă aveți alte întrebări sau nelămuriri, ne puteți contacta prin intermediul numărului de telefon din subsolul paginii ,,Contact” sau completând formularul de pe aceeași pagina. Echipa noastră va citi mesajele și vă va răspunde cât de repede se poate. \n 7.	Există și posibilitatea de logare sau creare cont, accesând iconița de pe bara de meniu. Astfel, vă putem ține la curent cu activitatea noastră.");
}

		</script>

		<br/>
		<button type="button" onclick="GetSelectedText()" class="dbutton"><?php echo $lang['q19']?></button>
</body>
<html>