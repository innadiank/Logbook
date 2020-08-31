var dataTable;

$(function () {
    dataTable = $("#dataTable").DataTable({
        bPaginate: true,
        bInfo: false,
        bFilter: true,
        paging: true,
        ajax: {
            url: base_url + "karyawan/table_karyawan_json",
            type: "POST",
            dataSrc: ""
        },
        columns: [
            {
                data: 'nama',
                "render": function (data, type, row, meta) {
                    if (type === 'display') {
                        if (data == 0) {
                            data = '';
                        }
                        else {
                            data = '<div align="center"><a href="' + base_url + 'view/?id=' + data + '" target="_blank">' + data + '</a></div>';
                        }
                    }
                    return data;
                }
            },
            {data: 'username'},
            {data: 'password'}
        ],
        // "columnDefs": [
        //     {
        //         "targets": [3],
        //         "visible": false,
        //         "searchable": true
        //     }
        // ],
        // order: [[0, "desc"], [1, "desc"], [2, "desc"], [3, "desc"], [4, "desc"]],
        "footerCallback": function (row, data, start, end, display) {
            // var api = this.api();
            // nb_cols = api.columns().nodes().length;
            // var j = 10;
            // while(j < nb_cols-5){
            // var pageTotal = api
            //          .column( j, { page: 'current'} )
            //          .data()
            //          .reduce( function (a, b) {
            //              return Number(a) + Number(b);
            //          }, 0 );
            //     // Update footer
            //     $( api.column( j ).footer() ).html(addCommas(parseFloat(pageTotal).toFixed(2)));
            // 	j++;
            // } 
        },
        // createdRow: function( row, data, dataIndex ) {
        // 	$(row).mousedown(function(e){
        // 		docid = data.id;
        // 		selectedRow = row;
        // 		if(!$(row).hasClass("custom-right-click")) $(row).addClass("custom-right-click");
        // 	});
        // },
        // initComplete: function(){
        // 	waitingDialog.hide();
        // },
    });

    setTimeout(function () {
        dataTable.columns.adjust().draw();
    }, 400);

    // $('body').on('expanded.pushMenu collapsed.pushMenu', function() {
    // 	setTimeout(function() {
    // 		table_ar_collection_detail.columns.adjust().draw();
    // 	}, 400);
    // } );
});