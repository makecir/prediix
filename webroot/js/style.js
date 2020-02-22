// $('#submit-csv').hide();
$('#upload-csv').change(function (e) {
    var val = $('#upload-csv').val();
    if (val) $('#submit-csv').show();
    $('#imported-filename').text('CSV選択：' + val.substr(val.lastIndexOf("\\") + 1));
});


var table = $("#foo-table").DataTable({
    lengthMenu: [ 2, 25, 50, 100 ],
    displayLength: 25,
    scrollX: true,
    scrollY: 200
});

$('form').on('change', function(event) {
    table.draw();
});

var ctable = $("#clear-rate-table").DataTable({
    lengthMenu: [ 10, 20, 50, 100, 1000],
    displayLength: 20,
    // sSearch: "検索:",
});


$('form').on('change', function(event) {
    ctable.draw();
});


$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var form = document.forms[1];
        var color = form.elements['color'].checked;
        var size = form.elements['size'].checked;
        var price = parseFloat(form.elements['price'].value);
        var disc = form.elements['disc'].value;
        if (color && data[1] !== '青') {
            return false;
        }

        if (size && data[3] !== '大') {
            return false;
        }

        if (parseFloat(data[4]) < price) {
            return false;
        }

        if (disc !== '' && data[5] !== disc) {
            return false;
        }

        return true;
    }
);

// $(document).ready(function() {
//     $('#clear-rate-table').DataTable();
// } );
