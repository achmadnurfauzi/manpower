<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a ondragstart="return false;" href="<?php echo base_url(); ?>Beranda">
                    <img ondragstart="return false;" src="<?php echo base_url(); ?>images/garuda.png" width="200" height="52" alt="Garuda">
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <!--ACCESS MENUS FOR ADMIN-->
                    <?php if ($this->session->userdata('level') === 'admin') : ?>
                        <li>
                            <a ondragstart="return false;" href="<?php echo base_url(); ?>Beranda">
                                <i class="fas fa-sun-o"></i>Dashboard
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a ondragstart="return false;" href="<?php echo base_url(); ?>Chart_pegawai">
                                <i class="fas fa-bar-chart-o"></i>
                                <span class="bot-line"></span>Chart</a>
                        </li>
                        <li class="has-sub">
                            <a ondragstart="return false;" href="#">
                                <i class="fas fa-archive"></i>
                                <span class="bot-line"></span>Data</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Datapegawai">Data Pegawai</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Persk">Data PERSK</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>unit">Data Unit</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Jobcategory">Data Jobcategory</a>
                                </li>
                            </ul>
                        </li>

                        <!--ACCESS MENUS FOR USER-->
                    <?php elseif ($this->session->userdata('level') === 'user') : ?>
                        <li>
                            <a ondragstart="return false;" href="<?php echo base_url(); ?>Beranda">
                                <i class="fas fa-sun-o"></i>Dashboard
                                <span class="bot-line"></span>
                            </a>
                        </li>
                        <li>
                            <a ondragstart="return false;" href="<?php echo base_url(); ?>Chart_pegawai">
                                <i class="fas fa-bar-chart-o"></i>
                                <span class="bot-line"></span>Chart</a>
                        </li>
                        <li class="has-sub">
                            <a ondragstart="return false;" href="#">
                                <i class="fas fa-archive"></i>
                                <span class="bot-line"></span>Data</a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Datapegawai">Data Pegawai</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Persk">Data PERSK</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>unit">Data Unit</a>
                                </li>
                                <li>
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Jobcategory">Data Jobcategory</a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            <?php
            $session = $this->session->userdata('level');
            if (!empty($session)) { ?>
                <div class="account-wrap">
                    <div class="account-item account-item clearfix js-item-menu">
                        <div class="image">
                            <img ondragstart="return false;" src="<?php echo base_url(); ?>images/avatar2.png" alt="Avatar" />
                        </div>
                        <div class="content">
                            <a ondragstart="return false;" class="js-acc-btn" href="#"><?php echo $this->session->userdata('name'); ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <img ondragstart="return false;" src="<?php echo base_url(); ?>images/avatar2.png" alt="Avatar" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h3 class="name">
                                        <a ondragstart="return false;" href="#"><?php echo $this->session->userdata('name'); ?></a>
                                    </h3>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <?php if ($this->session->userdata('level') === 'admin') : ?>
                                        <a ondragstart="return false;" href="<?php echo base_url(); ?>Dataakun">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    <?php endif; ?>
                                </div>
                                <div class="account-dropdown__item">
                                    <a ondragstart="return false;" href="<?php echo base_url(); ?>Help">
                                        <i class="zmdi zmdi-alert-polygon"></i>User Guide</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a ondragstart="return false;" href="<?php echo site_url('Login/logout'); ?>">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
            <?php } ?>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->