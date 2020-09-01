<html>
<?php
$this->load->View('head');

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.css">

<body>

	<!-- Left Panel -->
	<?php
	$this->load->View('navbar');
	?>

	<br>
	<div class="typo-headers">
		<h2 class="display-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Pegawai</h2>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php if ($this->session->userdata('level') === 'admin') : ?>
					<button type="button" class="btn btn-primary float-left" value="Import Data" onclick="window.location.href='<?php echo base_url("Datapegawai/form"); ?>'" />Import Pegawai</button><?php endif; ?>
				<br><br>
				<!-- DATA TABLE-->
				<div class="table-responsive m-b-30">
					<table class="table table-striped" align="center" id="DataPegawai">
						<thead class="thead-dark" align="center">
							<tr>
								<th>No</th>
								<th>No Pegawai</th>
								<th>Nama Pegawai</th>
								<th>Gender</th>
								<th>PERSG</th>
								<th>PERSK</th>
								<th>Birth Date</th>
								<th>Age</th>
								<th>Position Text</th>
								<th>Org Unit</th>
								<th>Org. Unit Text</th>
								<th>Job Text</th>
								<th>Date Input</th>
							</tr>
						</thead>
						<tbody align="center">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
$this->load->View('down');
?>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</html>
<script>
	$(document).ready(function() {
		// ini adalah fungsi untuk mengambil data pegawai dan di  incluce ke dalam datatable
		var DataPegawai = $('#DataPegawai').DataTable({
			"ajax": "<?= base_url("Datapegawai/DataPegawai") ?>",
			stateSave: true,
			"order": []
		});
	});
</script>