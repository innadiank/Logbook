<!--JQuery-->
<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin = "anonymous"></script> -->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/bootstrap-datepicker.css'; ?>">
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/jquery-ui.css'; ?>">
<!-- <link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/datatable/datatable.css'; ?>"> -->
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/datatables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap-datepicker.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.autocomplete.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script> -->
<!-- <script type="text/javascript">var base_url = '<?php echo base_url();?>'</script> -->
<!-- <script defer src = "<?php echo base_url(); ?>js/log/ajax.js" crossorigin = "anonymous"></script> -->
<head>
<style>
.row{
   margin-left:50px;
   margin-right:30px;
}


</style>
</head>
<!-- <center> -->
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                                 
                        <div class="col-md-12" ; style=background-color:black >
                                <div class="main-card mb-3 card">
                                    <div class="card-header">
                                    <!-- <button class="col-sm-1 btn btn-success" onclick="window.open('<?php echo site_url('Dashboard')?>','_self');">B  A  C  K</button> -->
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" ; style=background-color:navy >
                                        <div class="main-card mb-5 card"; style=background-color:#b3e6ff>
                                            <div class="card-body"><h3 style="text-align:center;font-family:Apple Chancery"><b>
                                             EDIT LOGBOOK<b></h3>
                                            
                                            <form enctype="multipart/form-data">
                                            <input name="logID" id="logID" value="<?= $logBook['logID'] ?>" hidden>
                                                   
                                                    
                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">Kode Karyawan :</label><input name="userId" id="userId" value="<?= $_SESSION['userId']?>"  style="width:275px;text-align:center"  text-align="center" type="text" disabled></div>
                                                    
                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Karyawan :</label><input name="pegNama" id="pegNama" value="<?= $vuser['pegNama']?>"  style="width:275px;text-align:center"  disabled></div>
                                                    
                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">Nomor Order :</label><input name="logWO" id="logWO" placeholder="Nomor WO" type="text"  style="width:275px;text-align:center"  value="<?= $logBook['WONomor'] ?>"> 
                                                    <button type="button" class="btn mr-2 mb-2 btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg1">SEARCH</button>

                                                    </div>
                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Judul Order :</label><input name="judul" id="judul" value="<?= $logBook['WONama'] ?>" style="width:363px;text-align:center"
                                                    placeholder="judul order" type="text"   disabled></div>
                                                    
                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">Kode Kerja :</label><input name="logKodeKerja" id="logKodeKerja" value="<?= $logBook['kdKrjID'] ?>"  style="width:275px;text-align:center" 
                                                    placeholder="kode kerja" type=""  >
                                                    <button type="button" class="btn mr-2 mb-2 btn-secondary"  data-toggle="modal" data-target=".bd-example-modal-lg2">SEARCH</button>

                                                   </div>
                                                   
                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">Nama Kerja :</label><input name="kdKrjNama" id="kdKrjNama"  value="<?= $logBook['kdKrjNama'] ?>" style="width:363px;text-align:center"
                                                    placeholder="nama kerja" type="text"   disabled></div>
                                                   
                                                    <div class="position-relative form-group"><label   class="col-sm-2 control-label">Tanggal Mulai :</label><input type="text"  name="logTanggal1" id="logTanggal1" autocomplete="off" value="<?= substr($logBook['logTanggal1'], 0,10); ?>"   class="datepicker"  style="width:275px;text-align:center"
                                                     ></div>
                                                    
                                                    <div class="position-relative form-group"><label   class="col-sm-2 control-label">Jam Mulai :</label><input name="jamMulai" id="jamMulai" value="<?= substr($logBook['logTanggal1'], 11); ?>"  style="width:150px;text-align:center"
                                                    placeholder="jam mulai" type="time"  ></div>

                                                    <div class="position-relative form-group"><label   class="col-sm-2 control-label">Tanggal Selesai :</label><input type="text" name="logTanggal2" id="logTanggal2" autocomplete="off" value="<?= substr($logBook['logTanggal2'], 0,10); ?>"  class="datepicker"  style="width:275px;text-align:center"
                                                     placeholder="tanggal" ></div>
                                                    
                                                    <div class="position-relative form-group"><label   class="col-sm-2 control-label">Jam Selesai:</label><input name="jamS elesai" id="jamSelesai" value="<?= substr($logBook['logTanggal2'], 11); ?>"  style="width:150px;text-align:center"
                                                    placeholder="jam selesai" type="time"  ></div>
                                                
                                                    <div class="position-relative form-group"><label   class="col-sm-2 control-label">Hasil :</label><input name="logHasil" id="logHasil" value="<?= $logBook['logHasil'] ?>" style="width:275px;text-align:center"
                                                    placeholder="hasil" type="number"   ></div>

                                                    <div class="form-group">
                                                    <label for="name"  class="col-sm-2 control-label">Penyebab : </label>
                                                        <div class="controls">
                                                            <select required name="logFID" id="logFID" style="width:130px"  >
                                                                <!-- <option value="0" disabled>-- Pilih --</option> -->
                                                                <option value="1" <?php if(substr($logBook['logFID'], 0,1)=="1"){echo "selected";} ?> >Internal</option>
                                                                <option value="2" <?php if(substr($logBook['logFID'], 0,1)=="2"){echo "selected";} ?>>Eksternal</option>
                                                                </select>
                                                        </div>
                                                    </div> 

                                                    <div class="form-group">
                                                    <label for="name"  class="col-sm-2 control-label" style="width:130px">Keterangan : </label>
                                                        <div class="controls" >
                                                            <select id="ket"   style="width:130px;text-align:center;margin-left:92px" >
                                                            <?php 
                                                            foreach($ket->result_array() as $k){
                                                            if($k['FId']==$logBook['logFID']){
                                                                echo "<option selected='selected' value='$k[FId]'>$k[FKeterangan]</option>";
                                                            }else{
                                                                echo "<option  value='$k[FId]'>$k[FKeterangan]</option>";

                                                            }}
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div> 

                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">ID Customer :</label><input name="logCustID" id="logCustID" value="<?= $customer['custID'] ?>"  style="width:275px;text-align:center" 
                                                    placeholder="ID Customer" type=""   >
                                                    <button type="button" class="btn mr-2 mb-2 btn-success" data-toggle="modal" data-target=".bd-example-modal-lg3">SEARCH</button>

                                                   </div>
                                                    
                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Customer</label><input name="namaPerson" id="namaPerson" value="<?= $customer['namaPerson'] ?>" style="width:363px;text-align:center" disabled> 
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Lembaga</label><input name="namaLembaga" id="namaLembaga"  value="<?= $customer['namaLembaga'] ?>" style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Alamat</label><input name="alamat" id="alamat" value="<?= $customer['alamat'] ?>"  style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Kota & Provinsi</label><input name="kotaprop" id="kotaprop" value="<?= $customer['kotaprop'] ?>" style="width:363px;text-align:center"  disabled>
                                                    </div>


                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">ID Supplier :</label><input name="logSuppID" id="logSuppID" value="<?= $supplier['suppID'] ?>"  style="width:275px;text-align:center" 
                                                    placeholder="ID Supplier" type=""   >
                                                    <button type="button" class="btn mr-2 mb-2 btn-success" data-toggle="modal" data-target=".bd-example-modal-lg4">SEARCH</button>

                                                   </div>
                                                    
                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Supplier</label><input name="namaPerson" id="namaPerson2" value="<?= $supplier['namaPerson'] ?>"  style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Lembaga</label><input name="namaLembaga" id="namaLembaga2"  value="<?= $supplier['namaLembaga'] ?>" style="width:363px;text-align:center"  disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Alamat</label><input name="alamat" id="alamat2" value="<?= $supplier['alamat'] ?>"  style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Kota & Provinsi</label><input name="kotaprop" id="kotaprop2" value="<?= $supplier['kotaprop'] ?>" style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label  class="col-sm-2 control-label">ID Operator:</label><input name="logPerson" id="logPerson" value="<?= $logBook['logPerson'] ?>"  style="width:275px;text-align:center" 
                                                    placeholder="ID Operator" type=""   >
                                                    <button type="button" class="btn mr-2 mb-2 btn-success"  data-toggle="modal" data-target=".bd-example-modal-lg5">SEARCH</button>

                                                   </div>

                                                   <div class="position-relative form-group"><label class="col-sm-2 control-label">Nama Operator :</label><input name="pegNama" id="pegNama2" value="<?= $logBook['pegNama'] ?>" style="width:363px;text-align:center" disabled>
                                                    </div>

                                                    <div class="position-relative form-group"><label class="col-sm-2 control-label">Kejadian :</label><br>
                                                   </div>
                                                    <textarea class="ckeditor" id="ckeditor" name="ckeditor"  placeholder="Catatan" rows="5" cols="5"  ><?= $logBook['logCatatan'] ?></textarea>


                                                   
                                                   <br><br>
                                                    <button class="btn mr-2 mb-2 btn-primary" id="submit" name='submit' value='Submit' >S A V E</button>
                                                <!-- </form> -->
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div> 
<!-- </center> -->




