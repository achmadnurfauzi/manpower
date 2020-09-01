<!DOCTYPE html>
<html>

<!-- Title Page-->
<title>Garuda Indonesia - Chart</title>

<?php
    $this->load->View('head');
?>
<body>
  <?php
      $this->load->View('navbar');
  ?>
  <br>

  <div class="typo-headers">
            <h2 ondragstart="return false;" class="display-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report Data</h2>
            <hr>

            <div class="container-fluid">
                <div class="col-md-4">
                        <label><h4 ondragstart="return false;">Search Unit&nbsp;&nbsp;:&nbsp;</h4></label>
                            <select id="FilterData">
                               <option value="all">All Data </option>
                               <?php foreach ($dataunitvp as $row): ?> 
                               <option value="<?php echo $row->unitvp ?>"><?php echo $row->unitvp ?> </option> 
                               <?php endforeach ?>
                            </select>

                  </div>
            </div>

            <div class="container-fluid">
                <div class="col-md-4">
                        <label><h4 ondragstart="return false;">Search Bulan&nbsp;&nbsp;:&nbsp;</h4></label>
                            <select id="Filterbulan">
                                <option value="all">All Data</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                  </div>
            </div>
            <br>

                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Struktural</h3>
                                        <canvas id="Struktural"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Fungsional</h3>
                                        <canvas id="Fungsional"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Crew</h3>
                                        <canvas id="Crew"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Work Outside GA</h3>
                                        <canvas id="Work"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Project</h3>
                                        <canvas id="Project"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">PERSK Umur</h3>
                                        <canvas id="PerskUmur"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">PERSK</h3>
                                        <canvas id="Persk"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Gender PERSK</h3>
                                        <canvas id="GenderPersk"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner" id="hk">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Hubungan Kerja</h3>
                                        <canvas id="HubunganKerja"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 ondragstart="return false;" class="title-2 m-b-40">Umur</h3>
                                        <canvas id="AgeGender"></canvas>
                                    </div>
                                </div>
                            </div>


                        </div>




</body>
</html>

<?php
$this->load->View('down');
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<script>
var ctx = document.getElementById("Struktural").getContext('2d');
var chartStruktural = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Jobcat",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});


$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getStruktural') ?>",
    function (data) {
        var data_jumlah = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlah.push(item.jumlah);
         data_jobcat.push(item.jobcat);
       });
        chartStruktural .data.labels = data_jobcat;
        chartStruktural .data.datasets[0].data = data_jumlah;

        chartStruktural.update();


});
});

</script>

<script>
var ctx = document.getElementById("Fungsional").getContext('2d');
var chartFungsional = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Jobcat",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});


$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getFungsional') ?>",
    function (data) {
        var data_fungsional = [];
        var data_jumlahfungsional = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahfungsional.push(item.jumlah_fungsional);
         data_fungsional.push(item.jobcat);
       });
        chartFungsional .data.labels = data_fungsional;
        chartFungsional .data.datasets[0].data = data_jumlahfungsional;

        chartFungsional.update();


});
});

</script>

<script>
var ctx = document.getElementById("Crew").getContext('2d');
var chartCrew = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Jobcat",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});


$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getCrew') ?>",
    function (data) {
        var data_jumlahcrew = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahcrew.push(item.jumlah_crew);
         data_jobcat.push(item.jobcat);
       });
       chartCrew .data.labels = data_jobcat;
        chartCrew .data.datasets[0].data = data_jumlahcrew;

        chartCrew.update();


});
});

</script>

<script>
var ctx = document.getElementById("Work").getContext('2d');
var chartWork = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Jobcat",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});


$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getWorkOutside') ?>",
    function (data) {
        var data_jumlahwork = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahwork.push(item.jumlah_workoffside);
         data_jobcat.push(item.jobcat);
       });
        chartWork .data.labels = data_jobcat;
        chartWork .data.datasets[0].data = data_jumlahwork;

        chartWork.update();


});
});

</script>

<script>
var ctx = document.getElementById("Project").getContext('2d');
var chartProject = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Jobcat",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});


