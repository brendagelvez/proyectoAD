$(document).ready(function () {
    cargar();
    cargaru();

});

function cargaru() {

    var url = "../../BackEnd/index.php?mode=consTabla";

    //llama a la funcion ajax
    realizarAjax(url);

    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {

        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html

            success: function (response) {
                $("#cuerpo").html(response);
            }

        });
    }
}

function cargar() {

    var url = "../../BackEnd/index.php?mode=consTablaProd";

    //llama a la funcion ajax
    realizarAjax(url);

    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {

        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html

            success: function (response) {
                $("#cuerpoprod").html(response);
            }

        });
    }
}