<!-- modal wo -->

<div class="modal bd-example-modal-lg1" id="modalWO" name="modalWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Daftar WO</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" name='tbwo' id="tbwo">
                            <thead>
                                <tr>
                                    <th>Nomor Order</th>
                                    <th>Judul Order</th> 
                                </tr>
                            </thead>
                            <tbody id='show_data'>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-8">
                        <label class="pull-left">*Double Klik pada baris yang dipilih</label>
                    </div>
                    <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

<!--  modal kode kerja -->

    <div class="modal bd-example-modal-lg2" id="kdKrjID"  name="kdKrjID" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" ;style="text-align:center;">Daftar Kode Kerja</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped" name='tbkdkrj' id="tbkdkrj">
                            <thead>
                                <tr>
                                    <th>Kode Kerja</th>
                                    <th>Nama Kerja</th> 
                                </tr>
                            </thead>
                            <tbody id='show_data2'>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-8">
                        <label class="pull-left">*Double Klik pada baris yang dipilih</label>
                    </div>
                    <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
 


    
<!-- modal customer -->

<div class="modal bd-example-modal-lg3" id="custID" name="custID" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       
       <div class="modal-dialog">
           <div class="modal-content" width="75%">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" ;style="text-align:center;">Daftar Customer</h4>
               </div>
               <div class="modal-body" width="75%" >
                   <div class="table table-bordered table-responsive">
                       <table class="table table-hover table-bordered table-striped" name='tblcst' id="tblcst" width="100%" >
                           <thead>
                               <tr>
                                   <th>ID Customer</th>
                                   <th>Nama Customer</th> 
                                   <th>Nama Lembaga</th>
                                   <th>Alamat</th>
                                   <th>Kota dan Provinsi</th> 
                               </tr>
                           </thead>
                           <tbody id='show_data3'>
                           </tbody>
                       </table>
                   </div>
               </div>
               <div class="modal-footer">
                   <div class="col-sm-8">
                       <label class="pull-left">*Double Klik pada baris yang dipilih</label>
                   </div>
                   <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">CLOSE</button>
               </div>
           </div>
       </div>
   </div> 

