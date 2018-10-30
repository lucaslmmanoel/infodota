// Carrega após a página ter carregado
$(document).ready(function (){

    $('#table_leagues').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
});