$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getProject') ?>",
    function (data) {
        var data_jumlahproject = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahproject.push(item.jumlah_project);
         data_jobcat.push(item.jobcat);
       });
        chartProject .data.labels = data_jobcat;
        chartProject .data.datasets[0].data = data_jumlahproject;

        chartProject.update();


});
});

</script>

<script>
var ctx = document.getElementById("Persk").getContext('2d');
var perskChart = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Data Persk",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});

$(function(){


$.post("<?= base_url('index.php/Chart_pegawai/getPersk') ?>",
    function (data) {
        var data_category = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_category.push(item.category);
         data_jumlah.push(item.jumlah);
       });
        perskChart.data.labels = data_category;
        perskChart.data.datasets[0].data = data_jumlah;

        perskChart.update();
});
});

</script>

<script>
var ctx = document.getElementById("GenderPersk").getContext('2d');
var chartGenderPersk = new Chart(ctx, {
    type: 'horizontalBar',
        defaultFontFamily: 'Poppins',
        data: {
          datasets: [
            {
              label: ['Male'],
              borderColor: "rgba(45, 52, 54,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(45, 52, 54,1.0)",
              fontFamily: "Poppins"
            },
            {
              label: ['Female'],
              borderColor: "rgba(232, 67, 147,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(232, 67, 147,1.0)",
              fontFamily: "Poppins"
            },
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              stacked : true,
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});

$(function(){


$.post("<?= base_url('index.php/Chart_pegawai/getGP') ?>",
    function (data) {
        var data_category = [];
        var data_jumlahmale = [];
        var data_jumlahfemale = [];
        var data_jumlahgender = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahmale.push(item.jumlah_male);
         data_jumlahfemale.push(item.jumlah_female);
         data_category.push(item.category);
         data_jumlahgender.push(item.jumlah_gender);
       });
        chartGenderPersk.data.labels = data_category;
        chartGenderPersk.data.datasets[0].data = data_jumlahmale;
        chartGenderPersk.data.datasets[1].data = data_jumlahfemale;



        chartGenderPersk.update();


});
});

</script>

<script>
var ctx = document.getElementById("HubunganKerja").getContext('2d');
var chartHubunganKerja = new Chart(ctx, {
    type: 'horizontalBar',
        data: {
          datasets: [
            {
              label: "Hubungan Kerja",
              borderColor: "rgba(116, 185, 255,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(116, 185, 255,1.0)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});
$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getHubungan') ?>",
    function (data) {
        var data_hubungan = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_hubungan.push(item.persg);
         data_jumlah.push(item.jumlah);
       });
        chartHubunganKerja.data.labels = data_hubungan;
        chartHubunganKerja.data.datasets[0].data = data_jumlah;

        chartHubunganKerja.update();


});
});

</script>

<script>
var ctx = document.getElementById("AgeGender").getContext('2d');
var chratAgeGender = new Chart(ctx, {
    type: 'horizontalBar',
        defaultFontFamily: 'Poppins',
        data: {
          datasets: [
            {
              label: ['Male'],
              borderColor: "rgba(45, 52, 54,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(45, 52, 54,1.0)",
              fontFamily: "Poppins"
            },
            {
              label: ['Female'],
              borderColor: "rgba(232, 67, 147,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(232, 67, 147,1.0)",
              fontFamily: "Poppins"
            },
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{

              stacked: true,
              ticks: {
                fontFamily: "Poppins",

                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,

                fontFamily: "Poppins"
              }
            }]
          }
        }
});
$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getAgeGender') ?>",
    function (data) {
        var data_agecat = [];
        var data_jumlahfemale = [];
        var data_jumlahmale = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_agecat.push(item.agecat);
         data_jumlahmale.push(item.jumlah_male);
         data_jumlahfemale.push(item.jumlah_female);
         data_jumlah.push(item.jumlah_gender);
       });
        chratAgeGender.data.labels = data_agecat;
        chratAgeGender.data.datasets[0].data = data_jumlahmale;
        chratAgeGender.data.datasets[1].data = data_jumlahfemale;

        chratAgeGender.update();


});
});
</script>