<!-- modal supplier -->

<div class="modal bd-example-modal-lg4" id="suppID" name="suppID" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" ;style="text-align:center;">Daftar Supplier</h4>
               </div>
               <div class="modal-body">
                   <div class="table-responsive">
                       <table class="table table-hover table-bordered table-striped" name='tblsupp' id="tblsupp">
                           <thead>
                               <tr>
                                   <th>ID Supplier</th>
                                   <th>Nama Supplier</th> 
                                   <th>Nama Lembaga</th>
                                   <th>Alamat</th>
                                   <th>Kota dan Provinsi</th> 
                               </tr>
                           </thead>
                           <tbody id='show_data4'>
                           </tbody>
                       </table>
                   </div>
               </div>
               <div class="modal-footer">
                   <div class="col-sm-8">
                       <label class="pull-left">*Double Klik pada baris yang dipilih</label>
                   </div>
                   <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">CLOSE</button>
               </div>
           </div>
       </div>
   </div>

   <!-- modal operator -->

<div class="modal bd-example-modal-lg5" id="pegNoReg" name="pegNoReg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" ;style="text-align:center;">Daftar Operator</h4>
               </div>
               <div class="modal-body">
                   <div class="table-responsive">
                       <table class="table table-hover table-bordered table-striped" name='tblope' id="tblope">
                           <thead>
                               <tr>
                                   <th>ID Operator</th>
                                   <th>Nama Operator</th> 
                               </tr>
                           </thead>
                           <tbody id='show_data5'>
                           </tbody>
                       </table>
                   </div>
               </div>
               <div class="modal-footer">
                   <div class="col-sm-8">
                       <label class="pull-left">*Double Klik pada baris yang dipilih</label>
                   </div>
                   <button type="button" class="btn btn-primary btn-md" data-dismiss="modal">CLOSE</button>
               </div>
           </div>
       </div>
   </div>


