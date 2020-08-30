<!DOCTYPE html>
<!-- Title Page-->
<title>Garuda Indonesia - Help</title>

<?php
        $this->load->View('head');
?>

<!-- Bootstrap CSS File -->
<link href="<?php echo base_url() ;?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="<?php echo base_url() ;?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ;?>lib/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url() ;?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="<?php echo base_url() ;?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url() ;?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">


<body>

    <!-- Left Panel -->
<?php
        $this->load->View('navbar');
?>
    <br>
    <!--==========================
          Frequently Asked Questions Section
        ============================-->
        <div class="main content">
        <section id="faq">
          <div class="container">
            <header class="section__content section__content--p30">
              <div class="typo-headers">
              <strong><center><h1 class="pb-2 display-4">User Guide</h1></center></strong>
            </header>
            <br><br>

            <div class="row">
              <div class="col-md-12">
            <div class="card">
            <div class="card-body">
            <ul id="faq-list" class="wow fadeInUp">
              <li>
                <a ondragstart="return false;" data-toggle="collapse" class="collapsed" href="#faq1">Bagaimana cara menghidupkan XAMPP?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Buka aplikasi "XAMPP" yang dapat ditemukan di Start Menu ataupun melalui icon di Desktop.
                  <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu click pada Action "Start" pada module Apache dan MySQL.
                    <br>
                  </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq2" class="collapsed">Bagaimana cara mengurutkan data tiap row secara ASCENDING atau DESCENDING? <i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Dalam tiap page <b>Data</b> terdapat table, jika ingin melakukan sort berdasarkan ASC maka click tanda panah atas di table yang akan di sort.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Dan jika ingin melakukan sort berdasarkan DESC maka click tanda panah bawah di table yang akan di sort.
                    <br>
                  </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana cara search data dan menambah limit view row pada table? <i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Dalam tiap page <b>Data</b> terdapat table, jika ingin melakukan search data maka bisa dilakukan dipojok kanan atas table. (ex: ingin mencari no.pegawai tertentu).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Dan jika ingin menambah view limit data pada table maka click button show entries dipojok kiri atas (default 10 row, anda bisa memilih upto 100 row view.)
                    <br>
                  </p>
                </div>
              </li>

              <?php if($this->session->userdata('level')==='admin'):?>
              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq4" class="collapsed">Bagaimana cara mengimport Database menggunakan phpMyAdmin? <i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Ketikkan <b>localhost/phpmyadmin</b> pada browser (pastikan XAMPP telah aktif).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu click "New" pada bagian kiri menu phpMyAdmin.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Kemudian buat database baru dengan nama <b>"manpower",</b> setelah itu click <b>"create".</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah membuat database, pilih menu import dibagian atas layar dan pilih file <b>.sql</b> yang sudah disediakan. Kemudian click <b>Go</b> dibagian bawah layar.
                    <br>
                  </p>
                </div>
              </li>
              <?php endif;?>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq5" class="collapsed">Bagaimana cara membuka aplikasi Manpower Monitoring System?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq5" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Ketikkan <b>localhost/manpower</b> pada tab URL browser untuk mengakses Manpower Monitoring System.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu lakukan login sesuai username dan password yang telah ditentukan.
                    <br>
                  </p>
                </div>
              </li>

              <?php if($this->session->userdata('level')==='admin'):?>
              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq6" class="collapsed">Bagaimana cara mengimport Data Pegawai?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq6" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Click <b>Data Pegawai</b> pada Manpower Monitoring System.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu click tombol <b>Import Pegawai.</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, pilih file yang akan diimport (pastikan file yang akan diimport berekstensi .xlsx).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Click tombol import.
                    <br>
                  </P>
                  <p ondragstart="return false;" style="color:red;">
                    Jika membutuhkan format excel, bisa click tombol <b>Download Format</b> dan jika format excel tidak sesuai, maka buat format template baru dan disimpan dengan nama <b>pegawaidata_Format.xlsx</b> dan disimpan di folder <b>manpower/excel.</b>
                  </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq7" class="collapsed">Bagaimana cara melakukan CRUD pada data PERSK?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq7" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tambah Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menambah data PERSK maka click button <b>Tambah Data PERSK</b> yang berada di page PERSK.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu isi data yang diinginkan (lihat urutan level pada user guide).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Tambah Data PERSK</b> untuk melakukan penginputan data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin mengedit data PERSK maka click button <b>ubah</b> yang berada di page PERSK.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu ubah data category dan level sesuai keinginan (lihat urutan level pada user guide).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data PERSK</b> untuk melakukan Ubah data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hapus Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menghapus data PERSK maka click button <b>Hapus</b> yang berada di page PERSK.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu pilih data yang ingin dihapus.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data PERSK</b> untuk melakukan Hapus data.
                    <br>
                    <p ondragstart="return false;" style="color:red;">
                    Jika ingin menghapus data maka harus mengosongkan data yang ada di table pegawai, karena data yang ada di PERSK berelasi dengan data pegawai.
                  </p>
                  </P>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq8" class="collapsed">Bagaimana cara melakukan CRUD pada data Unit?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq8" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tambah Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menambah data Unit maka click button <b>Tambah Data Unit</b> yang berada di page Unit.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu isi data yang diinginkan.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Tambah Data Unit</b> untuk melakukan penginputan data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin mengedit data Unit maka click button <b>ubah</b> yang berada di page Unit.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu ubah data Unit VP dan Direktorat sesuai keinginan.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Unit</b> untuk melakukan Ubah data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hapus Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menghapus data Unit maka click button <b>Hapus</b> yang berada di page Unit.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu pilih data yang ingin dihapus.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Unit</b> untuk melakukan Hapus data.
                    <br>
                    <p ondragstart="return false;" style="color:red;">
                    Jika ingin menghapus data maka harus mengosongkan data yang ada di table pegawai, karena data yang ada di Unit berelasi dengan data pegawai.
                  </p>
                  </P>
                </div>
              </li>

               <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq9" class="collapsed">Bagaimana cara melakukan CRUD pada data Job Category?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq9" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tambah Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menambah data Job Category maka click button <b>Tambah Data Job Category</b> yang berada di page Job Category.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu isi data yang diinginkan (lihat urutan level pada user guide).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Tambah Data Job Category</b> untuk melakukan penginputan data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin mengedit data Job Category maka click button <b>ubah</b> yang berada di page Job Category.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu ubah data Category, Job Class, Status, dan Level sesuai keinginan (lihat urutan level pada user guide).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Job Category</b> untuk melakukan Ubah data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hapus Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menghapus data Job Category maka click button <b>Hapus</b> yang berada di page Job Category.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu pilih data yang ingin dihapus.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Job Category</b> untuk melakukan Hapus data.
                    <br>
                    <p ondragstart="return false;" style="color:red;">
                    Jika ingin menghapus data maka harus mengosongkan data yang ada di table pegawai, karena data yang ada di Job Category berelasi dengan data pegawai.
                  </p>
                  </P>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq10" class="collapsed">Bagaimana cara melakukan CRUD pada data Akun?<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq10" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Tambah Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menambah data Akun maka click button <b>Tambah Data Akun</b> yang berada di page Akun.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu isi data yang diinginkan dan pilih role yang sesuai.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Tambah Data Akun</b> untuk melakukan penginputan data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin mengedit data Akun maka click button <b>ubah</b> yang berada di page Akun.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu ubah data Nama Pengguna, Username, dan Role yang diinginkan.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Akun</b> untuk melakukan Ubah data.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Ganti Password&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin mengubah password Akun maka click button <b>Ganti Password</b> yang berada di page Akun.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu ubah password sesuai dengan yang diinginkan (password diproteksi dengan md5).
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ganti Password</b> untuk melakukan Ubah password.
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hapus Data&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika ingin menghapus data Akun maka click button <b>Hapus</b> yang berada di page Akun.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu pilih data yang ingin dihapus.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Selanjutnya, Click <b>Tutup</b> jika ingin kembali, dan click <b>Ubah Data Akun</b> untuk melakukan Hapus data.
                    <br>
                  </P>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq11" class="collapsed">Daftar Level di Jobcategory<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq11" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Struktural&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Vice President
                    <br>
                    &nbsp;&nbsp;2.  &nbsp;&nbsp;General Manager
                    <br>
                    &nbsp;&nbsp;3.  &nbsp;&nbsp;Senior Manager
                    <br>
                    &nbsp;&nbsp;4.  &nbsp;&nbsp;Manager
                    <br>
                    &nbsp;&nbsp;5.  &nbsp;&nbsp;Duty Manager
                    <br>
                    &nbsp;&nbsp;6.  &nbsp;&nbsp;Supervisor
                    <br>
                  </P>
                   <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Fungsional&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Coordinator
                    <br>
                    &nbsp;&nbsp;2.  &nbsp;&nbsp;Partner
                    <br>
                    &nbsp;&nbsp;3.  &nbsp;&nbsp;Leader
                    <br>
                    &nbsp;&nbsp;4.  &nbsp;&nbsp;Expert
                    <br>
                    &nbsp;&nbsp;5.  &nbsp;&nbsp;MT
                    <br>
                    &nbsp;&nbsp;6.  &nbsp;&nbsp;Analyst, Specialist
                    <br>
                  </P>
                   <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Crew&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Captain
                    <br>
                    &nbsp;&nbsp;2.  &nbsp;&nbsp;First Officer
                    <br>
                    &nbsp;&nbsp;3.  &nbsp;&nbsp;Flight Service Manager
                    <br>
                    &nbsp;&nbsp;4.  &nbsp;&nbsp;Flight Attendant
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Work Outside GA&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Secondment Out
                    <br>
                    &nbsp;&nbsp;2.  &nbsp;&nbsp;CDTP FO
                    <br>
                    &nbsp;&nbsp;3.  &nbsp;&nbsp;CDTP FSM
                    <br>
                    &nbsp;&nbsp;4.  &nbsp;&nbsp;CDTP FA
                    <br>
                    &nbsp;&nbsp;5.  &nbsp;&nbsp;CDTP Darat
                    <br>
                  </P>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Project&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Project
                    <br>
                  </P>
                </div>
              </li>

               <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq12" class="collapsed">Daftar Level di Persk<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq12" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Persk&nbsp; :</b>
                    <br>
                    &nbsp;&nbsp;1.  &nbsp;&nbsp;Komisaris
                    <br>
                    &nbsp;&nbsp;2.  &nbsp;&nbsp;Direksi
                    <br>
                    &nbsp;&nbsp;3.  &nbsp;&nbsp;Cockpit
                    <br>
                    &nbsp;&nbsp;4.  &nbsp;&nbsp;Cabin
                    <br>
                    &nbsp;&nbsp;5.  &nbsp;&nbsp;Non Crew
                    <br>
                    &nbsp;&nbsp;6.  &nbsp;&nbsp;MT
                    <br>
                    </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq13" class="collapsed">Menambah Limit Upload saat Import SQL<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq13" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Buka XAMPP Control Panel.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Pada bagian <b>apache</b> click tombol <b>config</b>. Lalu pilih <b>php.ini</b>.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu, tekan <b>ctrl + f</b> dan ketikkan <b>post_max_size</b>.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Lalu pada bagian <b>post_max_size=8M</b> rubah menjadi <b>post_max_size=1000M.</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Dan pada bagian <b>upload_max_filesize=2M</b> rubah menjadi <b>upload_max_filesize=1000M.</b>
                  </p>
                </div>
              </li>
              <?php endif;?>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq14" class="collapsed">Mengubah Memory Limit pada XAMPP (jika data tidak terbaca)<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq14" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Buka XAMPP Control Panel.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Pada bagian <b>apache</b> click tombol <b>config</b>. Lalu pilih <b>php.ini</b>.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Setelah itu, tekan <b>ctrl + f</b> dan ketikkan <b>memory</b>.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Lalu pada bagian <b>memory_limit=128M</b> rubah menjadi <b>memory_limit=1024M.</b>
                  </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq15" class="collapsed">Chart Operasional<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq15" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cara Melihat Chart Berdasarkan UnitVP :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Pada page <b>Chart</b> click button <b>Search Unit.</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Kemudian pilih unit yang ingin ditampilkan.
                  </p>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cara Melihat Chart Berdasarkan Bulan :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Pada page <b>Chart</b> click button <b>Search Bulan.</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Kemudian pilih bulan yang ingin ditampilkan.
                  </p>
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cara Melihat Data Tertentu Ditiap Chart :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Pada page <b>Chart</b> click warna yang berada di atas table, fungsinya untuk mendisable bar yang tidak diinginkan.</b>
                  </p>
                  <p ondragstart="return false;" style="color:red;">
                    Jika data dalam chart tidak muncul, maka data pada chart itu kosong.</b>
                  </p>
                </div>
              </li>

              <li>
                <a ondragstart="return false;" data-toggle="collapse" href="#faq16" class="collapsed">Dashboard Operasional<i class="zmdi zmdi-caret-down"></i></a>
                <div id="faq16" class="collapse" data-parent="#faq-list">
                  <p ondragstart="return false;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Daftar card pada dashboard :</b>
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika click pada card berwarna biru, maka akan dialihkan ke data Pegawai.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika click pada card berwarna oren, maka akan dialihkan ke data PERSK.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika click pada card berwarna hijau, maka akan dialihkan ke data Unit.
                    <br>
                    &nbsp;&nbsp;•  &nbsp;&nbsp;Jika click pada card berwarna merah, maka akan dialihkan ke data Jobcategory.
                  </p>
                </div>
              </li>

               


            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          </div>
        </section><!-- #faq -->
