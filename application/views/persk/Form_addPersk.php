<!-- Modal untuk tambah data persk -->
<div class="modal fade" id="tambahpersk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Persk</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
<form id="formtambahdatapersk">
	<div class="form-group row">
			<label ondragstart="return false;" for="inputpersk" class="col-sm-4 col-form-label">Persk</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="persk" placeholder="Persk" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputcategory" class="col-sm-4 col-form-label">Category</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="category" placeholder="Category" required>
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
	<button type="submit" class="btn btn-primary">Tambah Data Persk</button>
</div>
</form>
</div>
</div>
</div>

<!-- Modal untuk edit data persk -->
<div class="modal fade" id="editpersk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Edit Data Persk</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
 <div id="formdatapersk">

 </div>
</div>
</div>
</div>
<script>
$(document).ready(function () {
	// ini adalah fungsi untuk mengambil data persk dan di  incluce ke dalam datatable
		var DataPersk = $('#DataPersk').DataTable({
						"ajax": "<?=base_url("Persk/DataPersk")?>",
						stateSave: true,
						"order": []
		})

		 // fungsi untuk menambah data
		// pilih selector dari yang id formtambahdatapersk
		$('#formtambahdatapersk').on('submit', function () {
			var persk = $('#persk').val(); // diambil dari id persk yang ada diform modal
			var category = $('#category').val(); // diambil dari id category yanag ada di form modal
			var level = $('#level').val(); // diambil dari id level yang ada diform modal

			$.ajax({
				type: "post",
				url: "<?=base_url('Persk/tambahpersk')?>",
				beforeSend :function () {
					swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
				data: {persk:persk,category:category,level:level}, // ambil datanya dari form yang ada di variabel
				dataType: "JSON",
				success: function (data) {
					DataPersk.ajax.reload(null,false);
					swal({
							type: 'success',
							title: 'Tambah Persk',
							text: 'Anda Berhasil Menambah Persk'
						})
						// bersihkan form pada modal
						$('#tambahpersk').modal('hide');
						// tutup modal
						$('#persk').val('');
						$('#category').val('');
						$('#level').val('');
						$(".modal-backdrop").remove();

				}
			})
			return true;
		});
		// fungsi untuk edit data
		//pilih selector dari table id persk dengan class .ubah-persk
		$('#DataPersk').on('click','.ubah-persk', function () {
			// ambil element id pada saat klik ubah
			var id =  $(this).data('id');

			$.ajax({
				type: "post",
				url: "<?=base_url('Persk/formedit')?>",
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
					$('#editpersk').modal('show');
					$('#formdatapersk').html(data);

					// proses untuk mengubah data
					$('#formubahdatapersk').on('submit', function () {
							var editpersk = $('#editpersk').val();
							var editcategory = $('#editcategory').val();
							var editlevel = $('#editlevel').val();
							var id = $('#idpersk').val(); //diambil dari id yang ada di form modal
							$.ajax({
								type: "post",
								url: "<?=base_url('Persk/ubahpersk')?>",
								beforeSend :function () {
									swal({
											title: 'Menunggu',
											html: 'Memproses data',
											onOpen: () => {
												swal.showLoading()
											}
										})
									},
								data: {editpersk:editpersk,editcategory:editcategory,editlevel:editlevel,id:id}, // ambil datanya dari form yang ada di variabel

								success: function (data) {
									DataPersk.ajax.reload(null,false);
									swal({
											type: 'success',
											title: 'Update Persk',
											text: 'Anda Berhasil Mengubah Data Persk'
										})
										// bersihkan form pada modal
										$('#editpersk').modal('hide');
								}
							})
							return false;
						});
				}
			});
		});
		// fungsi untuk hapus data
		//pilih selector dari table id persk dengan class .hapus-persk
		$('#DataPersk').on('click','.hapus-persk', function () {
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
							url:"<?=base_url('Persk/hapuspersk')?>",
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
								DataPersk.ajax.reload(null, false)
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