<script type='text/javascript'>
    // $(".datepicker").datepicker({
    //     format: 'dd-mm-yyyy',
    //     autoclose: true,
    //     todayHighlight: true,
    // });
    var roxyFileman = '<?php echo base_url('fileman/index.html'); ?>';
        CKEDITOR.replace('ckeditor', {
            filebrowserBrowseUrl: roxyFileman,
            filebrowserImageBrowseUrl: roxyFileman + '?type=image',
            removeDialogTabs: 'link:upload;image:upload'
        });

        $(document).ready(function() {
        modalWO();
        modelKodeKerja();
        modelCustomer();
        modelSupplier();
        modelOperator();
//================================================================================
            function modalWO(){
            $.ajax({
                    type: 'get',
                    url: "<?php echo base_url('edit/table_wo_json') ?>",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert("s");
                        // console.log(data);
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].WONomor + '</td>' +
                                '<td>' + data[i].WONama + '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                    }

                    });

                    $('#tbwo').DataTable({
                        
                        "order": [
                            [0, "desc"]
                        ],
                        "columnDefs": [{
                            "target": 0,
                            "type": "date-eu"
                        }],
                    
                    });
        }
    
                    $('#tbwo tbody').on('dblclick', 'tr', function() {
                            var row = $(this).closest('tr');
                            var aDAta1 = row.find("td:nth-child(1)");
                            var aDAta2 = row.find("td:nth-child(2)");
                            $.each(aDAta1, function() {
                                var kode1 = $(aDAta1).text();
                                var kode2 = $(aDAta2).text();
                                buka = true;
                                $('#logWO').val(kode1);
                                $('#judul').val(kode2);
                                // $('#tblIdCustomer').DataTable().fnDestroy();
                                $('#modalWO').modal('hide');
                            })
                    });

                    $('#logWO').keydown(function(e) {
                        if (e.keyCode == 13) {
                            var WONomor = $('#logWO').val();
                            $.ajax({
                                url: "<?php echo base_url('edit/table_wo_enter_json'); ?>",
                                method: "POST",
                                dataType: "JSON",
                                data: {
                                    WONomor : WONomor
                                },
                                success: function(data) {
                                    //alert(data[0].WONomor);
                                    $('#judul').val(data[0].WONama);
                                }
                            })

                        }
                    });

//================================================================================

            function modelKodeKerja(){
            $.ajax({
                    type: 'get',
                    url: "<?php echo base_url('edit/table_kode_kerja_json') ?>",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                    // alert("s");

                        // console.log(data);
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].kdKrjID + '</td>' +
                                '<td>' + data[i].kdKrjNama + '</td>' +
                                '</tr>';
                        }
                        $('#show_data2').html(html);
                    }

                    });
               
                    $('#tbkdkrj').DataTable({
                    
                    "order": [
                        [0, "desc"]
                    ],
                    "columnDefs": [{
                        "target": 0,
                        "type": "date-eu"
                    }],
                   
                    });
            }

                    $('#tbkdkrj tbody').on('dblclick', 'tr', function() {
                        var row = $(this).closest('tr');
                        var aDAta1 = row.find("td:nth-child(1)");
                        var aDAta2 = row.find("td:nth-child(2)");
                        $.each(aDAta1, function() {
                            var kode1 = $(aDAta1).text();
                            var kode2 = $(aDAta2).text();
                            buka = true;
                            $('#logKodeKerja').val(kode1);
                            $('#kdKrjNama').val(kode2);
                            // $('#tblIdCustomer').DataTable().fnDestroy();
                            $('#kdKrjID').modal('hide');
                        })
                    }) ;

                    $('#logKodeKerja').keydown(function(e) {
                        if (e.keyCode == 13) {
                            var kdKrjID = $('#logKodeKerja').val();
                            $.ajax({
                                url: "<?php echo base_url('edit/table_kode_kerja_enter_json'); ?>",
                                method: "POST",
                                dataType: "JSON",
                                data: {
                                    kdKrjID : kdKrjID
                                },
                                success: function(data) {
                                    //alert(data[0].WONomor);
                                    $('#kdKrjNama').val(data[0].kdKrjNama);
                                }
                            })

                        }
                    });