</body>

</html>
<!-- end document-->
<style type="text/css">
  /*
  Theme Name: Rapid
  Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  Author: BootstrapMade.com
  License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

body {
  background: #fff;
  color: #444;
  font-family: "Poppins", sans-serif;
}

a {
  color: #1bb1dc;
  transition: 0.5s;
}

a:hover,
a:active,
a:focus {
  color: #0a98c0;
  outline: none;
  text-decoration: none;
}

p {
  padding: 0;
  margin: 0 0 30px 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}

/* Back to top button */

.back-to-top {
  position: fixed;
  display: none;
  background: #1bb1dc;
  color: #fff;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 50%;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}

.back-to-top i {
  padding-top: 12px;
  color: #fff;
}

/* Prelaoder */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #f2f2f2;
  border-top: 6px solid #1bb1dc;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: animate-preloader 1s linear infinite;
  animation: animate-preloader 1s linear infinite;
}

@-webkit-keyframes animate-preloader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes animate-preloader {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/

#topbar {
  padding: 0 0 10px 0;
  font-size: 14px;
  transition: all 0.5s;
}

#topbar .social-links {
  text-align: right;
}

#topbar .social-links a {
  color: #535074;
  padding: 4px 12px;
  display: inline-block;
  line-height: 1px;
}

#topbar .social-links a:hover {
  color: #1bb1dc;
}

