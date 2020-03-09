// $('#submit-csv').hide();
$('#upload-csv').change(function (e) {
    var val = $('#upload-csv').val();
    if (val) $('#submit-csv').show();
    $('#imported-filename').text('CSV選択：' + val.substr(val.lastIndexOf("\\") + 1));
});


// var table = $("#foo-table").DataTable({
//     lengthMenu: [ 2, 25, 50, 100 ],
//     displayLength: 25,
//     scrollX: true,
//     scrollY: 200
// });


// var ctable = $("#clear-rate-table").DataTable({
//     lengthMenu: [ 10, 20, 50, 100, 1000],
//     displayLength: 20,
//     // sSearch: "検索:",
// });


// $('form').on('change', function(event) {
//     ctable.draw();
// });

// $.fn.dataTable.ext.search.push(
//     function( settings, data, dataIndex ) {
//         var form = document.forms[1];
//         var v5 = form.elements['v5'].checked;

//         var color = form.elements['color'].checked;
//         if (color && data[0] == '青') return true;
//         if (v5 && data[0] == '5th style') return true;

//         //return false;
//         return false;
//     }
// );


// $.fn.dataTable.ext.search.push(
//     function( settings, data, dataIndex ) {
//         var form = document.forms[1];
//         var color = form.elements['color'].checked;
//         var size = form.elements['size'].checked;
//         var price = parseFloat(form.elements['price'].value);
//         var disc = form.elements['disc'].value;
        
//         if (color && data[1] !== '青') return true;

//         if (color && data[1] !== '青') {
//             return false;
//         }


//         if (color && data[1] !== '青') {
//             return false;
//         }

//         if (size && data[3] !== '大') {
//             return false;
//         }

//         if (parseFloat(data[4]) < price) {
//             return false;
//         }

//         if (disc !== '' && data[5] !== disc) {
//             return false;
//         }

//         return true;
//     }
// );

// $(document).ready(function() {
//     $('#clear-rate-table').DataTable();
// } );



$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        // var min = parseInt( $('#min').val(), 10 );
        // var max = parseInt( $('#max').val(), 10 );
        // var age = parseFloat( data[3] ) || 0; // use data for the age column
 
        // if ( ( isNaN( min ) && isNaN( max ) ) ||
        //      ( isNaN( min ) && age <= max ) ||
        //      ( min <= age   && isNaN( max ) ) ||
        //      ( min <= age   && age <= max ) )
        // {
        //     return true;
        // }
        var form = document.forms[2];

        //var color = form.elements['color'].checked;
        var versions = new Array('5th style',
            '6th style',
            '7th style',
            '8th style',
            '9th style',
            '10th style',
            'IIDX RED',
            'HAPPY SKY',
            'DistorteD',
            'GOLD',
            'DJ TROOPERS',
            'EMPRESS',
            'Resort Anthem',
            'SIRIUS',
            'Lincle',
            'tricoro',
            'SPADA',
            'PENDUAL',
            'copula',
            'SINOBUZ',
            'CANNON BALLERS',
            'Rootage'
        );
        var lamps = new Array('NO PLAY',
            'FAILED',
            'ASSITED',
            'EASY',
            'CLEAR',
            'HARD',
            'EXHARD',
            'FULLCOMBO'
        );
        var mylamps = new Array('mynp',
            'myfa',
            'myae',
            'myes',
            'mycl',
            'myhd',
            'myex',
            'myfc'
        );
        var tarlamps = new Array('tares',
            'tarcl',
            'tarhd',
            'tarex',
            'tarfc'
        );
        for(let ver of versions) {
            if (!form.elements[ver].checked && data[0] == ver) return false;
         }
        for(let i in mylamps) {
            if (!form.elements[mylamps[i]].checked && data[2] == lamps[i]) return false;
        }
        for(let i in tarlamps) {
            if (!form.elements[tarlamps[i]].checked && data[3] == lamps[(parseInt(i)+parseInt(3))]) return false;
        }

        return true;
    }
);
 


