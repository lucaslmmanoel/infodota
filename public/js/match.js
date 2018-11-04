// Recuperando os dados dos timer
$.getJSON("https://api.opendota.com/api/teams", function (all_data) {
    all_data.forEach(data => {

        // Exibindo os dados de marca
        $('#time1').append(`<option value="${data.team_id}">${data.name} <img src="${data.logo_url}" alt=""> </option>`)
        $('#time2').append(`<option value="${data.team_id}">${data.name} <img src="${data.logo_url}" alt=""> </option>`)
    })

})

