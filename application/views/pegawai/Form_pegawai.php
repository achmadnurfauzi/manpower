<br>
<div class="section__content section__content--p10">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-4" style="margin-left: 20px">
				<div class="card">
					<div class="card-header bg-dark text-white">
						<strong ondragstart="return false;" class="card-title">Form Import Data Pegawai</strong>
					</div>

					<div class="card-body">

						<!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
						<form method="post" action="<?php echo base_url("Datapegawai/import"); ?>" enctype="multipart/form-data">
							<!--
																-- Buat sebuah input type file
																-- class pull-left berfungsi agar file input berada di sebelah kiri
																-->
							<input type="file" name="file" required>
							<br><br />

							<!--
																-- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
																-->
							<input type="submit" class="btn btn-primary btn-sm" name="import" value="Import">
							<a ondragstart="return false;" href="<?php echo base_url("excel/pegawaidata_Format.xlsx"); ?>" class="btn btn-primary btn-sm">Download Format</a>
							<a ondragstart="return false;" class="btn btn-danger btn-sm" type="button" value="Cancel" href="<?php echo base_url("Datapegawai"); ?>"> Cancel </a>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {
		// Sembunyikan alert validasi kosong
		$("#kosong").hide();
	});
</script>