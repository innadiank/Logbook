<!--JQuery-->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin = "anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
<link rel="stylesheet" type='text/css' href="<?php echo base_url() . 'asset/css/jquery-ui.css'; ?>">
<!--Datatable-->
<link rel = "stylesheet" type = "text/css" href = "https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" crossorigin = "anonymous">
<link rel = "stylesheet" type = "text/css" href = "https://cdn.datatables.net/select/1.3.1/css/select.bootstrap.min.css" crossorigin = "anonymous">
<script src = "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin = "anonymous"></script>
<script src = "https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js" crossorigin = "anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/datatable/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/ckeditor/ckeditor.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'asset/js/bootstrap.min.js' ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.autocomplete.min.js') ?>"></script>
<script defer src = "<?php echo base_url(); ?>js/log/list.js" crossorigin = "anonymous"></script>

<head>
<style>
.row{
   margin-left:50px;
   margin-right:50px;
}

.card-header{
    text-align:center;
}

h4{
    text-align:center;
}

</style>
</head>

                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                
                                        <div class="btn-actions-pane-right">
                                    
                                            </div>  
                         
                              
                              
                                    <div class="table-responsive" style="padding:17px;background-color:#b3fff0">
                                    <h4 style="text-align:center;font-family:Apple Chancery"><b>
                                                DATA LOGBOOK<b></h4>
                                        <table id="table_user" class="align-middle mb-0 table table-condensed table-stripe"style="background-color:#e6ffff;font-family:comic sans MS">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Nomor WO</th>
                                                <th class="text-center">Nama WO</th>
                                                <th class="text-center">Nama WO</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                              <tr>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:right"></th>
                                                  <th style="text-align:center"></th>
                                             </tr>
                                          </tfoot>
                                        </table>
                                    </div>
                             
                                    <div class="d-block text-center card-footer">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                   