#topbar .social-links a:first-child {
  border-left: 0;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/

#header {
  height: 110px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

#header.header-scrolled,
#header.header-pages {
  height: 70px;
  padding: 15px 0;
  background-color: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
}

#header.header-scrolled #topbar,
#header.header-pages #topbar {
  display: none;
}

#header .logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #413e66;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 7px 0;
  max-height: 26px;
}

.main-pages {
  margin-top: 60px;
}

/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/

#intro {
  width: 100%;
  height: 100vh;
  position: relative;
  background: #f5f8fd url("../img/intro-bg.jpg") center top no-repeat;
  background-size: cover;
}

#intro .intro-info h2 {
  color: #413e66;
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 700;
}

#intro .intro-info h2 span {
  color: #1bb1dc;
}

#intro .intro-info .btn-get-started,
#intro .intro-info .btn-services {
  font-family: "Poppins", sans-serif;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #1bb1dc;
  color: #fff;
}

#intro .intro-info .btn-get-started:hover,
#intro .intro-info .btn-services:hover {
  background: #0a98c0;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/

/* Desktop Navigation */

.main-nav {
  /* Drop Down */
  /* Deep Drop Down */
}

.main-nav,
.main-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.main-nav > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.main-nav a {
  display: block;
  position: relative;
  color: #413e66;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
  text-transform: uppercase;
  font-weight: 600;
}

