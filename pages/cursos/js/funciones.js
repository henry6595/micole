

function agregarcursos(curso,descripcion){

	cadena="curso=" + curso + 
			"&descripcion=" + descripcion;
        
	$.ajax({
		type:"POST",
		url:"php/agregarcursos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla_cursos').load('componentes/tabla_cursos.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

    d=datos.split('||');

	$('#idcurso_edt').val(d[0]);
        $('#cursoc').val(d[1]);
	$('#descripcionc').val(d[2]);
	
}

function actualizacursos(){


	idcurso_edt=$('#idcurso_edt').val();
	cursoc=$('#cursoc').val();
	descripcionc=$('#descripcionc').val();

	cadena= "&idcurso_edt=" + idcurso_edt + 
			"&cursoc=" + cursoc +
			"&descripcionc=" + descripcionc;
        
	$.ajax({
		type:"POST",
		url:"php/actualizacursos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_cursos').load('componentes/tabla_cursos.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoCurso(id){
	alertify.confirm('Eliminar curso', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}



function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla_cursos').load('componentes/tabla_cursos.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


