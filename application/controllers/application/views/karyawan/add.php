<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah List Karyawan</h1>
           
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
					<a href="<?php echo site_url('karyawan') ?>"><i class="fas fa-arrow-right"></i> Back</a>
				</div>
				<div class="card-body">

					<form action="<?php echo site_url('karyawan/add') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
							<label for="nama">Nama*</label>
							<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
							 type="text" name="nama" placeholder="Nama" />
							<div class="invalid-feedback">
								<?php echo form_error('nama') ?>
							</div>
						</div>

						<div class="form-group">
							<label for="username">Username*</label>
							<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
							 type="text" name="username"  placeholder="Username" />
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
						</div>


						<div class="form-group">
							<label for="password">Password*</label>
							<input class="form-control-file <?php echo form_error('password') ? 'is-invalid':'' ?>"
							 type="password" name="password"  placeholder="Password"/>
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
						</div>


						<input class="btn btn-success" type="submit" name="btn" value="Save" />
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

