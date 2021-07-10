$(document).ready(function() {
    $('#data_payment').DataTable( {
        sDom: 'Brtip',
        buttons: [
            'pdf'
        ],
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "aaSorting": false,
        "bInfo": false,
        "bAutoWidth": false,
    } );
} );