.main-nav a:hover,
.main-nav .active > a,
.main-nav li:hover > a {
  color: #1bb1dc;
  text-decoration: none;
}

.main-nav .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% - 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.main-nav .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.main-nav .drop-down li {
  min-width: 180px;
  position: relative;
}

.main-nav .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #065e77;
}

.main-nav .drop-down ul a:hover,
.main-nav .drop-down ul .active > a,
.main-nav .drop-down ul li:hover > a {
  color: #1bb1dc;
}

.main-nav .drop-down > a:after {
  content: "\f107";
  font-family: FontAwesome;
  padding-left: 10px;
}

.main-nav .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.main-nav .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.main-nav .drop-down .drop-down > a {
  padding-right: 35px;
}

.main-nav .drop-down .drop-down > a:after {
  content: "\f105";
  position: absolute;
  right: 15px;
}

/* Mobile Navigation */

.mobile-nav {
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: 9999;
  overflow-y: auto;
  left: -260px;
  width: 260px;
  padding-top: 18px;
  background: rgba(40, 38, 70, 0.8);
  transition: 0.4s;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #fff;
  padding: 10px 20px;
  font-weight: 500;
}

.mobile-nav a:hover,
.mobile-nav .active > a,
.mobile-nav li:hover > a {
  color: #8dc2fa;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\f078";
  font-family: FontAwesome;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\f077";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  margin: 18px 18px 0 0;
  color: #065e77;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(40, 38, 70, 0.8);
  overflow: hidden;
  display: none;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/

/* Sections Header
--------------------------------*/

.section-header h3 {
  font-size: 36px;
  color: #413e66;
  text-align: center;
  font-weight: 700;
  position: relative;
  font-family: "Poppins", sans-serif;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #535074;
  width: 50%;
}

/* Section with background
--------------------------------*/

.section-bg {
  background: #f5f8fd;
}

/* About Us Section
--------------------------------*/

#about {
  padding: 80px 0;
}

