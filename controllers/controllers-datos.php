<?php 
use pc\Date;
if(isset($_GET)&& !empty($_GET)){
	require_once('../class/date.php');
	if(isset($_GET['Namepre'])){
	$grado = $_GET['Grado'];
	$portatil = $_GET['Portatil'];
	$extencion = $_GET['Extenciones'];
	$videobeam =$_GET['Videobeam'];
	$VD = "";   
	$nombre = $_GET['Namepre'];
	$HN = date("H:i:s");
	$HF = "";
	$fecha= date("Y-m-d");
		$dato1 = new Date();
		 $dato1->From($fecha,$grado,$portatil,$extencion,$videobeam,$nombre,$HN,$HF,$VD);
	 }
	  header('Location:../views/principal.php'); 
} 




?>