$(document).ready(function() {
    var table = $('#clear-rate-table').DataTable({
        lengthMenu: [ 10, 20, 50, 100, 1000],
        displayLength: 20,
        sorting: [ [4, "ASC"] ],
        oLanguage: {
            /* 日本語化設定 */
            sLengthMenu : "表示　_MENU_　件", // 表示行数欄(例 = 表示 10 件)
            oPaginate : { // ページネーション欄
                sNext : "次へ",
                sPrevious : "前へ"
            },
            sInfo : "_TOTAL_ 件中 _START_件から_END_件 を表示しています", // 現在の表示欄(例 = 100 件中 20件から30件 を表示しています)
            sSearch : "検索 ", // 検索欄(例 = 検索 --)
            sZeroRecords : "表示するデータがありません", // 表示する行がない場合
            sInfoEmpty : "0 件中 0件 を表示しています", // 行が表示されていない場合
            sInfoFiltered : "全 _MAX_ 件から絞り込み" // 検索後に総件数を表示する場合
        },
        columnDefs : [
            { 
              'targets' :  0,
              'orderable' : true,
              'orderDataType' : 'dom-jp'
            }
            ,{}
            ,{              
            'targets' :  2,
            'orderable' : true,
            'orderDataType' : 'dom-jp'}
            ,{
                'targets' :  3,
            'orderable' : true,
            'orderDataType' : 'dom-jp'}
            ,{}
          ]
    });
    $('form').on('change', function(event) {
        table.draw();
    });
} );


$(function($){ 
    $.fn.dataTable.ext.order['dom-jp'] = function (settings, col){
      return this.api().column(col, {order:'index'}).nodes().map(function (td, i) {
        switch ($(td).html()){
          case '5th style':return '05';
          case '6th style':return '06';
          case '7th style':return '07';
          case '8th style':return '08';
          case '9th style':return '09';
          case '10th style':return '10';
          case 'IIDX RED':return '11';
          case 'HAPPY SKY':return '12';
          case 'DistorteD':return '13';
          case 'GOLD':return '14';
          case 'DJ TROOPERS':return '15';
          case 'EMPRESS':return '16';
          case 'SIRIUS':return '17';
          case 'Resort Anthem':return '18';
          case 'Lincle':return '19';
          case 'tricoro':return '20';
          case 'SPADA':return '21';
          case 'PENDUAL':return '22';
          case 'copula':return '23';
          case 'SINOBUZ':return '24';
          case 'CANNON BALLERS':return '25';
          case 'Rootage':return '26';
          case 'HEROIC VERSE':return '27';

          case 'NO PLAY':return '90';
          case 'FAILED':return '91';
          case 'ASSITED':return '92';
          case 'EASY':return '93';
          case 'CLEAR':return '94';
          case 'HARD':return '95';
          case 'EXHARD':return '96';
          case 'FULLCOMBO':return '97';

          default:
            return '00';
        }
      });
    };  
  
  }); 



$('#filterCollapse').on('show.bs.collapse', function () {
    $('#arrow').toggleClass('fa-chevron-up');
    $('#arrow').toggleClass('fa-chevron-down');
});
$('#filterCollapse').on('hide.bs.collapse', function () {
    $('#arrow').toggleClass('fa-chevron-up');
    $('#arrow').toggleClass('fa-chevron-down');
});

$(function(){
    $("form").garlic();
});

function checkFalse(start,end){
    const checks = document.forms[2];
    for (let i = start; i <= end; i++){
        checks[i].checked = false;
        $(checks[i]).change();
        //checks[i].prop('checked', true);
    }
}
function checkTrue(start,end){
    const checks = document.forms[2];
    for (let i = start; i <= end; i++){
        checks[i].checked = true;
        $(checks[i]).change();
        //checks[i].prop('checked', true);
    }
}