#about .about-content {
  padding-top: 40px;
}

#about .about-content h2 {
  color: #413e66;
  font-family: "Poppins", sans-serif;
  font-weight: 700;
}

#about .about-content h3 {
  color: #696592;
  font-weight: 400;
  font-size: 22px;
  font-style: italic;
}

#about .about-content ul {
  list-style: none;
  padding: 0;
}

#about .about-content ul li {
  padding-bottom: 10px;
}

#about .about-content ul li i {
  font-size: 20px;
  padding-right: 4px;
  color: #1bb1dc;
}

#about .about-img {
  position: relative;
  margin: 30px 30px 30px 30px;
}

#about .about-img img {
  width: 100%;
  border: 8px solid #fff;
  transition: .5s;
}

#about .about-img img:hover {
  width: 100%;
  -webkit-transform: scale(1.03);
  transform: scale(1.03);
}

#about .about-img::before {
  position: absolute;
  left: -31px;
  top: -30px;
  width: 90%;
  height: 92%;
  z-index: -1;
  content: '';
  background-color: #ebf1fa;
  transition: .5s;
}

#about .about-img::after {
  position: absolute;
  right: -31px;
  bottom: -30px;
  width: 90%;
  height: 92%;
  z-index: -1;
  content: '';
  background-color: #ebf1fa;
  transition: .5s;
}

/* Services Section
--------------------------------*/

#services {
  padding: 60px 0 40px 0;
}

#services .box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin: 0 10px 40px 10px;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
}

#services .box:hover {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

#services .icon {
  margin: 0 auto 15px auto;
  padding-top: 12px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
}

#services .icon i {
  font-size: 36px;
  line-height: 1;
}

#services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

#services .title a {
  color: #111;
}

#services .box:hover .title a {
  color: #1bb1dc;
}

#services .description {
  font-size: 14px;
  line-height: 28px;
  margin-bottom: 0;
  text-align: left;
}

/* Why Us Section
--------------------------------*/

#why-us {
  padding: 60px 0;
}

#why-us .why-us-content .features {
  margin: 0 0 15px 0;
  padding: 0;
  transition: 0.3s ease-in-out;
}

