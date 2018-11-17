// Recuperando os dados dos timer
$.getJSON("https://api.opendota.com/api/teams", function (all_data) {

    all_data.forEach(data => {

        // Exibindo os dados de marca
        $('#time1').append(`<option value="${data.name}">${data.name}</option>`)
        $('#time2').append(`<option value="${data.name}">${data.name}</option>`)
    })

})

