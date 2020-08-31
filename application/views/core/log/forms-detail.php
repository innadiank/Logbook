
<!--JQuery-->
<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin = "anonymous"></script> -->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/jquery-ui.css'; ?>">
<!-- <link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/datatable/datatable.css'; ?>"> -->
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/datatables.js' ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.autocomplete.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script> -->
<!-- <script type="text/javascript">var base_url = '<?php echo base_url();?>'</script> -->
<!-- <script defer src = "<?php echo base_url(); ?>js/log/ajax.js" crossorigin = "anonymous"></script> -->
<head>
<style>
.row{
   margin-left:50px;
   margin-right:50px;
}

.card-header{
    text-align:center;
    font:30;
}

tbody{
    text-align:center;
    font-family:Comic Sans MS;

}
thead{
    background: grey;
}

</style>
</head>
<!-- <center> -->
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <!-- <div class="row"><button class="col-sm-1 btn btn-success" onclick="window.open('<?php echo site_url('Dashboard')?>','_self');">B  A  C  K</button>
                                                   -->
                                                 
                        <div class="col-md-12"; style=background-color:#ffffb3>
                                <div class="main-card mb-3 card">
                                    <input type="text" id="tanggal" name="tanggal" value="<?=date('y-m-d h:i:s') ?>" hidden>
                                    <input type="text" id="logID" name="logID" value="<?=$logBook['logID'] ?>" hidden>
                                    <input type="text" id="userId" name="userId" value="<?=$_SESSION['userId'] ?>" hidden>
                                    
                                    

                                    <div >
                                                   
                                        <div class="btn-actions-pane-right"  style=background-color:#ffffb3>
                                            <div role="group" class="btn-group-sm btn-group">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12" ; style=background-color:navy>
                                        <div class="main-card mb-5 card" ; style=background-color:#ccffe6>
                                        
                                         <div  id="table_detail">
                                            <div class="card-body"><h3 style="text-align:center;font-family:Apple Chancery">
                                        <b> DETAIL LOGBOOK</b></h3>  <button class="btn btn-info" id="print" name='print' value='Download' style="margin-left:1200px" ><i class="fa fa-print"></i></button>
                                                    <br><br>

                                                                        
                                                    <table class="table table-bordered table-striped" style='background:#ffffcc;width:1439px;margin-left:-12px' name='tblLogBook' id="tblLogBook">
                                                        <thead class="thead-grey">
                                                        <tbody>

                                                          
                                                            <th>Kode Karyawan</th><td><?= $logBook['logUserID']?></td>
                                                            <th>Nama Karyawan</th><td><?= $vuser['pegNamaLengkap']?></td>

                                                            <tr>
                                                            <th>Nomor Order</th><td><?= $logBook['WONomor'] ?></td>
                                                            <th>Judul Order</th><td><?= $logBook['WONama'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Kode Kerja</th><td><?= $logBook['kdKrjID'] ?></td>
                                                            <th>Nama Kerja</th><td><?= $logBook['kdKrjNama'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Tanggal dan Jam Mulai</th><td><?= date('d M Y h:i A', strtotime($logBook['logTanggal1']));  ?></td>
                                                            <th>Tanggal dan Jam Selesai</th><td><?= date('d M Y h:i A', strtotime($logBook['logTanggal2']));  ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Hasil</th><td><?= $logBook['logHasil'] ?></td>
                                                            <th>Penyebab</th><td><?= $logBook['FKeterangan'] ?></td>
                                                            </tr>
                                                            
                                                            <!-- <tr>
                                                            <th>Penyebab</th><td><?= $logBook['logFID'] ?></td>
                                                            <th>Keterangan</th><td><?= $logBook['ket'] ?></td>
                                                            </tr> -->

                                                            <tr>
                                                            <th></th><td></td>
                                                            <th></th><td></td>
                                                            </tr>

                                                            <tr>
                                                            <th>ID Customer</th><td><?= $customer['custID'] ?></td>
                                                            <th>ID Supplier</th><td><?= $supplier['suppID'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Nama Customer</th><td><?= $customer['namaPerson'] ?></td>
                                                            <th>Nama Supplier</th><td><?= $supplier['namaPerson'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Nama Lembaga Customer</th><td><?= $customer['namaLembaga'] ?></td>
                                                            <th>Nama Lembaga Supplier</th><td><?= $supplier['namaLembaga'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Alamat Customer</th><td><?= $customer['alamat'] ?></td>
                                                            <th>Alamat Supplier</th><td><?= $supplier['alamat'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>Kota&Prov Customer</th><td><?= $customer['kotaprop'] ?></td>
                                                            <th>Kota&Prov Supplier</th><td><?= $supplier['kotaprop'] ?></td>
                                                            </tr>

                                                            <tr>
                                                            <th>ID Operator</th><td><?= $logBook['logPerson'] ?></td>
                                                            <th>Nama Operator</th><td><?= $logBook['pegNama'] ?></td>
                                                            </tr>
                                                    </table>
                                                        <div class="position-relative form-group"><h3 class="col-sm-2 control-label" style="font-family:lucida sans">Kejadian</h3><br>
                                                        </div>
                                                            <table class="table table-bordered" style="background:#e6ffff;border:solid black">
                                                            <tr>
                                                                    <!-- <th class="col-sm-1 control-label" style="text-align:center"><b>Kejadian :</b> -->
                                                                    <td style="text-align:left"><?= $logBook['logCatatan'] ?></td></th>
                                                            </tr>
                                                            </table>
                                                        <div class="position-relative form-group"><h3 class="col-sm-2 control-label"style="font-family:lucida sans">Comment</h3><br>
                                                        </div>
                                                            <table class="table table-bordered" style="background:#e6e6ff;border:solid black">
                                                            <!-- <?=  var_dump($catatan);?> -->
                                                            
                                                                <?php
                                                                foreach ($catatan->result_array() as $cat) : ?>
                                                                <tr>
                                                                    <td style="text-align:center"><?= $cat['pegNama'] ?> <br> </td>
                                                                    <td style="text-align:left"><?= $cat['fuKeterangan']; ?></td>
                                                                    <td style="text-align:center"> <?= date('d M Y h:i A', strtotime($cat['fuTanggal'])); ?></td>
                                                                </tr>

                                                                <?php endforeach; ?>
                                                            
                                                        
                                                        </table>
                                                                    </div>
                                                    
                                                    </div>
                                                        
                                                        
                                                        <?php if($logBook['logStatus']=='OPEN'){?>
                                                                <div class="position-relative form-group"><label class="col-sm-2 control-label" style="font-size:large">Penyelesaian :</label><br>
                                                            </div>
                                                            <textarea  class="ckeditor" id="ckeditor2" name="ckeditor2"  placeholder="Comment" rows="5" cols="5"  ></textarea>
                                                                <br><br>
                                                            
                                                                <button class="btn btn-sm btn-primary" id="send" name='send' value='Send' style="font-size:12px;margin-left:600px;margin-right:600px">S E N D</button><br>
                                                                <?php if($logBook['logUserID']==$_SESSION['userId']){ ?>
                                                                <button class="btn btn-success btn-sm" id="close" name='close' value='Close'  style="font-size:12px; margin-left:600px;margin-right:600px;margin-bottom:15px" >C L O S E</button>
<!-- 
                                                                <button class="btn mr-2 mb-2 btn-info" id="send" name='send' value='Send' >SEND</button>
                                                               
                                                             <button class="btn mr-2 mb-2 btn-success" id="close" name='close' value='Close' >CLOSE</button>
                                          -->
                                                        <?php } ?>       
                                                        <?php } ?>      
                                                          
                                                <!-- </form> -->
                                                
                                             </div>
                                        
                                     </div>
                          </div>
                     </div>
                </div> 
<!-- </center> -->



<script type='text/javascript'>
var roxyFileman = '<?php echo base_url('fileman/index.html'); ?>';
 CKEDITOR.replace('ckeditor2', {
                filebrowserBrowseUrl: roxyFileman,
                filebrowserImageBrowseUrl: roxyFileman + '?type=image',
                removeDialogTabs: 'link:upload;image:upload'
            });
  $(document).ready(function() {
    $('#print').on('click', function() {
                        var printcontent = document.getElementById("table_detail").innerHTML;
                        document.body.innerHTML = printcontent;
                        window.print();
                        location.reload();
                    });

   
//========================================send==========================
        $('#send').on('click', function() {
                        
                        var logID = $('#logID').val();
                        var logTanggal1 = $('#tanggal').val();
                        var userId = $('#userId').val();
                        var fuKeterangan = CKEDITOR.instances['ckeditor2'].getData();
                        // alert('SUCCESS !!!');
                               $.ajax({
                                        url: "<?php echo base_url('view/send'); ?>",
                                        method: "POST",
                                        data: {
                                            logID : logID,
                                            logTanggal1 : logTanggal1,
                                            userId : userId,
                                            fuKeterangan : fuKeterangan
                                            },
                                        success: function(data) {
                                            // alert('SUCCESS !!!');

                                            window.location = '<?= base_url()."view/?id="?>'+logID;
                                            // window.location = 'dashboard';
                                            // window.history.back(-1);
                                            // redirect 'dashboard';
                                        }
                                })
                        });

$('#close').on('click', function() {
            var logID = $('#logID').val();
           
        //  alert(logID);
           
            $.ajax({
                    url: "<?php echo base_url('view/close'); ?>",
                    type: "POST",
                    data: {
                        logID : logID
                    },
                    success: function(data) {
                        window.location = '<?= base_url()."view/?id="?>'+logID;
                    }
                    })
               
    
        });

        });
        
      


    </script>
<!-- end1 -->















