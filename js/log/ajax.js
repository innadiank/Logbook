function action()
{
	
	$("#table_wo").DataTable({
		scrollCollapse: true,
		bPaginate: false,
		bInfo: false,
		bFilter: false,
		ajax: {
			url: base_url + "input/table_wo_json",
			type: "POST",
			dataSrc: "",
			// data: {branch: $("#branch").val()}
		},
		columns: [
			// { data: 'ID'},
			{ data: 'WONomor',
				"render": function(data, type, row, meta){
		            if(type === 'display'){
		            	data = '<div align="left">' + data + '</a></div>';
		            }
		            return data;
		         }
		    },
			{ data: 'WONama', 
				"render": function(data, type, row, meta){
		            if(type === 'display'){
		            	data = '<div align="left">' + data + '</div>';
		            }
		            return data;
		         }
			}
			
		],
		"columnDefs": [
	        {
	            "targets": [ 0 ],
	            "visible": false,
	            "searchable": false
	        }
	    ],
	    initComplete: function(){			
			$("#table_wo tbody tr").css("cursor", "pointer");
			$("#table_wo tbody tr").dblclick(function(){
				$("#MODAL").hide();
				$('.modal-backdrop').hide();
				var data = $("#table_wo").DataTable().row($(this)[0]).data();
				console.log(data);
				alert(data.Nama);
			});
		},
		order: [[ 0, "desc" ]],
		language: {
            "emptyTable": "No Transection History"
        }
	});
}

$(document).ready(function (){
	$('input[type=radio][name=radio1]').change(function() {
	    if (this.value == 1) {
	        $("#div_ext").hide();
	        $("#div_int").show();
	        $("#cbD").prop('checked', false);
	        $("#cbE").prop('checked', false);
	        $("#cbF").prop('checked', false);
	    }
	    else if (this.value == 2) {
	        $("#div_ext").show();
	        $("#div_int").hide();
	        $("#cbA").prop('checked', false);
	        $("#cbB").prop('checked', false);
	        $("#cbC").prop('checked', false);
	    }
	});

	$("#btnMODAL").click(function(){
		
	});
});

$('#MODAL').on('hidden.bs.modal', function () {
	$('#table_wo').DataTable().destroy();
});

$('#MODAL').on('show.bs.modal', function () {
	action();
});