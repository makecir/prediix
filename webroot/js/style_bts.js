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
        var form = document.forms[1];

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
        var lamps = new Array(//'NO PLAY',
            //'FAILED',
            //'ASSITED',
            'EASY',
            'CLEAR',
            'HARD',
            'EXHARD',
            'FULLCOMBO'
        );
        var mylamps = new Array(//'mynp',
            //'myfa',
            //'myae',
            'myes',
            'mycl',
            'myhd',
            'myex',
            'myfc'
        );
        for(let ver of versions) {
            if (!form.elements[ver].checked && data[0] == ver) return false;
         }
        for(let i in mylamps) {
            if (!form.elements[mylamps[i]].checked && data[2] == lamps[i]) return false;
        }

        return true;
    }
);
 

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

$(document).ready(function() {
    var table = $('#bte_table').DataTable({
        lengthMenu: [ 10, 20, 50, 100, 1000],
        displayLength: 20,
        //order:  [ [3, "ASC"] ],
        order:  [ [3, "asc"] ],
        //sorting: [ [3, "DESC"] ],
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
            'orderDataType' : 'dom-jp'
            }
            ,{
                'targets' :  3,
                'orderable' : true,
                'orderDataType' : 'dom-text'
            }
          ]
    });
    $('form').on('change', function(event) {
        table.draw();
	});
} );


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
    const checks = document.forms[1];
    for (let i = start; i <= end; i++){
        checks[i].checked = false;
        $(checks[i]).change();
        //checks[i].prop('checked', true);
    }
}
function checkTrue(start,end){
    const checks = document.forms[1];
    for (let i = start; i <= end; i++){
        checks[i].checked = true;
        $(checks[i]).change();
        //checks[i].prop('checked', true);
    }
}

$(function () {
	$(document.forms[1][27]).change();
  });
  