//================================================================================

            function modelCustomer(){
            $.ajax({
                    type: 'get',
                    url: "<?php echo base_url('edit/table_customer_json') ?>",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                    // alert("s");

                        console.log(data);
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].custID + '</td>' +
                                '<td>' + data[i].namaPerson + '</td>' +
                                '<td>' + data[i].namaLembaga + '</td>' +
                                '<td>' + data[i].alamat + '</td>' +
                                '<td>' + data[i].kotaprop + '</td>' +
                                '</tr>';
                        }
                        $('#show_data3').html(html);
                    }

                  });

                    $('#tblcst').DataTable({
                        
                        "order": [
                            [0, "desc"]
                        ],
                        "columnDefs": [{
                            "target": 0,
                            "type": "date-eu"
                        }],
                    
                    });
            }

                    $('#tblcst tbody').on('dblclick', 'tr', function() {
                        var row = $(this).closest('tr');
                        var aDAta1 = row.find("td:nth-child(1)");
                        var aDAta2 = row.find("td:nth-child(2)");
                        var aDAta3 = row.find("td:nth-child(3)");
                        var aDAta4 = row.find("td:nth-child(4)");
                        var aDAta5 = row.find("td:nth-child(5)");
                        $.each(aDAta1, function() {
                            var kode1 = $(aDAta1).text();
                            var kode2 = $(aDAta2).text();
                            var kode3 = $(aDAta3).text();
                            var kode4 = $(aDAta4).text();
                            var kode5 = $(aDAta5).text();
                            buka = true;
                            $('#logCustID').val(kode1);
                            $('#namaPerson').val(kode2);
                            $('#namaLembaga').val(kode3);
                            $('#alamat').val(kode4);
                            $('#kotaprop').val(kode5);
                            // $('#tblIdCustomer').DataTable().fnDestroy();
                            $('#custID').modal('hide');
                        })
                    });

                    

                    $('#logCustID').keydown(function(e) {
                            if (e.keyCode == 13) {
                                var  custID = $('#logCustID').val();
                                $.ajax({
                                    url: "<?php echo base_url('edit/table_customer_enter_json'); ?>",
                                    method: "POST",
                                    dataType: "JSON",
                                    data: {
                                        custID : custID
                                    },
                                    success: function(data) {
                                        //alert(data[0].namaPerson);
                                         $('#namaPerson').val(data[0].namaPerson);
                                         $('#namaLembaga').val(data[0].namaLembaga);
                                         $('#alamat').val(data[0].alamat);
                                         $('#kotaprop').val(data[0].kotaprop);
                                    }
                                })

                            }
                        });

 //================================================================================

            function modelSupplier(){
            $.ajax({
                    type: 'get',
                    url: "<?php echo base_url('edit/table_supplier_json') ?>",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert("s");
                        // console.log(data);
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].suppID + '</td>' +
                                '<td>' + data[i].namaPerson + '</td>' +
                                '<td>' + data[i].namaLembaga + '</td>' +
                                '<td>' + data[i].alamat + '</td>' +
                                '<td>' + data[i].kotaprop + '</td>' +
                                '</tr>';
                        }
                        $('#show_data4').html(html);
                    }

                    });

                    $('#tblsupp').DataTable({
                        
                        "order": [
                            [0, "desc"]
                        ],
                        "columnDefs": [{
                            "target": 0,
                            "type": "date-eu"
                        }],
                    
                    });
        }
    
                    $('#tblsupp tbody').on('dblclick', 'tr', function() {
                            var row = $(this).closest('tr');
                            var aDAta1 = row.find("td:nth-child(1)");
                            var aDAta2 = row.find("td:nth-child(2)");
                            var aDAta3 = row.find("td:nth-child(3)");
                            var aDAta4 = row.find("td:nth-child(4)");
                            var aDAta5 = row.find("td:nth-child(5)");
                            $.each(aDAta1, function() {
                                var kode1 = $(aDAta1).text();
                                var kode2 = $(aDAta2).text();
                                var kode3 = $(aDAta3).text();
                                var kode4 = $(aDAta4).text();
                                var kode5 = $(aDAta5).text();
                                buka = true;
                                $('#logSuppID').val(kode1);
                                $('#namaPerson2').val(kode2);
                                $('#namaLembaga2').val(kode3);
                                $('#alamat2').val(kode4);
                                $('#kotaprop2').val(kode5);
                                // $('#tblIdCustomer').DataTable().fnDestroy();
                                $('#suppID').modal('hide');
                            })
                    });

                    $('#logSuppID').keydown(function(e) {
                        if (e.keyCode == 13) {
                            var suppID = $('#logSuppID').val();
                            $.ajax({
                                url: "<?php echo base_url('edit/table_supplier_enter_json'); ?>",
                                method: "POST",
                                dataType: "JSON",
                                data: {
                                    suppID : suppID
                                },
                                success: function(data) {
                                    //alert(data[0].WONomor);
                                    $('#namaPerson2').val(data[0].namaPerson);
                                    $('#namaLembaga2').val(data[0].namaLembaga);
                                    $('#alamat2').val(data[0].alamat);
                                    $('#kotaprop2').val(data[0].kotaprop);
                                }
                            })

                        }
                    });

