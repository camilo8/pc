<?php 
use pc\User;
require_once('../class/user.php');
$user1 = new User();
if(isset($_POST) && !empty($_POST)){
	$user = $_POST['User'];
	$passwor = $_POST['Passwor'];
		if(!empty($user) && !empty($passwor)){
			$result = $user1->Login($user,$passwor);
		}
}
session_start();	
foreach($result as $datos){
	$nombre = $datos['NombreCompleto'];
	$user = $datos['User'];
}
$var = count($result);
if($var == 1){
$_SESSION['u_nombre'] = $nombre;
$_SESSION['u_user'] = $user;
$_SESSION['u_passwor'] = $passwor;
 header('Location:../views/principal.php');
}else{
  header('Location:../index.html?error=si');
}
?>