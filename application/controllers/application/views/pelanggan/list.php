<script>var base_url = "<?php echo base_url()?>";</script>
<script src="js/pelanggan/list.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:#d9d9d9">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color:#d9d9d9">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Pelanggan</h1>
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <style>
    td{
      background-color:#b3b3ff;
      font-family:Comic Sans;
    }
    </style>
    <!-- /.content-header -->

    
					<div class="card-body" style="background-color:#d1b3ff">
                    <a href="<?php echo site_url('pelanggan/add') ?>"><i class="fas fa-plus" ></i> Add New</a>
                    <br><br>
                        <div class="table-responsive">
                            <table class="table table-hover" id="table_pelanggan" width="100%" cellspacing="0"  style="background-color:#ccb3ff">
                                <thead>
                                    <tr  style="background-color:#8080ff;font-family:Apple Chancery">
                                        <th>Nama Pelanggan</th>
                                        <th>Alamat</th>
                                        <th>Nomor HP</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="text-align:right"></th>
                                        <th style="text-align:right"></th>
                                        <th style="text-align:right"></th>
                                        <th style="text-align:center"></th>
                                   

                                </tfoot>
                            </table>
                        </div>
                     </div>

           

            
             
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
						
			

</html>