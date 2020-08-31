var table_pelanggan;

function hapus(nama, id)
{
    if(confirm("Apakah anda yakin menghapus pelanggan "+nama+" ?"))
    {
        window.location.href= "pelanggan/delete/"+id;
    }
}

function edit(id)
{
    window.location.href= "pelanggan/edit/"+id;
}

$(function () {
    table_pelanggan = $("#table_pelanggan").DataTable({
        bPaginate: true,
        bInfo: false,
        bFilter: true,
        paging: true,
        ajax: {
            url: base_url + "pelanggan/table_pelanggan_json",
            type: "POST",
            dataSrc: ""
        },
        columns: [
            {
                data: 'namaPelanggan',
                "render": function (data, type, row, meta) {
                    if (type === 'display') {
                        if (data == 0) {
                            data = '';
                        }
                        else {
                            data = '<div align="left"><a href="' + base_url + 'pelanggan/view/' + row["idPelanggan"] + '" target="_blank">' + data + '</a></div>';
                        }
                    }
                    return data;
                }
            },
            {data: 'alamat'},
            {data: 'nomorHp'},
            {data :null,
                "render": function(data, type, row, meta){
                    data = "<center><i class='fa fa-edit' onclick='edit("+row["idPelanggan"]+")'></i><i class='fa fa-trash' onclick='hapus(\""+ row['namaPelanggan'] + "\","+ row["idPelanggan"] +")'></i></center>";
                    return data;
                }
            }
        ],
        // "columnDefs": [
        //     {
        //         "targets": [3],
        //         "visible": false,
        //         "searchable": true
        //     }
        // ],
        order: [[0, "asc"]],
    });

    setTimeout(function () {
        table_pelanggan.columns.adjust().draw();
    }, 400);

    $('body').on('expanded.pushMenu collapsed.pushMenu', function() {
    	setTimeout(function() {
    		table_pelanggan.columns.adjust().draw();
    	}, 400);
    } );
});

// hapus("+row["idPelanggan"]+","+row["namaPelanggan"]+")