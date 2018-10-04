<?php
namespace pc;
require_once('conexion.php');
class User{
	/*atributos de login */
	private $user;
	private $passwor; 
	private $cone;

	/*funcion de conexion*/
	public function __construct(){
		$this->cone = new Conexion();
	}
	/*funcion login*/
	public function Login($user,$passwor){
		 $sql = "SELECT * FROM usuario WHERE User = :user  AND Contrasena = :passwor";	
		 $this->user = $user;
		 $this->passwor = $passwor;
		 $query = $this->cone->prepare($sql);
		 $query->execute([
			'user'=>$this->codigo,
			'passwor'=>$this->passwor
		 ]);
	}
}
?>