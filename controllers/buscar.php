<?php 
namespace pc;
require_once('../class/conexion.php');
class Busqueda{
	 public $salida;
	 private $cone;

	 public function __construct(){
		 $this->cone = new Conexion();
	 }
	 public function  BuscarList(){
		$salida ="";
		 $sql = "SELECT *FROM alquilar ORDER BY Fecha";
		 if(isset($_POST['consulta'])){
			 $q = $this->cone->real_escape_string($_POST['consulta']);
			  $sql = "SELECT Fecha, Grado, Portatil,Extencion,Videobeam , NombreCompleto , HN , HF , VG FROM alquilar WHERE  Fecha LIKE '%".$q."%'
			   OR Grado LIKE '%".$q."%'OR NombreCompleto LIKE '%".$q."%'";
		 }
		 $query = $this->cone->prepare($sql);
		 $query->execute();
		 $result = $query->fetchALL(\PDO::FETCH_ASSOC);

		 if(count($result) > 0){
			 $salida.="<table class='table'>
			 <thead class='thead-dark'>
				 <tr>
					 <th scope='col'>#</th>
					 <th scope='col'>Fecha</th>
					 <th scope='col'>Grado</th>
					 <th scope='col'>Portatil</th>
					 <th scope='col'>Videobeam</th>
					 <th scope='col'>Extenciones</th>
					 <th scope='col'>Nombre</th>
					 <th scope='col'>H.F</th>
					 <th scope='col'>VD</th>
				 </tr>
			 </thead>"; 
			 foreach($result as $value){
				 $salida.="	<tr>
				 <th scope='row'>".$value['Id']."</th>
				 <td>".$value['Fecha']."</td>
				 <td>".$value['Grado']."</td>
				 <td>".$value['Portatil']." </td>
				 <td>".$value['Videobeam']."</td>
				 <td>".$value['Extencion']."</td>
				 <td>".$value['NombreCompleto']."</td>
				 <td>".$value['HF']."</td>
				 <td>".$value['VG']." 
					<!-- Button trigger modal -->
<button type='button' class='btn btn-primary icon-pencil' data-toggle='modal' data-target='#exampleModalCentert'>

</button>

<!-- Modal -->
<div class='modal fade' id='exampleModalCentert' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title' id='exampleModalCenterTitlet'>Modal title</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body'>
<div class='form-group'>
<label for=''>Code User</label>
<input type='password' class='form-control' id='5' placeholder=''>
</div>
</div>
<div class='modal-footer'>
<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
<button type='button' class='btn btn-primary'>Save changes</button>
</div>
</div>
</div>
</div>    
<button type='button' class='btn btn-danger icon-cross' data-toggle='modal' data-target='#exampleModalCenter'>

</button>

<!-- Modal -->
<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title' id='exampleModalCenterTitle'>Modal title</h5>
<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>
<div class='modal-body'>
<div class='form-group'>
<label for=''>Code User</label>
<input type='password' class='form-control' id='codeuser' placeholder=''>
</div>
</div>
<div class='modal-footer'>
<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
<button type='button' class='btn btn-primary'>Save</button>
</div>
</div>
</div>
</div>
				 </td>
			 </tr>";
			 }
			 $salida.="</tbody></table>";
		 }else{
			 $salida.="no hay datos";
		 }
		 echo $salida;
		
	 }
}

?>