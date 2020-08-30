<!-- Modal untuk tambah data Unit -->
<div class="modal fade" id="tambahunit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Unit</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
<form id="formtambahdataunit">
	<div class="form-group row">
			<label ondragstart="return false;" for="inputorg_unit" class="col-sm-4 col-form-label">Nama Org.Unit</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="org_unit" placeholder="Org.Unit" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputunitvp" class="col-sm-4 col-form-label">Unit VP</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="unitvp" placeholder="Unit VP" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputdirektorat" class="col-sm-4 col-form-label">Direktorat</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="direktorat" placeholder="Direktorat" required>
			</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
	<button type="submit" class="btn btn-primary">Tambah Data Unit</button>
</div>
</form>
</div>
</div>
</div>

<!-- Modal untuk edit data unit -->
<div class="modal fade" id="editunit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Edit Data Unit</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
 <div id="formdataunit">

 </div>
</div>
</div>
</div>
<script>
$(document).ready(function () {
	// ini adalah fungsi untuk mengambil data unit dan di  incluce ke dalam datatable
		var DataUnit = $('#DataUnit').DataTable({
						"ajax": "<?=base_url("Unit/DataUnit")?>",
						stateSave: true,
						"order": []
		})

		 // fungsi untuk menambah data
		// pilih selector dari yang id formtambahdataunit
		$('#formtambahdataunit').on('submit', function () {
			var org_unit = $('#org_unit').val(); // diambil dari id org_unit yang ada diform modal
			var unitvp = $('#unitvp').val(); // diambil dari id unitvp yanag ada di form modal
			var direktorat = $('#direktorat').val(); // diambil dari id direktorat yanag ada di form modal

			$.ajax({
				type: "post",
				url: "<?=base_url('Unit/tambahunit')?>",
				beforeSend :function () {
					swal({
							title: 'Menunggu',
							html: 'Memproses data',
							onOpen: () => {
								swal.showLoading()
							}
						})
					},
				data: {org_unit:org_unit,unitvp:unitvp,direktorat:direktorat}, // ambil datanya dari form yang ada di variabel
				dataType: "JSON",
				success: function (data) {
					DataUnit.ajax.reload(null,false);
					swal({
							type: 'success',
							title: 'Tambah Unit',
							text: 'Anda Berhasil Menambah Unit'
						})
						// bersihkan form pada modal
						$('#tambahunit').modal('hide');
						// tutup modal
						$('#org_unit').val('');
						$('#unitvp').val('');
						$('#direktorat').val('');
						$(".modal-backdrop").remove();

				}
			})
			return true;
		});
		// fungsi untuk edit data
		//pilih selector dari table id unit dengan class .ubah-unit
		$('#DataUnit').on('click','.ubah-unit', function () {
			// ambil element id pada saat klik ubah
			var id =  $(this).data('id');

			$.ajax({
				type: "post",
				url: "<?=base_url('Unit/formedit')?>",
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
					$('#editunit').modal('show');
					$('#formdataunit').html(data);

					// proses untuk mengubah data
					$('#formubahdataunit').on('submit', function () {
							 // diambil dari id nama yang ada diform modal
							var editunitvp = $('#editunitvp').val();
							var editdirektorat = $('#editdirektorat').val();
							var editunit = $('#editunit').val();
							var id = $('#idunit').val(); //diambil dari id yang ada di form modal
							$.ajax({
								type: "post",
								url: "<?=base_url('Unit/ubahunit')?>",
								beforeSend :function () {
									swal({
											title: 'Menunggu',
											html: 'Memproses data',
											onOpen: () => {
												swal.showLoading()
											}
										})
									},
								data: {editunitvp:editunitvp,editdirektorat:editdirektorat,editunit:editunit,id:id}, // ambil datanya dari form yang ada di variabel

								success: function (data) {
									DataUnit.ajax.reload(null,false);
									swal({
											type: 'success',
											title: 'Update Persk',
											text: 'Anda Berhasil Mengubah Data Persk'
										})
										// bersihkan form pada modal
										$('#editunit').modal('hide');
								}
							})
							return false;
						});
				}
			});
		});
		// fungsi untuk hapus data
		//pilih selector dari table id unit dengan class .hapus-unit
		$('#DataUnit').on('click','.hapus-unit', function () {
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
							url:"<?=base_url('Unit/hapusunit')?>",
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
								DataUnit.ajax.reload(null, false)
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
