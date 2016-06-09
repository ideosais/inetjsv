$("#alta_activo").click(function(){
    var dato = $("#activo").val();
    var route = "/activo";
    var token = $("#token").val();
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data: {activo: dato},

        success:function(){
            $("#msj-success").fadeIn();
        },
        error:function(msj){
            $("#msj").html(msj.responseJSON.activo);
            $("#msj-error").fadeIn();
        }
    });
});