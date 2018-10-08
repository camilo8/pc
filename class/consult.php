<?php
namespace pc; 
require_once('conexion.php');
class Consult{
	private $cone;
	public function __construct (){
		$this->cone = new Conexion();
	}
	 public function Consult1(){
		  $sql = "SELECT *FROM alquilar";
		  $query = $this->cone->prepare($sql);
		  $query->execute();
		  $result = $query->fetchALL(\PDO::FETCH_ASSOC);
		  return $result;
	 }
} 
?>