//================================================================================
        
            function modelOperator(){
            $.ajax({
                    type: 'get',
                    url: "<?php echo base_url('edit/table_operator_json') ?>",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        // alert("s");
                         console.log(data);
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].pegNoReg + '</td>' +
                                '<td>' + data[i].pegNama + '</td>' +
                                '</tr>';
                        }
                        $('#show_data5').html(html);
                    }

                    });

                    $('#tblope').DataTable({
                        
                        "order": [
                            [0, "desc"]
                        ],
                        "columnDefs": [{
                            "target": 0,
                            "type": "date-eu"
                        }],
                    
                    });
             }
    
                    $('#tblope tbody').on('dblclick', 'tr', function() {
                            var row = $(this).closest('tr');
                            var aDAta1 = row.find("td:nth-child(1)");
                            var aDAta2 = row.find("td:nth-child(2)");
                            $.each(aDAta1, function() {
                                var kode1 = $(aDAta1).text();
                                var kode2 = $(aDAta2).text();
                                buka = true;
                                $('#logPerson').val(kode1);
                                $('#pegNama2').val(kode2);
                                // $('#tblIdCustomer').DataTable().fnDestroy();
                                $('#pegNoReg').modal('hide');
                            })
                    });

                    $('#logPerson').keydown(function(e) {
                        if (e.keyCode == 13) {
                            var pegNoReg = $('#logPerson').val();
                            $.ajax({
                                url: "<?php echo base_url('edit/table_operator_enter_json'); ?>",
                                method: "POST",
                                dataType: "JSON",
                                data: {
                                    pegNoReg : pegNoReg
                                },
                                success: function(data) {
                                    //alert(data[0].WONomor);
                                    $('#pegNama2').val(data[0].pegNama);
                                }
                            })

                        }
                    });

