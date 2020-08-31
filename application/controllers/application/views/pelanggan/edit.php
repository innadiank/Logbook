<!DOCTYPE html>
<html >


<body id="page-top">

	
	<div id="wrapper">

		
		<div id="content-wrapper">

			<div class="container-fluid">

				
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('pelanggan/list') ?>"><i class="fas fa-arrow-right"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $pelanggan->idPelanggan?>" />

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

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

			
			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		

</body>

</html>