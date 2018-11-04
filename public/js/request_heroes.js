$('#table_heroes').hide()


// Recuperando os dados dos heróis
$.getJSON("https://api.opendota.com/api/heroes", function (all_data) {
    all_data.forEach(data => {

        // Exibindo os dados de marca
        $('#heroes').append(`<option value="${data.id}">${data.localized_name}</option>`)
    })

})

$("#heroes").change(function () {

    $.getJSON("https://api.opendota.com/api/rankings?hero_id=" + $('#heroes').val()), function (all_data) {
        all_data.forEach(data => {
            alert(data)
            $('#table_heroes').show()
        });


    }
);

