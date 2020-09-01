<!-- alert -->
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                <i class="zmdi zmdi-check-circle"></i>
                <span ondragstart="return false;" class="content">Selamat Datang <?php echo $this->session->userdata('name'); ?></span>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="zmdi zmdi-close-circle"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>

<center ondragstart="return false;">
    <h2 ondragstart="return false;" class="pb-2 display-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quick Access</h2>
    <hr ondragstart="return false;" width="80%">
</center>
<div class="section_content section_content--p30">
    <section class="au-breadcrumb2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>Datapegawai">
                                <h3 class="title-2 m-b-40">Pegawai</h3>
                                <div class="icon">
                                    <i class="zmdi zmdi-accounts"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>Persk">
                                <h3 ondragstart="return false;" class="title-2 m-b-40">PERSK</h3>
                                <div class="icon">
                                    <i class="zmdi zmdi-pin-account"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>unit">
                                <h3 ondragstart="return false;" class="title-2 m-b-40">Unit</h3>
                                <div class="icon">
                                    <i class="zmdi zmdi-case"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <div class="au-card-inner"><a ondragstart="return false;" href="<?php echo base_url(); ?>jobcategory">
                                <h3 ondragstart="return false;" class="title-2 m-b-40">Job Category</h3>
                                <div class="icon">
                                    <i class="zmdi zmdi-folder-person"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="section_content section_content--p30">
    <section class="au-breadcrumb2">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </section>
</div>


<!-- COPYRIGHT-->
<section class="p-t-80 p-b-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p ondragstart="return false;">Copyright © 2019 Garuda Indonesia. All rights reserved. Made with ❤.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COPYRIGHT-->