<!-- Modal untuk tambah data Jobcategory -->
<div class="modal fade" id="tambahjobcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Jobcategory</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
<form id="formtambahdatajobcategory">
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobtext" class="col-sm-4 col-form-label">Jobtext</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="jobtext" placeholder="Jobtext" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobcat" class="col-sm-4 col-form-label">Jobcat</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="jobcat" placeholder="Jobcat" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Jobclass</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="jobclass" placeholder="jobclass" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputstatus" class="col-sm-4 col-form-label">Status</label>
			<div class="col-sm-6">
			<select name="status" id="status" class="form-control" required>
													<option value="" disabled="" selected="">Pilih Status</option>
													<option value="Struktural">Struktural</option>
													<option value="Fungsional">Fungsional</option>
													<option value="Crew">Crew</option>
													<option value="Work Outside GA">Work Outside GA</option>
													<option value="Project">Project</option>
			</select>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputlevel" class="col-sm-4 col-form-label">Level</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="level" placeholder="Level" required>
			</div>
	</div>
	<small><a href="<?php echo base_url('Help') ?>">Need More Information?</a></small>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()" >Tutup</button>
	<button type="submit" class="btn btn-primary">Tambah Data Jobcategory</button>
</div>
</form>
</div>
</div>
</div>

<!-- Modal untuk edit data persk -->
<div class="modal fade" id="editjobcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Edit Data Jobcategory</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
 <div id="formdatajobcategory">

 </div>
</div>
</div>
</div>
<script>
$(document).ready(function () {
	// ini adalah fungsi untuk mengambil jobcategory dan di  incluce ke dalam datatable
		var DataJobcategory = $('#DataJobcategory').DataTable({
						"ajax": "<?=base_url("Jobcategory/DataJobcategory")?>",
						stateSave: true,
						"order": []
		})
		 // fungsi untuk menambah data
		// pilih selector dari yang id formtambahdatajobcategory
		$('#formtambahdatajobcategory').on('submit', function () {
			var jobtext = $('#jobtext').val(); // diambil dari id jobtext yang ada diform modal
			var jobcat = $('#jobcat').val(); // diambil dari id jobcat yang ada diform modal
			var jobclass = $('#jobclass').val(); // diambil dari id jobclass yang ada diform modal
			var status = $('#status').val(); // diambil dari id status yang ada diform modal
			var level = $('#level').val(); // diambil dari id level yang ada diform modal

			$.ajax({
				type: "post",
				url: "<?=base_url('Jobcategory/tambahjobcategory')?>",
				beforeSend :function () {
					swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
				data: {jobtext:jobtext,jobcat:jobcat,jobclass:jobclass,status:status,level:level}, // ambil datanya dari form yang ada di variabel
				dataType: "JSON",
				success: function (data) {
					DataJobcategory.ajax.reload(null,false);
					swal({
							type: 'success',
							title: 'Tambah Jobcategory',
							text: 'Anda Berhasil Menambah Jobcategory'
						})
						// bersihkan form pada modal
						$('#tambahjobcategory').modal('hide');
						// tutup modal
						$('#jobtext').val('');
						$('#jobcat').val('');
						$('#jobclass').val('');
						$('#status').val('');
						$('#level').val('');
						$(".modal-backdrop").remove();

				}
			})
			return true;
		});
		// fungsi untuk edit data
		//pilih selector dari table id jobcategory dengan class .ubah-jobcategory
		$('#DataJobcategory').on('click','.ubah-jobcategory', function () {
			// ambil element id pada saat klik ubah
			var id =  $(this).data('id');

			$.ajax({
				type: "post",
				url: "<?=base_url('Jobcategory/formedit')?>",
				beforeSend :function () {
					swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
				data: {id:id},
				success: function (data) {
					swal.close();
					$('#editjobcategory').modal('show');
					$('#formdatajobcategory').html(data);

					// proses untuk mengubah data
					$('#formubahdatajobcategory').on('submit', function () {
							 // diambil dari id nama yang ada diform modal
							var editjobtext = $('#editjobtext').val();
							var editjobcat = $('#editjobcat').val();
							var editjobclass = $('#editjobclass').val();
							var editstatus = $('#editstatus').val();
							var editlevel = $('#editlevel').val();

							var id = $('#idjob').val(); //diambil dari id yang ada di form modal
							$.ajax({
								type: "post",
								url: "<?=base_url('Jobcategory/ubahjobcategory')?>",
								beforeSend :function () {
									swal({
											title: 'Menunggu',
											html: 'Memproses data',
											onOpen: () => {
												swal.showLoading()
											}
										})
									},
								data: {editjobtext:editjobtext,editjobcat:editjobcat,editjobclass:editjobclass,editstatus:editstatus,editlevel:editlevel,id:id}, // ambil datanya dari form yang ada di variabel

								success: function (data) {
									DataJobcategory.ajax.reload(null,false);
									swal({
											type: 'success',
											title: 'Update Jobcategory',
											text: 'Anda Berhasil Mengubah Data Jobcategory'
										})
										// bersihkan form pada modal

										$('#editjobcategory').modal('hide');

								}
							})
							return false;
						});
				}
			});
		});
		// fungsi untuk hapus data
		//pilih selector dari table id DataJobcategory dengan class .hapus-jobcategory
		$('#DataJobcategory').on('click','.hapus-jobcategory', function () {
			var id =  $(this).data('id');
			swal({
					title: 'Konfirmasi',
					text: "Anda ingin menghapus ",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Hapus',
					confirmButtonColor: '#d33',
					cancelButtonColor: '#3085d6',
					cancelButtonText: 'Tidak',
					reverseButtons: true
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url:"<?=base_url('Jobcategory/hapusjobcategory')?>",
							method:"post",
							beforeSend :function () {
							swal({
									title: 'Menunggu',
									html: 'Memproses data',
									onOpen: () => {
										swal.showLoading()
									}
								})
							},
							data:{id:id},
							success:function(data){
								swal(
									'Hapus',
									'Berhasil Terhapus',
									'success'
								)
								DataJobcategory.ajax.reload(null, true)
							}
						})
				} else if (result.dismiss === swal.DismissReason.cancel) {
						swal(
							'Batal',
							'Anda membatalkan penghapusan',
							'error'
						)
					}
				})
			});

	});

</script>
