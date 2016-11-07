$('.btnAlquilar').click(function () {console.log('boton alquilar activado')
	idboton=$(this).attr('id');
	console.log('El id del boton presionado es: ' + idboton);

	$.ajax({
		type: 'POST',
		url: 'js1/funPhp.php',
		data: {'idInmueb': idboton}
	}).done(function(respuesta) {
		console.log(respuesta);
		$('#modalActualizado').find('#numID').text(idboton);
		$('#modalActualizado').modal('show');

	})
});
$('.btnDesalquilar').click(function () {
	idboton=$(this).attr('id');
	console.log('El id del boton presionado es: ' + idboton);

	$.ajax({
		type: 'POST',
		url: 'js1/funPhp1.php',
		data: {'idInmueb': idboton}
	}).done(function(respuesta) {
		console.log(respuesta);
		$('#modalActualizado1').find('#numID').text(idboton);
		$('#modalActualizado1').modal('show');

	})
});