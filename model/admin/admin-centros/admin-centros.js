$(document).ready(function () {

    /*
     $("#ver").click(function () {
     idver = $("#id").val();
     });
     if (idver !== "") {
     url = 'GospoAPI/centros/' + idver;
     } else {
     
     }
     */

/* ====================== VER CENTROS ============================*/
    url = '../../vendor/GospoAPI/centros';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function (json) {
            var resultado = "";
            for (i = 0; i < json.length; i++) {
                resultado += "<tr><td>" + json[i].id_centro + "</td>" + "<td>" + json[i].nombre + "</td>" + "<td>" + json[i].telefono + "</td>" + "<td>" + json[i].email + "</td>" + "<td>" + json[i].direccion + "</td>" + "<td>" + json[i].municipio + "</td>" + "<td>" + json[i].provincia + "</td>" + "<td>" + json[i].pais + "</td></tr>";
            }
            $("#center-table").html(resultado);

        },
        error: function (error) {
            alert(error.responseText);
        }
    });
    
    
    $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?address=C/Dolores Ibarruri,Mislata,Valencia,España&key=AIzaSyBiTt0JoSwwww7v-t8xbt_40Ph6MvxeTMY", function (data){
        console.log(data.results[0].geometry.location.lat);
        console.log(data.results[0].geometry.location.lng);
    });
});