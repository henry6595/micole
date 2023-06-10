var manageProductTable;

//funcion para filtrar los select
function myPillFilter(col, id) {
    var data = document.getElementById(id).value;
    manageProductTable.columns(col).search(data).draw();

}


$(document).ready(function () {

    manageProductTable = $('#manageProductTable').DataTable({
        dom: 'Blrtip',
        'ajax': 'componentes/php/consultar_administrativos.php',
        "buttons": [
            {extend: 'excel',
                exportOptions: {
                    columns: [1, 2, 3, 4, 5, 6, 7]
                },
                filename: 'Usuarios'
            }
        ]

    });

    $("#borrarFiltro").click(function () {
        location.reload();
    });

//funcion para filtrar los input
    $('#inputName').on('keyup', function () {
        manageProductTable.column(1).search(this.value).draw();
    });
    //funcion para filtrar los input
    $('#inputape').on('keyup', function () {
        manageProductTable.column(2).search(this.value).draw();
    });
}); // document.ready fucntion


//funcion editar producto
function editUser(userId = null) {
    if (userId) {
        $("#userId").remove();
        // remove text-error 
        $(".text-danger").remove();
        // remove from-group error
        $(".form-group").removeClass('has-error').removeClass('has-success');
        // modal spinner
        $('.div-loading').removeClass('div-hide');
        // modal div
        $('.div-result').addClass('div-hide');

        $.ajax({
            url: 'componentes/php/seleccionar_administrativos.php',
            type: 'post',
            data: {userId: userId},
            dataType: 'json',
            success: function (response) {
                // modal spinner
                $('.div-loading').addClass('div-hide');
                // modal div
                $('.div-result').removeClass('div-hide');
                // footer
                $(".editUserFooter").append('<input type="hidden" name="userId" id="userId" value="' + response.id + '" />');
                $("#editRol").val(response.rol);
                $("#editCelular").val(response.celular);
                $("#editTelefono").val(response.telefono);
                $("#editDNI").val(response.dni);
                $("#editDireccion").val(response.direccion);
                $("#editName").val(response.nombres);
                $("#editApellido").val(response.apellidos);

                $("#editStatus").val(response.situacion);
                $("#editCorreo").val(response.email);


                $("#editUserForm").on('submit').bind('submit', function () {
                    $('#edit-user-messages').empty();
                    $("#editUserBtn").button('reset');
                    var form = $(this);
                    var formData = new FormData(this);

                    $.ajax({
                        url: form.attr('action'),
                        type: form.attr('method'),
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            console.log(response);
                            $("#edit-user-messages").html('<div class="alert alert-success">' +
                                    '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                    '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                    '</div>');

                            // remove the mesages
                            $(".alert-success").delay(500).show(10, function () {
                                $(this).delay(3000).hide(10, function () {
                                    $(this).remove();
                                });
                            }); // /.alert

                            manageProductTable.ajax.reload(null, true);
                        } // /success function
                    }); // /ajax function

                    return false;
                }); // update the product data functio
            } // /success function
        }); // /ajax to fetch product image


    } else {
        alert('error please refresh the page');
}
} // /edit product function

// remove product 
function removeUser(userId = null) {
    if (userId) {
        // remove product button clicked
        $("#removeUserBtn").unbind('click').bind('click', function () {
            // loading remove button
            $("#removeUserBtn").button('loading');
            $.ajax({
                url: 'componentes/php/bloquear_administrativos.php',
                type: 'post',
                data: {userId: userId},
                dataType: 'json',
                success: function (response) {
                    // loading remove button
                    $("#removeUserBtn").button('reset');
                    if (response.success == true) {
                        // remove product modal
                        $("#removeUserModal").modal('hide');

                        // update the product table
                        manageProductTable.ajax.reload(null, false);

                        // remove success messages
                        $(".remove-messages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');

                        // remove the mesages
                        $(".alert-success").delay(500).show(10, function () {
                            $(this).delay(3000).hide(10, function () {
                                $(this).remove();
                            });
                        }); // /.alert
                    } else {

                        // remove success messages
                        $(".removeUserMessages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');



                    } // /error
                } // /success function
            }); // /ajax fucntion to remove the product
            return false;
        }); // /remove product btn clicked
    } // /if productid
} // /remove product function

// DESBLOQUEAR product 
function inremoveUser(userId = null) {
    if (userId) {
        // remove product button clicked
        $("#inremoveUserBtn").unbind('click').bind('click', function () {
            // loading remove button
            $("#inremoveUserBtn").button('loading');
            $.ajax({
                url: 'componentes/php/desbloquear_administrativos.php',
                type: 'post',
                data: {userId: userId},
                dataType: 'json',
                success: function (response) {
                    // loading remove button
                    $("#inremoveUserBtn").button('reset');
                    if (response.success == true) {
                        // remove product modal
                        $("#inremoveUserModal").modal('hide');

                        // update the product table
                        manageProductTable.ajax.reload(null, false);

                        // remove success messages
                        $(".remove-messages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');

                        // remove the mesages
                        $(".alert-success").delay(500).show(10, function () {
                            $(this).delay(3000).hide(10, function () {
                                $(this).remove();
                            });
                        }); // /.alert
                    } else {

                        // remove success messages
                        $(".removeUserMessages").html('<div class="alert alert-success">' +
                                '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                                '</div>');



                    } // /error
                } // /success function
            }); // /ajax fucntion to remove the product
            return false;
        }); // /remove product btn clicked
    } // /if productid
} // /remove product function



$('#guardarnuevo').click(function () {
    newpassword = $('#newpassword').val();
    newName = $('#newName').val();
    newApellido = $('#newApellido').val();
    newpassword2 = $('#newpassword2').val();
    newCorreo = $('#newCorreo').val();
    newDNI = $('#newDNI').val();
    newrol = $('#newrol').val();
    newfechanacimiento = $('#newfechanacimiento').val();
    newCelular = $('#newCelular').val();
    newTelefono = $('#newTelefono').val();
    newDireccion = $('#newDireccion').val();
    console.log(newDireccion);
});


 