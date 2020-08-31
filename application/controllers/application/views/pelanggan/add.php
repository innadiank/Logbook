<script src="views/core/log/header.php"></script>
<script src="views/core/log/menu_v.php"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah List Pelanggan</h1>
           
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
    <!-- /.content-header -->


	<body id="page-top">

	
<div id="wrapper">

	

	<div id="content-wrapper">

		<div class="container-fluid">

			
			<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
			<?php endif; ?>

			<div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo site_url('pelanggan') ?>"><i class="fas fa-arrow-right"></i> Back</a>
				</div>
				<div class="card-body">

					<form action="<?php echo site_url('pelanggan/add') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="namaPelanggan">Nama Pelanggan*</label>
							<input class="form-control <?php echo form_error('namaPelanggan') ? 'is-invalid':'' ?>"
							 type="text" name="namaPelanggan" placeholder="Nama Pelanggan" />
							<div class="invalid-feedback">
								<?php echo form_error('namaPelanggan') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="alamat">Alamat*</label>
							<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
							 type="text" name="alamat"  placeholder="Alamat" />
							<div class="invalid-feedback">
								<?php echo form_error('alamat') ?>
							</div>
						</div>


						<div class="form-group">
							<label for="nomorHp">Nomor HP*</label>
							<input class="form-control-file <?php echo form_error('nomorHp') ? 'is-invalid':'' ?>"
							 type="number" name="nomorHp" min="0" placeholder="Nomor HP"/>
							<div class="invalid-feedback">
								<?php echo form_error('nomorHp') ?>
							</div>
						</div>


						<input class="btn btn-success" id="save" type="save" name="btn" value="save" />
					</form>

				</div>

				<div class="card-footer small text-muted">
					* required fields
				</div>


			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->



</body>
           

            
             
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
						
			

</html>
