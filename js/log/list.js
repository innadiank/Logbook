var table_user;

$(function(){
	table_user = $("#table_user").DataTable({
		bPaginate: true,
		bInfo: false,
		bFilter: true,
		paging: true,
		ajax: {
			url: base_url + "dashboard/table_log_json",
			type: "POST",
			dataSrc: ""
		},
		columns: [
			{ data: 'logID',
				"render": function(data, type, row, meta){
		            if(type === 'display'){
		                if(data == 0)
		                {
		                	data = '';
		                }
		                else
		                {
		                	data = '<div align="center"><a href="'+ site_url +'view/?id='+data + '" target="_blank">' + data + '</a></div>';
		                }
		            }
		            return data;
		         }
			},
			{ data: 'WONomor',
			"render": function(data, type, row, meta){
				if(type === 'display'){
					data = '<div align="center">' + data + '</div>';
				}
				return data;
				}
		},
		{ data: 'WONama',
			"render": function(data, type, row, meta){
				if(type === 'display'){
					data = '<div align="center">' + data + '</div>';
				}
				return data;
				}
		},
		{ data: 'logCatatan',
			"render": function(data, type, row, meta){
				// if(type === 'display'){
				// 	data = '<div align="center">' + data + '</div>';
				// }
				return data;
				}
		},
			{ data: 'logTanggal1',
				"render": function(data, type, row, meta){
					if(type === 'display'){
						data = '<div align="center">' + data + '</div>';
					}
					return data;
					}
		        //     if(type === 'display'){
		        //         if(data == 0)
		        //         {
		        //         	data = '<div align="center">';
		        //         }
		        //     }
		        //     return data;
		        //  }
			},
			
		    { data: 'logStatus',
				"render": function(data, type, row, meta){
					if(type === 'display'){
						data = '<div align="center">' + data + '</div>';
					}
					return data;
					}
			},{ data :'Allow',
			"render": function(data, type, row, meta){
				if(data == 1){
					data = "<center><a href='"+site_url+"edit/?id="+row["logID"]+"' data-toggle='tooltip'  class='btn_edit  btn-secondary btn-sm'><i class='fa fa-edit'></i></a></center>";
					// data = '<div align="center"><a href="'+ site_url +'view/?id='+data + '" target="_blank">'+DATA+'</a></div>';

				
					}
					else{
						data='';
					}
				
				return data;
				}

			
			
		  
				// // data : 'action',
				// // '<div align="center"><a id="btnAction" style="margin-right:5px;"></i></a></div>';

				//  data = '<div align="center"><a id="btnAction" style="margin-right:5px;" href="'+ site_url +'edit'+ '" target="_blank"><i class="fa fa-pencil" title="Action">;

			}
			
			
		   
		],
        "columnDefs": [
	        {
	            "targets": [ 3 ],
	            "visible": false,
	            "searchable": true
	        }
	    ],
		order: [[ 0, "desc" ], [ 1, "desc" ],[ 2, "desc" ],[ 3, "desc" ],[ 4, "desc" ]],
		"footerCallback": function ( row, data, start, end, display ) {
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

	setTimeout(function() {
		table_user.columns.adjust().draw();
	}, 400);	

	// $('body').on('expanded.pushMenu collapsed.pushMenu', function() {
	// 	setTimeout(function() {
	// 		table_ar_collection_detail.columns.adjust().draw();
	// 	}, 400);
	// } );
});