#why-us .why-us-content .features i {
  font-size: 36px;
  float: left;
}

#why-us .why-us-content .features h4 {
  font-size: 24px;
  font-weight: 600;
  margin-left: 56px;
  color: #413e66;
  margin-bottom: 5px;
}

#why-us .why-us-content .features p {
  font-size: 16px;
  margin-left: 56px;
  color: #555186;
}

#why-us .counters {
  padding-top: 40px;
}

#why-us .counters span {
  font-family: "Poppins", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #555186;
}

#why-us .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
  color: #8a87b6;
}

/* Call To Action Section
--------------------------------*/

#call-to-action {
  background: #2d2b46;
  background-size: cover;
  padding: 40px 0;
}

#call-to-action .cta-title {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

#call-to-action .cta-text {
  color: #fff;
}

#call-to-action .cta-btn {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 26px;
  border-radius: 3px;
  transition: 0.5s;
  margin: 10px;
  border: 3px solid #fff;
  color: #fff;
}

#call-to-action .cta-btn:hover {
  background: #1bb1dc;
  border: 3px solid #1bb1dc;
}

/* Features Section
--------------------------------*/

#features {
  padding: 80px 0;
}

#features h4 {
  font-weight: 600;
  font-size: 24px;
}

/* Portfolio Section
--------------------------------*/

#portfolio {
  padding: 60px 0;
}

#portfolio #portfolio-flters {
  padding: 0;
  margin: 5px 0 35px 0;
  list-style: none;
  text-align: center;
}

#portfolio #portfolio-flters li {
  cursor: pointer;
  margin: 15px 15px 15px 0;
  display: inline-block;
  padding: 6px 10px;
  font-size: 16px;
  line-height: 20px;
  color: #413e66;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

#portfolio #portfolio-flters li:hover,
#portfolio #portfolio-flters li.filter-active {
  color: #1bb1dc;
}

#portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

#portfolio .portfolio-item {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}

#portfolio .portfolio-item .portfolio-wrap {
  overflow: hidden;
  position: relative;
  margin: 0;
}

#portfolio .portfolio-item .portfolio-wrap:hover img {
  opacity: 0.4;
  transition: 0.3s;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  text-align: center;
  opacity: 0;
  transition: 0.2s linear;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 {
  font-size: 22px;
  line-height: 1px;
  font-weight: 700;
  margin-bottom: 14px;
  padding-bottom: 0;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 a {
  color: #fff;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info h4 a:hover {
  color: #1bb1dc;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info p {
  padding: 0;
  margin: 0;
  color: #f8fcff;
  font-weight: 500;
  font-size: 14px;
  text-transform: uppercase;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview,
#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details {
  display: inline-block;
  line-height: 1;
  text-align: center;
  width: 36px;
  height: 36px;
  background: #1bb1dc;
  border-radius: 50%;
  margin: 10px 4px 0 4px;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview i,
#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details i {
  padding-top: 6px;
  font-size: 22px;
  color: #fff;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview:hover,
#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details:hover {
  background: #42c3e8;
}

#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-preview:hover i,
#portfolio .portfolio-item .portfolio-wrap .portfolio-info .link-details:hover i {
  color: #fff;
}

#portfolio .portfolio-item .portfolio-wrap:hover {
  background: #282646;
}

#portfolio .portfolio-item .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

/* Testimonials Section
--------------------------------*/

#testimonials {
  padding: 60px 0;
}

#testimonials .section-header {
  margin-bottom: 40px;
}

#testimonials .testimonial-item .testimonial-img {
  width: 120px;
  border-radius: 50%;
  border: 4px solid #fff;
  float: left;
}

#testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
  margin-left: 140px;
}

#testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0 0 15px 0;
  margin-left: 140px;
}

#testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 0 15px 140px;
}

#testimonials .owl-nav,
#testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

#testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#testimonials .owl-dot.active {
  background-color: #1bb1dc;
}

/* Team Section
--------------------------------*/

#team {
  padding: 60px 0;
}

#team .member {
  text-align: center;
  margin-bottom: 20px;
  position: relative;
  overflow: hidden;
}

#team .member .member-info {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  transition: 0.2s;
  padding: 15px 0;
  background: rgba(29, 28, 41, 0.6);
}

