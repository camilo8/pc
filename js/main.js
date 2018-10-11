$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
	   url:'../controllers/buscar1.php',
	   type: 'POST',
	   dataType: 'html',
	   data: {consulta: consulta},

	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
		console.log("yes");
	})
	.fail(function(){
        console.log("error");
	})

}
$(document).on('keyup','#caja_busqueda',function(){
   var value = $('#caja_busqueda').val();
   if(value != "") {
	buscar_datos(value);
   }else{
	buscar_datos();
   }
});