//========================================================================================
//modalFID
                $('#logFID').on('change',function() {
               
               var key= this.value;
               var item;
               $.ajax({
                    url: "<?php echo base_url('edit/penyebab'); ?>",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            key: key
                        },
                        success: function(data) {
                            console.log(data);
                            for (var i = 0; i < data.length; i++) {
                                item += "<option value=" + data[i].FId+ ">" + data[i].FKeterangan + "</option>"
                            }
                            // alert("bisa");
                            $("#ket").html(item);
                        }
                
                })
            });

          

//=====================================================================================================
                    $('#submit').on('click', function() {
                        
                        var logID = $('#logID').val();
                        var logWO = $('#logWO').val();
                        var logKodeKerja = $('#logKodeKerja').val();
                        var logTanggal1 = $('#logTanggal1').val();
                        var logTanggal2 = $('#logTanggal2').val();
                        var jamMulai = $('#jamMulai').val();
                        var mulai = logTanggal1 + " " + jamMulai;
                        var jamSelesai = $('#jamSelesai').val();
                        var selesai = logTanggal2 + " " + jamSelesai;
                        var logHasil = $('#logHasil').val();
                        var logFID = $('#ket').val();
                        var logCustID = $('#logCustID').val();
                        var logSuppID = $('#logSuppID').val();
                        var logPerson = $('#logPerson').val();
                        var logCatatan = CKEDITOR.instances['ckeditor'].getData();
                        var userId = $('#userId').val();
                        // alert(mulai);
                        // if( logCatatan!= '' && logWO!= '' && logKodeKerja!= '' && logTanggal1!= '' && logTanggal2!= '' && logCustID!= '' && logSuppID!= '' && logPerson!= ''){
                        // if ( logHasil > 0){
                        $.ajax({
                                        url: "<?php echo base_url('edit/submit'); ?>",
                                        method: "POST",
                                        data: {
                                            logID : logID,
                                            logWO : logWO,
                                            logKodeKerja : logKodeKerja,
                                            logTanggal1 : mulai,
                                            logTanggal2 : selesai,
                                            logHasil : logHasil,
                                            logFID : logFID,
                                            logCustID : logCustID,
                                            logSuppID : logSuppID,
                                            logPerson : logPerson,
                                            logCatatan : logCatatan,
                                            userId : userId
                                            },
                                        success: function(data) {
                                            alert('SUCCESS !!! Data Berhasil di Update');
                                            window.location = site_url+"dashboard";
                                            // window.location = 'dashboard';
                                            // window.history.back(-1);
                                            // redirect 'dashboard';
                                        }
                                    })
                            //     }else{
                            //         alert("Silahkan Masukkan Hasil terlebih Dahulu !");
                            //     }
                            // }else{
                            //     alert("Silahkan Lengkapi Form Input terlebih dahulu !");
                            // }
                        });
//tanggal----------------------------------------------
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
                       
                    });
                    


//=====================================================================================================

    </script>
<!-- end1 -->