<script>
var ctx = document.getElementById("PerskUmur").getContext('2d');
var chartPerskUmur = new Chart(ctx, {
    type: 'horizontalBar',
        defaultFontFamily: 'Poppins',
        data: {
          datasets: [
            {
              label: ['MT'],
              borderColor: "rgba(178, 190, 195,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(178, 190, 195,1.0)",
              fontFamily: "Poppins"
            },
            {
              label: ['Cabin'],
              borderColor: "rgba(232, 67, 147,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(232, 67, 147,1.0)",
              fontFamily: "Poppins"
            },
            {
              label: ['Cockpit'],
              borderColor: "rgba(214, 48, 49,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(214, 48, 49,1.0)",
              fontFamily: "Poppins"
            },
            {
              label: ['Non Crew'],
              borderColor: "rgba(0, 184, 148,1.0)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 184, 148,1.0)",
              fontFamily: "Poppins"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              stacked: true,
              ticks: {
                fontFamily: "Poppins",
                min: 0,
                stepSize: 100

              }
            }],
            yAxes: [{
              stacked: true,
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
});
$(function(){



$.post("<?= base_url('index.php/Chart_pegawai/getPerskUmur') ?>",
    function (data) {
        var data_agecat = [];
        var data_jumlahMT = [];
        var data_jumlahCabin = [];
        var data_jumlahCockpit = [];
        var data_jumlahNoncrew = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_agecat.push(item.agecat);
         data_jumlahMT.push(item.jumlah_MT);
         data_jumlahCabin.push(item.jumlah_cabin);
         data_jumlahCockpit.push(item.jumlah_cockpit);
         data_jumlahNoncrew.push(item.jumlah_noncrew);
       });
        chartPerskUmur.data.labels = data_agecat;
        chartPerskUmur.data.datasets[0].data = data_jumlahMT;
        chartPerskUmur.data.datasets[1].data = data_jumlahCabin;
        chartPerskUmur.data.datasets[2].data = data_jumlahCockpit;
        chartPerskUmur.data.datasets[3].data = data_jumlahNoncrew;

        chartPerskUmur.update();


});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    var unitvp = 'all';
    var bulan = 'all';

    $('#FilterData').on('change', function() {
        unitvp = $(this).val();
        bulan = $('#Filterbulan').val();

        $.post("<?= base_url('index.php/Chart_pegawai/getPersk/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_category = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_category.push(item.category);
         data_jumlah.push(item.jumlah);
       });
        perskChart.data.labels = data_category;
        perskChart.data.datasets[0].data = data_jumlah;

        perskChart.update();
});
       $.post("<?= base_url('index.php/Chart_pegawai/getStruktural/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlah = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlah.push(item.jumlah);
         data_jobcat.push(item.jobcat);
       });
        chartStruktural .data.labels = data_jobcat;
        chartStruktural .data.datasets[0].data = data_jumlah;

        chartStruktural.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getFungsional/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_fungsional = [];
        var data_jumlahfungsional = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahfungsional.push(item.jumlah_fungsional);
         data_fungsional.push(item.jobcat);
       });
        chartFungsional .data.labels = data_fungsional;
        chartFungsional .data.datasets[0].data = data_jumlahfungsional;

        chartFungsional.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getCrew/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahcrew = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahcrew.push(item.jumlah_crew);
         data_jobcat.push(item.jobcat);
       });
       chartCrew .data.labels = data_jobcat;
        chartCrew .data.datasets[0].data = data_jumlahcrew;

        chartCrew.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getWorkOutside/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahwork = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahwork.push(item.jumlah_workoffside);
         data_jobcat.push(item.jobcat);
       });
        chartWork .data.labels = data_jobcat;
        chartWork .data.datasets[0].data = data_jumlahwork;

        chartWork.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getProject/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahproject = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahproject.push(item.jumlah_project);
         data_jobcat.push(item.jobcat);
       });
        chartProject .data.labels = data_jobcat;
        chartProject .data.datasets[0].data = data_jumlahproject;

        chartProject.update();


});

       $.post("<?= base_url('index.php/Chart_pegawai/getGP/'); ?>" + unitvp + "/" + bulan,
          function (data) {
              var data_category = [];
              var data_jumlahmale = [];
              var data_jumlahfemale = [];
              var data_jumlahgender = [];
             var obj = JSON.parse(data);
             $.each(obj, function(test,item) {
               data_jumlahmale.push(item.jumlah_male);
               data_jumlahfemale.push(item.jumlah_female);
               data_category.push(item.category);
               data_jumlahgender.push(item.jumlah_gender);
             });
              chartGenderPersk.data.labels = data_category;
              chartGenderPersk.data.datasets[0].data = data_jumlahmale;
              chartGenderPersk.data.datasets[1].data = data_jumlahfemale;

            chartGenderPersk.update();


});
        $.post("<?= base_url('index.php/Chart_pegawai/getHubungan/'); ?>" + unitvp + "/" + bulan,
            function (data) {
                var data_hubungan = [];
                var data_jumlah = [];
                var obj = JSON.parse(data);
               $.each(obj, function(test,item) {
                 data_hubungan.push(item.persg);
                 data_jumlah.push(item.jumlah);
               });
                chartHubunganKerja.data.labels = data_hubungan;
                chartHubunganKerja.data.datasets[0].data = data_jumlah;

                chartHubunganKerja.update();


    });
        $.post("<?= base_url('index.php/Chart_pegawai/getAgeGender/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_agecat = [];
        var data_jumlahfemale = [];
        var data_jumlahmale = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_agecat.push(item.agecat);
         data_jumlahmale.push(item.jumlah_male);
         data_jumlahfemale.push(item.jumlah_female);
         data_jumlah.push(item.jumlah_gender);
       });
        chratAgeGender.data.labels = data_agecat;
        chratAgeGender.data.datasets[0].data = data_jumlahmale;
        chratAgeGender.data.datasets[1].data = data_jumlahfemale;

        chratAgeGender.update();


});
       $.post("<?= base_url('index.php/Chart_pegawai/getPerskUmur/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_agecat = [];
        var data_jumlahMT = [];
        var data_jumlahCabin = [];
        var data_jumlahCockpit = [];
        var data_jumlahNoncrew = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_agecat.push(item.agecat);
         data_jumlahMT.push(item.jumlah_MT);
         data_jumlahCabin.push(item.jumlah_cabin);
         data_jumlahCockpit.push(item.jumlah_cockpit);
         data_jumlahNoncrew.push(item.jumlah_noncrew);
       });
        chartPerskUmur.data.labels = data_agecat;
        chartPerskUmur.data.datasets[0].data = data_jumlahMT;
        chartPerskUmur.data.datasets[1].data = data_jumlahCabin;
        chartPerskUmur.data.datasets[2].data = data_jumlahCockpit;
        chartPerskUmur.data.datasets[3].data = data_jumlahNoncrew;

        chartPerskUmur.update();


});

});

