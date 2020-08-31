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

						<a href="<?php echo site_url('barang/list') ?>"><i class="fas fa-arrow-right"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $barang->idBarang?>" />

							<div class="form-group">
								<label for="namaBarang">Nama Barang*</label>
								<input class="form-control <?php echo form_error('namaBarang') ? 'is-invalid':'' ?>"
								 type="text" name="namaBarang" placeholder="Nama Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('namaBarang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tipeBarang">Tipe Barang*</label>
								<input class="form-control <?php echo form_error('tipeBarang') ? 'is-invalid':'' ?>"
								 type="text" name="tipeBarang" placeholder="Tipe Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('tipeBarang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga">Harga*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="double" name="harga"  placeholder="Harga" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="tglExp">Tanggal Exp*</label>
								<input class="form-control-file <?php echo form_error('tglExp') ? 'is-invalid':'' ?>"
								 type="date" name="tglExp"  placeholder="Tanggal Exp"/>
								<div class="invalid-feedback">
									<?php echo form_error('tglExp') ?>
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