<?php 
use pc\User;
require_once('../class/user.php');
$user1 = new User();
if(isset($_POST) && !empty($_POST)){
	$user = $_POST['user'];
	$passwor = $_POST['passwor'];
		if(!empty($user) && !empty($passwor)){
			$result = $user1->Login($user,$passwor);
		}
}
 session_start();	
foreach($result as $datos){
	$user = $datos['User'];
	$passwor = $datos['Passwor'];
}

$var = count($result);
if($var == 1){
	 $_SESSION['u_user'];
	 $_SESSION['u_passwor'];
	 header('Location:../views/principal.php');
}else{
	 header('Location:../index.php?error=no');
}
?>