<?php
namespace pc;
require_once('conexion.php');
class Date{
	/*atributos de form*/
 public $fecha;
 public $grado;
 public $nombre;
 public $HN;
 public $HF;
 public $VD;
 public $portatil ;             
 public $videobeam;
 public $extencion;
 private $cone;
 public $id = NULL;

public function __construct (){
	$this->cone = new Conexion();
}

/* fucntion from  */
public function From( $fecha, $grado,$portatil,$videobeam,$extencion, $nombre,$HN,$HF,$VD){
	$cone = new Conexion();
	$sql="INSERT INTO alquilar (id,Fecha,Grado, Portatil , Videobeam, Extencion , NombreCompleto,HN,HF,VG) VALUES(:id, :fecha,:grado ,:portatil,:videobeam,:extencion,:nombre,:HN,:HF,:VD)";
	$this->fecha = $fecha;
	$this->grado = $grado;
	$this->portatil = $portatil;
	$this->videobeam = $videobeam;
	$this->extencion = $extencion;
	$this->nombre = $nombre;
	$this->HN = $HN;
	$this->HF = $HF;
	$this->VD = $VD;
	$query = $this->cone->prepare($sql);
	$query->execute([
		 'id'=>$this->id,
		'fecha'=>$this->fecha,
		'grado'=> $this->grado,
		'portatil'=>$this->portatil,
		'videobeam'=>$this->videobeam,
		'extencion'=>$this->extencion,
		'nombre'=>$this->nombre,
		 'HN'=>$this->HN,
		 'HF'=>$this->HF,
		 'VD'=>$this->VD
	]);
	 
}
} 
?>