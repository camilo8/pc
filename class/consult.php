<?php
namespace pc; 
require_once('conexion.php');
class Consult{
	private $cone;
	public  $fecha;
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
	 public function Fecha($fecha){
		 $sql = "SELECT Id ,NombreCompleto , Portatil , VG FROM  alquilar WHERE (Fecha != :fecha) and (VG = '')";
		 $this->fecha = $fecha;
		 $query = $this->cone->prepare($sql);
		 $query->execute([
			 'fecha'=>$this->fecha
		 ]);
		 $result = $query->fetchALL(\PDO::FETCH_ASSOC);
		 return $result;
	 }
} 
?>