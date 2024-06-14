function practica() {

    var practicaInput = $('#practicaId')

    console.log(practicaInput.val());

    practicaInput.val('aaaaaaaa')
}

function prueba() {

    var pruebaInput = $('#pruebaId')

    console.log(pruebaInput.val());

    pruebaInput.val('bbbbbbb')

}

function sobreescribir() {
    
    var sobreescribirInput = $('#input')

    console.log(sobreescribirInput.val());

    sobreescribirInput.val('sobre')

    document.getElementById("input").addEventListener("keyup", function() {
 
    document.getElementById("input2").value = document.getElementById("input").value;
   });

}

function digitador() {

    $('#input2').val($('#input').val())

}

function mouse(color, num) {

    if(color) {
        
        $('.circulo' + num).css("background-color", "#3B4480");
        $('.circulo' + num).css("border", "solid 4px #12AA9E");
        $('.icono' + num).css("-webkit-filter", "grayscale(100%)");
        $('.texto' + num).css("color", "#12AA9E");
    }else{
        $('.circulo' + num).css("background-color", "transparent");
        $('.circulo' + num).css("border", "solid 3px #3B4480");
        $('.icono' + num).css("-webkit-filter", "grayscale(0%)");
        $('.texto' + num).css("color", "#3B4480");
    }
    
}

function mouse(color, num) {

    if(color) {
        
        $('.circulo' + num).css("background-color", "#3B4480");
        $('.circulo' + num).css("border", "solid 4px #12AA9E");
        $('.icono' + num).css("-webkit-filter", "grayscale(100%)");
        $('.texto' + num).css("color", "#12AA9E");
    }else{
        $('.circulo' + num).css("background-color", "transparent");
        $('.circulo' + num).css("border", "solid 3px #3B4480");
        $('.icono' + num).css("-webkit-filter", "grayscale(0%)");
        $('.texto' + num).css("color", "#3B4480");
    }
    
}

function creacion(url) {

    var input = $('#practicaId')
    var token = $('input[name=_token]').val();

    console.log(input.val());

    $.ajax({
        type: 'POST',
        url: url,
        headers: {'X-CSRF-TOKEN': token},
        data: {prueba:input.val()},
        success: function(data) {

            $('#tabla').empty()

            console.log(data)

            var tr;

          for (i = 0; i < data.length; i++) {
            
            tr +=   `<tr>
                        <td>${data[i]['id']}</td>
                        <td>${data[i]['name']}</td>
                        <td>vacio</td>
                    </tr>`

          }

          $('#tabla').append(tr)


        },
        error: function(data) {
            console.log(data);
        }
    });
    
}