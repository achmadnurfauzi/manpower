<html>

<!-- Title Page-->
<title>Garuda Indonesia - Data PERSK</title>

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
					  <h2 ondragstart="return false;" class="display-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data PERSK</h2></div>
            <hr>
                <div class="section__content section__content--p10">
                    <div class="container-fluid">
							               <div class="col-ld-3">
                <?php if($this->session->userdata('level')==='admin'):?>
                                 <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#tambahpersk">Tambah Data Persk</button>


                               <br><br>

                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-striped" align="center" id="DataPersk">
                        <thead class="thead-dark" align="center">
											<tr>
                        						<th>No</th>
												<th>PERSK</th>
												<th>Category</th>
                        						<th>Level</th>
                        						<th>Action</th>
											</tr>
										</thead>
										<tbody ondragstart="return false;" align="center">
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>

			<?php elseif($this->session->userdata('level')==='user'):?>
							<!-- DATA TABLE-->
                                <div class="table-responsive m-b-30">
                                    <table class="table table-striped" align="center" id="DataPersk">
                        <thead class="thead-dark" align="center">
											<tr>
                        						<th>No</th>
												<th>PERSK</th>
												<th>Category</th>
                        						<th>Level</th>
											</tr>
										</thead>
										<tbody align="center">
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
			<?php endif;?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</html>