#team .member .member-info-content {
  transition: margin 0.2s;
  height: 40px;
  transition: height 0.4s;
}

#team .member:hover .member-info {
  transition: 0.4s;
}

#team .member:hover .member-info-content {
  height: 80px;
}

#team .member h4 {
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 18px;
  color: #fff;
}

#team .member span {
  font-style: italic;
  display: block;
  font-size: 13px;
  color: #fff;
}

#team .member .social {
  margin-top: 15px;
}

#team .member .social a {
  transition: none;
  color: #fff;
}

#team .member .social a:hover {
  color: #1bb1dc;
}

#team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

/* Clients Section
--------------------------------*/

#clients {
  padding: 60px 0;
}

#clients img {
  max-width: 80%;
  opacity: 0.5;
  transition: 0.3s;
  padding: 15px 0;
}

#clients img:hover {
  opacity: 1;
}

#clients .owl-nav,
#clients .owl-dots {
  margin-top: 5px;
  text-align: center;
}

#clients .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#clients .owl-dot.active {
  background-color: #1bb1dc;
}

/* Pricing Section
--------------------------------*/

#pricing {
  padding: 80px 0;
}

#pricing .card {
  border: 0;
  border-radius: 0px;
  box-shadow: 0 3px 0px 0 rgba(65, 62, 102, 0.08);
  transition: all .3s ease-in-out;
  padding: 36px 0;
  position: relative;
}

#pricing .card:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 0%;
  height: 5px;
  background-color: #1bb1dc;
  transition: 0.5s;
}

#pricing .card:hover {
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
  box-shadow: 0 20px 35px 0 rgba(0, 0, 0, 0.08);
}

#pricing .card:hover:after {
  width: 100%;
}

#pricing .card .card-header {
  background-color: white;
  border-bottom: 0px;
  -moz-text-align-last: center;
  text-align-last: center;
}

#pricing .card .card-title {
  margin-bottom: 16px;
  color: #535074;
}

#pricing .card .card-block {
  padding-top: 0;
  text-align: center;
}

#pricing .card .list-group-item {
  border: 0px;
  padding: 6px;
  color: #413e66;
  font-weight: 300;
}

#pricing .card h3 {
  font-size: 64px;
  margin-bottom: 0px;
  color: #535074;
}

#pricing .card h3 .currency {
  font-size: 30px;
  position: relative;
  font-weight: 400;
  top: -30px;
  letter-spacing: 0px;
}

#pricing .card h3 .period {
  font-size: 16px;
  color: #6c67a3;
  letter-spacing: 0px;
}

#pricing .card .list-group {
  margin-bottom: 15px;
}

#pricing .card .btn {
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  color: #5f5b96;
  border-radius: 0;
  padding: 10px 24px;
  letter-spacing: 1px;
  border-radius: 3px;
  display: inline-block;
  background: #1bb1dc;
  color: #fff;
}

#pricing .card .btn:hover {
  background: #0a98c0;
}

/* Frequently Asked Questions Section
--------------------------------*/

#faq {
  padding: 60px 0;
  overflow: hidden;
}

#faq #faq-list {
  padding: 0;
  list-style: none;
}

#faq #faq-list li {
  border-bottom: 1px solid #ebebeb;
}

#faq #faq-list a {
  padding: 22px 0;
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 20px;
  line-height: 1;
  font-weight: 400;
  padding-right: 20px;
}

#faq #faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 20px;
}

#faq #faq-list p {
  margin-bottom: 20px;
}

#faq #faq-list a.collapse {
  color: #1bb1dc;
}

#faq #faq-list a.collapsed {
  color: #000;
}

#faq #faq-list a.collapsed i::after {
  content: "" !important;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
  padding: 0 0 30px 0;
  font-size: 14px;
  background: #fff;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #f5f8fd;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 34px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Poppins", sans-serif;
  color: #413e66;
  font-weight: 400;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#footer .footer-top .footer-info p {
  font-size: 13px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Poppins", sans-serif;
  color: #535074;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #1bb1dc;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #0a98c0;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #413e66;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 10px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul li {
  padding: 8px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #696592;
}

