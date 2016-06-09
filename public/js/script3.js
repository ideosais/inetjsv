$(document).on('click','.pagination a',function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "/usuario";

	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$(".users").html(data);
		}
	});
});

// Datos de la prueba de envio Ajax

function fecha_mysql(fecha)
{
	var dia = fecha.substr(0,2);
	var mes = fecha.substr(3,2);
	var ano = fecha.substr(6,4);

	fmysql = ano + '/' + mes + '/' + dia;

	return fmysql;
}

$(document).ready(function(){
	$("#alta_activo").click(function(e){
		e.preventDefault();
		var route = "/activo";
		var token = $("#token").val();
		var fcompra = $("#fecha_compra").val();
		var fecha_compra = fecha_mysql(fcompra);
		var alive = 0;
		if($("#alive").is(':checked')) alive = 1; else alive = 0;

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'POST',
			dataType: 'json',
			data: {
				nombre: $("#nombre").val(),
				m_delegacion_id: $("#m_delegacion_id").val(),
				m_empresa_id: $("#m_empresa_id").val(),
				m_resp_mtmo_id: $("#m_resp_mtmo_id").val(),
				valor_compra:  $("#valor_compra").val(),
				fecha_compra: fecha_compra,
				alive: alive,
				descripcion: $("#descripcion").val(),
			},

			success:function(){
				$("#msj-success").fadeIn();
			},
			error:function(msj){
				$("#msj").html(msj.responseJSON.activo);
				$("#msj-error").fadeIn();
			}

		});
	});
});
