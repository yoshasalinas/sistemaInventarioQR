

function llenarModal_actualizar(datos) {
    d = datos.split('||');
    $("#id-edit").val(d[0]);
    $("#id-rol-edit").val(d[1]);
    $("#nombre-edit").val(d[2]);
    $("#aMaterno-edit").val(d[3]);
    $("#aPaterno-edit").val(d[4]);
    $("#rol-edit").val(d[1]);
    $("#nombreUsuario-edit").val(d[5]);
    $("#correo-edit").val(d[7]);
    $("#pass1").val(d[6]);
    $("#pass2").val(d[6]);
    
}