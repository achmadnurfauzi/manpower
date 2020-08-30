<html>
<!-- Title Page-->
<title>Account</title>

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

                 <?php if($this->session->userdata('level')=='admin'):?>
	         <div class="typo-headers">
					  <h2 ondragstart="return false;" class="display-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Akun</h2></div>
            <hr>
                  <div class="container-fluid">
                  	<div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#tambahakun">Tambah Data Pengguna</button>
                <br><br><br>
                      <!-- DATA TABLE-->
                      <div class="table-responsive m-b-30">
                      	<div></div>
                        <table class="table table-striped" align="center" id="Akun">
                        <thead class="thead-dark" align="center">
											<tr>
													<th>No</th>
													<th>Nama Pengguna</th>
													<th>Username</th>
													<th>User Level</th>
                          <th>Password</th>
                          <th>Ganti Passwword</th>
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

        <?php elseif($this->session->userdata('level')=='user'):?>
          <br>
          <br>
          <br>
        <section class="p-b-20">
                <div class="container">
                    <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong ondragstart="return false;" class="card-title pl-2">Data Pengguna</strong>
                                    </div>
                                    <div class="card-body">
                                      <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="<?php echo base_url() ;?>images/avatar2.png" width="170px" height="170px" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $this->session->userdata('name');?></h5>
                                            <hr>
                                            <br>
                                        <div class="card-text text-sm-center">
                                            <div class="form-group row">
                                                <label ondragstart="return false;" for="inputnama_user" class="col-sm-4 col-form-label">Nama Pengguna</label>
                                                <div class="col-sm-6">
                                                <input type="text" disabled class="form-control" id="editnama_user" value="<?php echo $this->session->userdata('name');?>"  placeholder="Nama Pengguna">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label ondragstart="return false;" for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                                <div class="col-sm-6">
                                                <input type="password" disabled class="form-control" value="<?php echo $this->session->userdata('password');?>" id="editpassword"  placeholder="Password" required>
                                                </div>
                                            </div>
                                            <br>
                                            <button class='btn btn-success ubah-password' data-toggle='modal' data-id=".$value['id'].">Ganti Password</button>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                             </div>
                           </form>
                      </div>
                    </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div><?php endif;?>
</body>
	  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.1/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</html>