#footer .footer-top .footer-links ul a:hover {
  color: #1bb1dc;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
  border: 1px solid #d9dde6;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  background: #1bb1dc;
  border: 1px solid #1bb1dc;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #0a98c0;
}

#footer .footer-top .form .form-group {
  margin-bottom: 15px;
}

#footer .footer-top .form #sendmessage {
  color: #fff;
  background: #1bb1dc;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#footer .footer-top .form #errormessage {
  color: #fff;
  display: none;
  background: red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#footer .footer-top .form #sendmessage.show,
#footer .footer-top .form #errormessage.show,
#footer .footer-top .form .show {
  display: block;
}

#footer .footer-top .form .validation {
  color: red;
  display: none;
  margin: 0 0 20px;
  font-weight: 400;
  font-size: 13px;
}

#footer .footer-top .form label {
  color: #413e66;
  font-weight: 500;
}

#footer .footer-top .form input,
#footer .footer-top .form textarea {
  border-radius: 0;
  box-shadow: none;
  border: 1px solid #dce1ec;
  font-size: 14px;
}

#footer .footer-top .form input::-webkit-input-placeholder,
#footer .footer-top .form textarea::-webkit-input-placeholder {
  color: #a2a0bd;
}

#footer .footer-top .form input::-moz-placeholder,
#footer .footer-top .form textarea::-moz-placeholder {
  color: #a2a0bd;
}

#footer .footer-top .form input:-ms-input-placeholder,
#footer .footer-top .form textarea:-ms-input-placeholder {
  color: #a2a0bd;
}

#footer .footer-top .form input::placeholder,
#footer .footer-top .form textarea::placeholder {
  color: #a2a0bd;
}

#footer .footer-top .form button[type="submit"] {
  background: #1bb1dc;
  border: 0;
  border-radius: 3px;
  padding: 8px 30px;
  color: #fff;
  transition: 0.3s;
}

#footer .footer-top .form button[type="submit"]:hover {
  background: #0a98c0;
  cursor: pointer;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
  color: #535074;
  font-size: 15px;
}

#footer .credits {
  text-align: center;
  font-size: 14px;
  padding-top: 4px;
  color: #8582a8;
}

#footer .credits a {
  color: #1bb1dc;
}

#footer .credits a:hover {
  color: #0a98c0;
}

/*--------------------------------------------------------------
# Responsive Media Queries
--------------------------------------------------------------*/

@media (min-width: 991px) {
  #call-to-action .cta-btn-container {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }
}

@media (min-width: 992px) {
  #intro .intro-info {
    padding-top: 80px;
  }

  #testimonials .testimonial-item p {
    width: 80%;
  }
}

@media (max-width: 991px) {
  #topbar {
    display: none;
  }

  #header {
    height: 70px;
    padding: 15px 0;
  }

  #header .logo h1 {
    font-size: 28px;
    padding: 8px 0;
  }

  #why-us .why-us-content {
    padding-top: 30px;
  }

  #pricing {
    padding-bottom: 30px;
  }

  #pricing .card {
    margin-bottom: 50px;
  }
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }

  #faq #faq-list a {
    font-size: 18px;
  }

  #faq #faq-list i {
    top: 13px;
  }
}

@media (max-width: 767px) {
  #intro {
    height: auto;
    padding: 80px 0 60px 0;
  }

  #intro .container {
    height: auto !important;
  }

  #intro .intro-img {
    width: 80%;
  }

  #intro .intro-info {
    text-align: center;
    padding-top: 40px;
  }

  #intro .intro-info h2 {
    font-size: 34px;
    margin-bottom: 30px;
  }

  .section-header p {
    width: 100%;
  }

  #testimonials .testimonial-item {
    text-align: center;
  }

  #testimonials .testimonial-item .testimonial-img {
    float: none;
    margin: auto;
  }

  #testimonials .testimonial-item h3,
  #testimonials .testimonial-item h4,
  #testimonials .testimonial-item p {
    margin-left: 0;
  }
}

@media (max-width: 574px) {
  #footer .footer-top .social-links a {
    margin-bottom: 25px;
  }
}
</style>
