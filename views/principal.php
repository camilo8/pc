<?php 
 use pc\Consult;
 require_once('../class/consult.php');
 $consult2 = new Consult();
 $result = $consult2->Consult1();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PC</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../fonts/style.css">
</head>
<body>
	<div class="container-fluid">
		     <div class="row  row-1">
				 <div class="admit col-4 col-xs-3">
					   <h4>AdminLTE</h4>
				 </div>
				 <div class="titulo col-8 col-xs-3">
					  <h4>Cañaverales-2018</h4>
				 </div>
			 </div>
		     <div class="row row-2">
				  <div class="username col-4 col-xs-3">
						<?php 
					     	session_start();
						  if(isset($_SESSION['u_nombre'])){
								  $nombre = $_SESSION['u_nombre'];
								echo	"<h4><span class='icon-user'> </span> ". $nombre."</h4>";
							}
						?>
				  </div>
				  <div class="titulo-principal col-8 col-xs-3">
					   <h4>PC Rental</h4>
					</div>
					<div class="close col-2">
					<?php 
								
								if(isset($_SESSION['u_nombre'])){
									?>
									<a href="../index.html">Cerrar session</a>
									<?php 
								}else{
									header("location:../index.html");
								}		
				        ?>
					</div>
			 </div>
			<div class="row">
					<div class="col-2 col-xs-2 col-sm-2  menu">
					  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Configurations</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Form </a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Students list</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Reported</a>
					  </div>
					</div>
					<div class="menu-1 col-2">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <span class="icon-cog"></span></a>
							<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="icon-profile"></span></a>
							<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="icon-stack"></span></a>
							<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span class="icon-warning"></span></a>
					        </div>
						</div>
					<div class="col-9 col-xs-11">
					  <div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							 <div class="container">
								  <div class="row">
									 <div class="form-1 col-4 col-xs-8 col-sm-8 col-lg-4" >
										 <div class="form-group">
											 <form action="../controllers/controllers-datos.php" method="GET" >
											 <label for="exampleFormControlInput1">Nombre</label>
											 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="Namepre">
											</div>
										</div>
										<div class="form-2 col-2  col-xs-8 col-sm-8 col-lg-2">
													 <div class="form-group">
														 <label for="exampleFormControlSelect1">Grado</label>
														 <select class="form-control" id="exampleFormControlSelect1" name="Grado">
															 <option value="3A">3A</option>
															 <option value="3B">3B</option>
															 <option value="4A">4A</option>
															 <option value="4B">4B</option>
															 <option value="5A">5A</option>
															 <option value="5B">5B</option>
															 <option value="6">6</option>
															 <option value="6">7</option>
															 <option value="6">8</option>
															 <option value="6">9</option>
															 <option value="6">10</option>
															 <option value="6">11</option>
														</select>
													</div>
										</div>
										<div class="form-2 col-2  col-xs-8 col-sm-8 col-lg-2">
													 <div class="form-group">
														 <label for="exampleFormControlSelect1">Portatil</label>
														 <select class="form-control" id="exampleFormControlSelect1" name="Portatil">
														 	 <option value="">Seleccionar</option>
															 <option value="1">1</option>
															 <option value="2">2</option>
															 <option value="3">3</option>
															 <option value="4">4</option>
															 <option value="5">5</option>
															 <option value="6">6</option>
															 <option value="7">7</option>
															 <option value="8">8</option>
															 <option value="9">9</option>
															 <option value="10">10</option>
															 <option value="11">11</option>
															 <option value="12">12</option>
															 <option value="13">13</option>
															 <option value="14">14</option>
															 <option value="15">15</option>
															 <option value="16">16</option>
															 <option value="17">17</option>
															 <option value="18">18</option>
															 <option value="19">19</option>
															 <option value="20">20</option>
															 <option value="21">21</option>
														</select>
													</div>
										</div>
												<div class="form-3 col-2  col-xs-8 col-sm-8 col-lg-2">
													<div class="form-group">
														<label for="exampleFormControlSelect1">Videobeam</label>
														<select class="form-control" id="exampleFormControlSelect1" name="Videobeam">
																<option value="">Seleccionar</option>
														  	<option value="1">1</option>
															 <option value="2">2</option>
															 <option value="3">3</option>
															 <option value="4">4</option>
															 <option value="5">5</option>
															 <option value="6">6</option>
															 <option value="7">7</option>
														</select>
													</div>
												</div>
												<div class="form-4 col-2  col-xs-8 col-sm-8  col-lg-2">
													<div class="form-group">
														<label for="exampleFormControlSelect1">Extenciones</label>
														<select class="form-control" id="exampleFormControlSelect1" name="Extenciones">
														<option value="">Seleccionar</option>
															 <option value="1">1</option>
															 <option value="2">2</option>
															 <option value="3">3</option>
															 <option value="4">4</option>
															 <option value="5">5</option>
															 <option value="6">6</option>
														</select>
													</div>
												</div>
												<div class="form-5 col-2  col-xs-8 col-sm-8 col-lg-2">
													<button type="submit" class="btn btn-primary">Entregar</button>
												</div>
											</form>
											</div>
									<div class="row tabla-1">
										  <div class="lsit-student col-12 ">
													<table class="table">
															<thead class="thead-dark">
																<tr>
																	<th scope="col">#</th>
																	<th scope="col">Fecha</th>
																	<th scope="col">Grado</th>
																	<th scope="col">Portatil</th>
																	<th scope="col">Videobeam</th>
																	<th scope="col">Extenciones</th>
																	<th scope="col">Nombre</th>
																	<th scope="col">H.I</th>
																	<th scope="col">H.F</th>
																	<th scope="col">VD</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																<?php 
																  foreach ($result as $value) {
																	?><th scope="row"><?php echo $value['Id'];?></th>
																	<td><?php echo $value['Fecha'];?></td>
																	<td><?php echo $value['Grado'];?></td>
																	<td><?php echo $value['Portatil'];?></td>
																	<td><?php echo $value['Videobeam'];?></td>
																	<td><?php echo $value['Extencion'];?></td>
																	<td><?php echo $value['NombreCompleto'];?></td>
																	<td><?php echo $value['HN'];?></td>
																	<td><?php echo $value['HF'];?></td>
																	<td><?php echo $value['VG'];?></td>
																</tr>
																	<?php }?>
															</tbody>
														</table>
											</div>
									</div>
							 </div>
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							    <div class="container">
										  <div class="row">
												   <div class="search col-10">
															<div class="form-group">
																	<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
																 </div>
													 </div>
													 <div class="icon-search1">
														    <span class="icon-search"></span>
													 </div>
											</div>
											<div class="list-table col-12">
													<table class="table">
															<thead class="thead-dark">
																<tr>
																	<th scope="col">#</th>
																	<th scope="col">Fecha</th>
																	<th scope="col">Grado</th>
																	<th scope="col">Portatil</th>
																	<th scope="col">Videobeam</th>
																	<th scope="col">Extenciones</th>
																	<th scope="col">H.I</th>
																	<th scope="col">H.F</th>
																	<th scope="col">VD</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Mark</td>
																	<td>Otto</td>
																	<td>@mdo </td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo 
                                                                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary icon-pencil" data-toggle="modal" data-target="#exampleModalCentert">
	
	  </button>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="exampleModalCentert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalCenterTitlet">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
					<div class="form-group">
							<label for="exampleFormControlInput1">Code User</label>
							<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
					 </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save changes</button>
			</div>
		  </div>
		</div>
	  </div>    
	  <button type="button" class="btn btn-danger icon-cross" data-toggle="modal" data-target="#exampleModalCenter">
		
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					  <div class="form-group">
							  <label for="exampleFormControlInput1">Code User</label>
							  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
					   </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			  </div>
			</div>
		  </div>
		</div>
																	</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>@fat </td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo </td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Larry</td>
																	<td>the Bird</td>
																	<td>@twitter</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																	<td>@mdo</td>
																</tr>
															</tbody>
														</table>
											</div>
									</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
						    <div class="container">
									 <div class="row">
										   <div class="reports col-8">
													<table class="table table-dark">
															<thead>
																<tr>
																	<th scope="col">#</th>
																	<th scope="col">Nombre</th>
																	<th scope="col">Portatil</th>
																	<th scope="col">VD</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Mark</td>
																	<td>Otto</td>
																	<td>@mdo 
																	   	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary icon-pencil" data-toggle="modal" data-target="#exampleModalCentere">
		
	  </button>
	  
	  <!-- Modal -->
	  <div class="modal fade" id="exampleModalCentere" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlee" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalCenterTitlee">Modal title</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
					<div class="form-group">
							<label for="exampleFormControlInput1">Code User</label>
							<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
					 </div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save</button>
			</div>
		  </div>
		</div>
	  </div>
	  <button type="button" class="btn btn-danger icon-cross" data-toggle="modal" data-target="#exampleModalCenterr">
		
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitler" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitler">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					  <div class="form-group">
							  <label for="exampleFormControlInput1">Code User</label>
							  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
					   </div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			  </div>
			</div>
		  </div>
		</div>
																 </td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>@fat </td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Larry</td>
																	<td>the Bird</td>
																	<td>@twitter </td>
																</tr>
															</tbody>
														</table>
											 </div>
									 </div>
								</div>
						</div>
					  </div>
								</div>
								<div class="row">
									 <div class="detalles col-2">
										<div class="portatiles col-1">
											 <span class="icon-laptop"> <p>5</p></span>
										</div>
										<div class="portatiles col-1">
												<span class="icon-video-camera"> <p>5</p></span>
										   </div>
										   <div class="portatiles col-1">
												<span class="icon-power"> <p>5</p></span>
										   </div>
									 </div>
								</div>
							</div>
						</div>								
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>