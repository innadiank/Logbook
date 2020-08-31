<!--JQuery-->
<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin = "anonymous"></script> -->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/bootstrap-datepicker.css'; ?>">
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/jquery-ui.css'; ?>">
<!-- <link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/datatable/datatable.css'; ?>"> -->
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/datatables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap-datepicker.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.autocomplete.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
<head>
<style>
.row{
   margin-left:50px;
   margin-right:50px;
}

.card-header{
    text-align:center;
}

td{
    text-align:left;
}

.align-middle{
    background:#ffffe6;
}

</style>
</head>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row" style="background:#ffffe6">
                        <div class="app-main__outer">
                    <div class="app-main__inner"><h3 style="margin-left:600px;text-align:center;font:large;font-family:Apple Chancery"><b>REPORT LOGBOOK</b></h3> 
                        <div class="row">
                                            <div class="card-body">
                                            
                                            <!-- <form enctype="multipart/form-data"> -->
                                                   
                                                    <div class="position-relative form-group"><label style="margin-left:25px">Tanggal Mulai :</label><input name="logTanggal1" id="logTanggal1" autocomplete="off"  style="margin-left:35px;width:250px;text-align:center"
                                                     placeholder="dd-mm-yyyy" type="text" class="datepicker"  ></div>
                                                    
                                                   
                                                    <div class="position-relative form-group"><label  style="margin-left:25px">Tanggal Selesai :</label><input name="logTanggal2" id="logTanggal2" autocomplete="off"  style="margin-left:23px;width:250px;text-align:center"
                                                     placeholder="dd-mm-yyyy" type="text"   class="datepicker"  ></div>
                                                    
                                                   
                                                     <div class="form-group">
                                                    <label for="name"   style="margin-left:25px">Penyebab : </label>
                                                       
                                                            <select required name="logFID" id="logFID" style="margin-left:57px;width:130px">
                                                                <option value="-1"  diselected>-- -- Pilih -- --</option>
                                                                <option value=''  diselected>* ALL *</option>
                                                                <option value="1" diselected>Internal</option>
                                                                <option value="2" diselected>Eksternal</option>
                                                                </select>
                                                   
                                                    </div> 

                                                    <div class="form-group">
                                                    <label for="name"   style="margin-left:25px">Keterangan : </label>
                                                      
                                                            <select id="ket" style="margin-left:45px;width:130px;text-align:center"></select>
                                                     
                                                    </div> 

                                                  
                                                    <button class="btn mr-2 mb-2 btn-primary" id="search" name='search' value='Search' style='margin-left:257px'><i class="fa fa-search"></i></button>
                                                    <button class="btn mr-2 mb-2 btn-info" id="download" name='download' value='Download' ><i class="fa fa-download"></i></button>
                                                    <button class="btn mr-2 mb-2 btn-secondary" id="print" name='print' value='Print' ><i class="fa fa-print"></i></button>
                                            </div>
                                      
                               
                            
                        </div>
                     </div>
                </div>  
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header"  style="background-color:#e6e6e6">
                                     <h4 style="text-align:center;font-family:Apple Chancery"><b>Tabel LogBook<b></h4><br>
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="padding:15px;background-color:#b3fff0;text-align:center" id="tabelreport">
                                        <table border="2px" id="table_user" class="align-middle mb-0 table table-bordered table-striped">
                                            <thead>
                                            <tr style="font:bold">
                                                <th class="text-left">ID</th>
                                                <th class="text-left">Nomor WO</th>
                                                <th class="text-left">Nama WO</th>
                                                <th class="text-left">Tanggal</th>
                                                <th class="text-left">Status</th>
                                                <!-- <th class="text-center">Action</th> -->
                                            </tr>
                                            </thead>
                                            <tbody id='report' ></tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

<script type='text/javascript'>


$(document).ready(function() {

                    $('#logFID').on('change',function() {
            
                    var key= this.value;
                    var item;
                    if (key >= 0){
                    $.ajax({
                            url: "<?php echo base_url('report/penyebab'); ?>",
                                method: "POST",
                                dataType: "JSON",
                                data: {
                                    key: key
                                },
                                success: function(data) {
                                    console.log(data);
                                    item += "<option value=''>* ALL *</option>"
                                    for (var i = 0; i < data.length; i++) {
                                        item += "<option value=" + data[i].FId+ ">" + data[i].FKeterangan + "</option>"
                                    }
                                    // alert("bisa");
                                    $("#ket").html(item);
                                }
                        
                        })
                    }else{
                        $("#ket").html(" ");
                    }
                    });

                    $('#print').on('click', function() {
                        var printcontent = document.getElementById("tabelreport").innerHTML;
                        document.body.innerHTML = printcontent;
                        window.print();
                        location.reload();
                    });

                    $('#search').on('click', function() {
                      
                     var logTanggal1 = $('#logTanggal1').val();
                     var logTanggal2 = $('#logTanggal2').val();
                     var logFID      = $('#logFID').val();
                     var ket         = $('#ket').val();

                    //  alert(ket);
                       if(logTanggal1!='' && logTanggal2!= '' && ket!=null ){
                        // && logFID > -1, && ket> -1
                       $.ajax({
                               url: "<?php echo base_url('report/search'); ?>",
                               type: "POST",
                               async: false,
                               dataType:'json',
                               data: {
                                  
                                   logTanggal1 : logTanggal1,
                                   logTanggal2 : logTanggal2,
                                   logFID      : logFID,
                                   ket : ket
                               },
                               success: function(data) {
                                    console.log(data);

                                var html = "";
                                var i;
                                for(i=0; i<data.length; i++){
                                    html+= '<tr>' + 
                                    '<td><a href="'+ site_url +'view/?id='+data[i].logID + '" target="_blank">' + data[i].logID+ '</a></td>' +
                                    '<td>' + data[i].WONomor+ '</td>' +
                                    '<td>' + data[i].WONama+ '</td>' +
                                    '<td>' + data[i].logTanggal1+ '</td>' +
                                    '<td>' + data[i].logStatus+ '</td>' + '</tr>'
                                }
                                $('#report').html(html);
                               }
                               })
                       }else{
                           alert("Lengkapi Form dengan Benar !"); 
                      }
                       });

                    $('#logTanggal1').datepicker({
                            dateFormat: 'dd-mm-yy',
                            // changeMonth: true,
                            // changeYear: true,
                            todayHighlight: true,
                            autoclose: true
                        });
                        $('#logTanggal2').datepicker({
                            dateFormat: 'dd-mm-yy',
                            // changeMonth: true,
                            // changeYear: true,
                            todayHighlight: true,
                            autoclose: true
                        });

                        $('#download').on('click', function() {
                            // alert('a');
                            exportTableToExcel('table_user')

                        });

                            function exportTableToExcel(download, filename = 'Report LogBook') {
                            var downloadLink;
                            var dataType = 'application/vnd.ms-excel';
                            var tableSelect = document.getElementById(download);
                            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

                            // Specify file name
                            filename = filename ? filename + '.xls' : 'excel_data.xls';

                            // Create download link element
                            downloadLink = document.createElement("a");

                            document.body.appendChild(downloadLink);

                            if (navigator.msSaveOrOpenBlob) {
                                var blob = new Blob(['\ufeff', tableHTML], {
                                    type: dataType
                                });
                                navigator.msSaveOrOpenBlob(blob, filename);
                            } else {
                                // Create a link to the file
                                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                                // Setting the file name
                                downloadLink.download = filename;

                                //triggering the function
                                downloadLink.click();
                            }
                        
                    };

                    });

</script>
