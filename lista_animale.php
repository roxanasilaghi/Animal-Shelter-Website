

<?php
include("Conectare.php");
include "Animale.php";


?>
<HTML lang="ro">
	<HEAD>
	<style>
a:hover{
	font-size: 20px;
}

h1{
	text-align: center;
	margin-top: 0px;
	font-family: "Georgia";
	font-size: 45;
	color: #3c3c7b;
}

form{
	text-align: center;
}

.text-box{
	border-radius: 8px;
	height: 25px;
}

.add{
	border-radius: 8px;
	height: 35px;
	font-family: "Georgia";
	font-size: 20px;
	background-color: #ff9999;
	color: #3c3c7b;
}

a{
	font-weight: bold;
	font-family: "Georgia";
	color: #3c3c7b;
	text-decoration: none;
}

a.visited{
	color: #3c3c7b;
	text-decoration: none;
}

.un{
	text-align: center; 
	font-family: "Georgia";
	font-size: 20px;
	color: #3c3c7b;
}

img{
	border-radius: 30px;
}

.nume{
	font-family: "Georgia";
	font-size: 30;	
}

.ct{
	padding-left: 70px;
	font-family: "Georgia";
	font-size: 30;	
}

.button {
  border-radius: 18px;
  background: linear-gradient(to right, #bfbfbf -37%, #ffffff 100%);
  border: none;
  color: #3c3c7b;
  text-align: center;
  font-size: 20px;
  font-family: "Georgia";
  font-weight: bold;
  padding: 20px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-right: 20px;
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
		<TITLE><?php echo $lang['cat12']?></TITLE>
		<!--<link href="style.css" type="text/css" rel="stylesheet"/>-->
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</HEAD>
	<BODY>
	<?php
		$Animale = new Animale();
		$tab_animal = $_GET['animal'];
		?>
		<div id="product-grid">
	 <h1><div class="txt-heading"><div class="txt-headinglabel"><?php echo ucwords($tab_animal);?></div></div></h1>
	 <div style="display: flex; flex-flow: row wrap">
		
		<?php
		$product_array = $Animale->getAnimale($tab_animal);
		if (! empty($product_array)) 
		{
			foreach ($product_array as $key => $value) 
			{
		 ?>
		 <div style="flex-flow: row wrap; flex: 50%; margin-top: 20px" class="product-item">
		 <form style="flex: 50%;">
			 <div style="flex-flow: row wrap;" class="product-image">
			 <img style="height: 200px" src="<?php echo $product_array[$key]["poza1"]; ?>">
			 </div>
			 <div style="flex-flow: row wrap;" class="product-image">
			 <br>
			 <a href="detalii-animale.php?animal=<?php echo $tab_animal?>&id=<?php echo $product_array[$key]["id"];?>"><?php echo $lang['l_a0']?></a>
			 </div>
			 <br>
			 <div class="nume">
			 <strong><?php echo $product_array[$key]["nume"];?></strong>
			 </div>
			 <div>
			 <br>
			 <a class="button" href="formular-adoptie.php"><span><?php echo $lang['l_a1']?></span></a></div>
		 </form>
		 </div>
		 <?php
		 }
		}
		?>
		 </div>
		</div>
		<br>
		<div style="text-align: center; margin: 40px 0px 80px 0px">
		<a class="button" style="font-size: 18" href="categorii.php"><span><?php echo $lang['l_a2']?></span></a>
		</div>
	</BODY>
</HTML>