$('#Filterbulan').on('change', function() {
        unitvp = $('#FilterData').val();
        bulan = $(this).val();

        $.post("<?= base_url('index.php/Chart_pegawai/getPersk/'); ?>" + unitvp + "/" + bulan,
        function (data) {
        var data_category = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_category.push(item.category);
         data_jumlah.push(item.jumlah);
       });
        perskChart.data.labels = data_category;
        perskChart.data.datasets[0].data = data_jumlah;

        perskChart.update();
});
         $.post("<?= base_url('index.php/Chart_pegawai/getStruktural/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlah = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlah.push(item.jumlah);
         data_jobcat.push(item.jobcat);
       });
        chartStruktural .data.labels = data_jobcat;
        chartStruktural .data.datasets[0].data = data_jumlah;

        chartStruktural.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getFungsional/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_fungsional = [];
        var data_jumlahfungsional = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahfungsional.push(item.jumlah_fungsional);
         data_fungsional.push(item.jobcat);
       });
        chartFungsional .data.labels = data_fungsional;
        chartFungsional .data.datasets[0].data = data_jumlahfungsional;

        chartFungsional.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getCrew/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahcrew = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahcrew.push(item.jumlah_crew);
         data_jobcat.push(item.jobcat);
       });
       chartCrew .data.labels = data_jobcat;
        chartCrew .data.datasets[0].data = data_jumlahcrew;

        chartCrew.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getWorkOutside/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahwork = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahwork.push(item.jumlah_workoffside);
         data_jobcat.push(item.jobcat);
       });
        chartWork .data.labels = data_jobcat;
        chartWork .data.datasets[0].data = data_jumlahwork;

        chartWork.update();


});
$.post("<?= base_url('index.php/Chart_pegawai/getProject/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_jumlahproject = [];
        var data_jobcat = [];
       var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_jumlahproject.push(item.jumlah_project);
         data_jobcat.push(item.jobcat);
       });
        chartProject .data.labels = data_jobcat;
        chartProject .data.datasets[0].data = data_jumlahproject;

        chartProject.update();


});
       $.post("<?= base_url('index.php/Chart_pegawai/getGP/'); ?>" + unitvp + "/" + bulan,
          function (data) {
              var data_category = [];
              var data_jumlahmale = [];
              var data_jumlahfemale = [];
              var data_jumlahgender = [];
             var obj = JSON.parse(data);
             $.each(obj, function(test,item) {
               data_jumlahmale.push(item.jumlah_male);
               data_jumlahfemale.push(item.jumlah_female);
               data_category.push(item.category);
               data_jumlahgender.push(item.jumlah_gender);
             });
              chartGenderPersk.data.labels = data_category;
              chartGenderPersk.data.datasets[0].data = data_jumlahmale;
              chartGenderPersk.data.datasets[1].data = data_jumlahfemale;

            chartGenderPersk.update();


});
        $.post("<?= base_url('index.php/Chart_pegawai/getHubungan/'); ?>" + unitvp + "/" + bulan,
            function (data) {
                var data_hubungan = [];
                var data_jumlah = [];
                var obj = JSON.parse(data);
               $.each(obj, function(test,item) {
                 data_hubungan.push(item.persg);
                 data_jumlah.push(item.jumlah);
               });
                chartHubunganKerja.data.labels = data_hubungan;
                chartHubunganKerja.data.datasets[0].data = data_jumlah;

                chartHubunganKerja.update();


    });
        $.post("<?= base_url('index.php/Chart_pegawai/getAgeGender/'); ?>" + unitvp + "/" + bulan,
    function (data) {
        var data_agecat = [];
        var data_jumlahfemale = [];
        var data_jumlahmale = [];
        var data_jumlah = [];
        var obj = JSON.parse(data);
       $.each(obj, function(test,item) {
         data_agecat.push(item.agecat);
         data_jumlahmale.push(item.jumlah_male);
         data_jumlahfemale.push(item.jumlah_female);
         data_jumlah.push(item.jumlah_gender);
       });
        chratAgeGender.data.labels = data_agecat;
        chratAgeGender.data.datasets[0].data = data_jumlahmale;
        chratAgeGender.data.datasets[1].data = data_jumlahfemale;

        chratAgeGender.update();


});
        $.post("<?= base_url('index.php/Chart_pegawai/getPerskUmur/'); ?>" + unitvp + "/" + bulan,
            function (data) {
                var data_agecat = [];
                var data_jumlahMT = [];
                var data_jumlahCabin = [];
                var data_jumlahCockpit = [];
                var data_jumlahNoncrew = [];
                var obj = JSON.parse(data);
               $.each(obj, function(test,item) {
                 data_agecat.push(item.agecat);
                 data_jumlahMT.push(item.jumlah_MT);
                 data_jumlahCabin.push(item.jumlah_cabin);
                 data_jumlahCockpit.push(item.jumlah_cockpit);
                 data_jumlahNoncrew.push(item.jumlah_noncrew);
               });
                chartPerskUmur.data.labels = data_agecat;
                chartPerskUmur.data.datasets[0].data = data_jumlahMT;
                chartPerskUmur.data.datasets[1].data = data_jumlahCabin;
                chartPerskUmur.data.datasets[2].data = data_jumlahCockpit;
                chartPerskUmur.data.datasets[3].data = data_jumlahNoncrew;

                chartPerskUmur.update();


    });

});

});

</script>
