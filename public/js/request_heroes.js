$('#table_heroes').hide()



// Recuperando os dados das marcas dos veiculos
    $.getJSON("https://api.opendota.com/api/heroes", function (all_data) {
        all_data.forEach(data => {

            // Exibindo os dados de marca
            $('#heroes').append(`<option value="${data.id}">${data.localized_name}</option>`)
        })

    })

    $("#heroes").change(function () {
        $('#table_heroes').show()

    });


