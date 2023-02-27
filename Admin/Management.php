<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-90680653-2');
  </script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Meta -->
  <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
  <meta name="author" content="BootstrapDash">

  <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

  <!--   -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
  <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="../css/style_Management.css">
  <script src="https://kit.fontawesome.com/f52718c374.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="az-header">
    <div class="container">
      <div class="az-header-left">
        <a href="index.html" class="az-logo"><span></span> Toys Store</a>
        <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
      </div><!-- az-header-left -->
      <div class="az-header-menu">
        <div class="az-header-menu-header">
          <a href="index.html" class="az-logo"><span></span> Toys Store</a>
          <a href="" class="close">&times;</a>
        </div><!-- az-header-menu-header -->
        <ul class="nav">
          <li class="nav-item active show">
            <a href="index.html" class="nav-link"><i class="fa-sharp fa-solid fa-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="chart-chartjs.html" class="nav-link"><i class="fa-sharp fa-solid fa-upload"></i> Upload Product</a>
          </li>
          <li class="nav-item">
            <a href="form-elements.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Forms</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-book"></i> Components</a>
            <div class="az-menu-sub">
              <div class="container">
                <div>
                  <nav class="nav">
                    <a href="elem-buttons.html" class="nav-link">Buttons</a>
                    <a href="elem-dropdown.html" class="nav-link">Dropdown</a>
                    <a href="elem-icons.html" class="nav-link">Icons</a>
                    <a href="table-basic.html" class="nav-link">Table</a>
                  </nav>
                </div>
              </div><!-- container -->
            </div>
          </li>
        </ul>
      </div><!-- az-header-menu -->
      <div class="az-header-right">
        <div class="dropdown az-profile-menu">
          <a href="" class="az-img-user"><img src="../vv/fun.jpg" alt=""></a>
          <div class="dropdown-menu">
            <div class="az-dropdown-header d-sm-none">
              <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
            </div>
            <div class="az-header-profile">
              <div class="az-img-user">
                <img src="../img/faces/face1.jpg" alt="">
              </div><!-- az-img-user -->
              <h6>Aziana Pechon</h6>
              <span>Premium Member</span>
            </div><!-- az-header-profile -->

            <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
            <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
            <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
            <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
          </div><!-- dropdown-menu -->
        </div>
      </div><!-- az-header-right -->
    </div><!-- container -->
  </div><!-- az-header -->

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">Hi, welcome back!</h2>
            <p class="az-dashboard-text">Your web analytics dashboard template.</p>
          </div>
        </div><!-- az-dashboard-one-title -->

        <div class="az-dashboard-nav">
          <nav class="nav">
            <a class="nav-link active" data-toggle="tab" href="#">Overview</a>
            <a class="nav-link" data-toggle="tab" href="#">Audiences</a>
            <a class="nav-link" data-toggle="tab" href="#">Demographics</a>
            <a class="nav-link" data-toggle="tab" href="#">More</a>
          </nav>

          <nav class="nav">
            <a class="nav-link" href="#"><i class="far fa-save"></i> Save Report</a>
            <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
            <a class="nav-link" href="#"><i class="far fa-envelope"></i>Send to Email</a>
            <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
          </nav>
        </div>

        <div class="col-lg-7 col-xl-8 mg-t-20 mg-lg-t-0">
          <div class="card card-table-one">
            <h6 class="card-title">What pages do your users visit</h6>
            <p class="az-content-text mg-b-20">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th class="wd-5p">&nbsp;</th>
                    <th class="wd-45p">Country</th>
                    <th>Entrances</th>
                    <th>Bounce Rate</th>
                    <th>Exits</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><i class="flag-icon flag-icon-us flag-icon-squared"></i></td>
                    <td><strong>United States</strong></td>
                    <td><strong>134</strong> (1.51%)</td>
                    <td>33.58%</td>
                    <td>15.47%</td>
                  </tr>
                  <tr>
                    <td><i class="flag-icon flag-icon-gb flag-icon-squared"></i></td>
                    <td><strong>United Kingdom</strong></td>
                    <td><strong>290</strong> (3.30%)</td>
                    <td>9.22%</td>
                    <td>7.99%</td>
                  </tr>
                  <tr>
                    <td><i class="flag-icon flag-icon-in flag-icon-squared"></i></td>
                    <td><strong>India</strong></td>
                    <td><strong>250</strong> (3.00%)</td>
                    <td>20.75%</td>
                    <td>2.40%</td>
                  </tr>
                  <tr>
                    <td><i class="flag-icon flag-icon-ca flag-icon-squared"></i></td>
                    <td><strong>Canada</strong></td>
                    <td><strong>216</strong> (2.79%)</td>
                    <td>32.07%</td>
                    <td>15.09%</td>
                  </tr>
                  <tr>
                    <td><i class="flag-icon flag-icon-fr flag-icon-squared"></i></td>
                    <td><strong>France</strong></td>
                    <td><strong>216</strong> (2.79%)</td>
                    <td>32.07%</td>
                    <td>15.09%</td>
                  </tr>
                  <tr>
                    <td><i class="flag-icon flag-icon-ph flag-icon-squared"></i></td>
                    <td><strong>Philippines</strong></td>
                    <td><strong>197</strong> (2.12%)</td>
                    <td>32.07%</td>
                    <td>15.09%</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card -->
        </div><!-- col-lg -->
      </div><!-- row -->
    </div><!-- az-content-body -->
  </div>
  </div><!-- az-content -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/ionicons/ionicons.js"></script>
  <script src="../lib/jquery.flot/jquery.flot.js"></script>
  <script src="../lib/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../lib/chart.js/Chart.bundle.min.js"></script>
  <script src="../lib/peity/jquery.peity.min.js"></script>

  <script src="../js/js_Management.js"></script>
  <script>
    $(function() {
      'use strict'

      var plot = $.plot('#flotChart', [{
        data: flotSampleData3,
        color: '#007bff',
        lines: {
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: 0.2
            }]
          }
        }
      }, {
        data: flotSampleData4,
        color: '#560bd0',
        lines: {
          fillColor: {
            colors: [{
              opacity: 0
            }, {
              opacity: 0.2
            }]
          }
        }
      }], {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true
          }
        },
        grid: {
          borderWidth: 0,
          labelMargin: 8
        },
        yaxis: {
          show: true,
          min: 0,
          max: 100,
          ticks: [
            [0, ''],
            [20, '20K'],
            [40, '40K'],
            [60, '60K'],
            [80, '80K']
          ],
          tickColor: '#eee'
        },
        xaxis: {
          show: true,
          color: '#fff',
          ticks: [
            [25, 'OCT 21'],
            [75, 'OCT 22'],
            [100, 'OCT 23'],
            [125, 'OCT 24']
          ],
        }
      });

      $.plot('#flotChart1', [{
        data: dashData2,
        color: '#00cccc'
      }], {
        series: {
          shadowSize: 0,
          lines: {
            show: true,
            lineWidth: 2,
            fill: true,
            fillColor: {
              colors: [{
                opacity: 0.2
              }, {
                opacity: 0.2
              }]
            }
          }
        },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
        yaxis: {
          show: false,
          min: 0,
          max: 35
        },
        xaxis: {
          show: false,
          max: 50
        }
      });

      $.plot('#flotChart2', [{
        data: dashData2,
        color: '#007bff'
      }], {
        series: {
          shadowSize: 0,
          bars: {
            show: true,
            lineWidth: 0,
            fill: 1,
            barWidth: .5
          }
        },
        grid: {
          borderWidth: 0,
          labelMargin: 0
        },
        yaxis: {
          show: false,
          min: 0,
          max: 35
        },
        xaxis: {
          show: false,
          max: 20
        }
      });


      //-------------------------------------------------------------//


      // Line chart
      $('.peity-line').peity('line');

      // Bar charts
      $('.peity-bar').peity('bar');

      // Bar charts
      $('.peity-donut').peity('donut');

      var ctx5 = document.getElementById('chartBar5').getContext('2d');
      new Chart(ctx5, {
        type: 'bar',
        data: {
          labels: [0, 1, 2, 3, 4, 5, 6, 7],
          datasets: [{
            data: [2, 4, 10, 20, 45, 40, 35, 18],
            backgroundColor: '#560bd0'
          }, {
            data: [3, 6, 15, 35, 50, 45, 35, 25],
            backgroundColor: '#cad0e8'
          }]
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            enabled: false
          },
          legend: {
            display: false,
            labels: {
              display: false
            }
          },
          scales: {
            yAxes: [{
              display: false,
              ticks: {
                beginAtZero: true,
                fontSize: 11,
                max: 80
              }
            }],
            xAxes: [{
              barPercentage: 0.6,
              gridLines: {
                color: 'rgba(0,0,0,0.08)'
              },
              ticks: {
                beginAtZero: true,
                fontSize: 11,
                display: false
              }
            }]
          }
        }
      });

      // Donut Chart
      var datapie = {
        labels: ['Search', 'Email', 'Referral', 'Social', 'Other'],
        datasets: [{
          data: [25, 20, 30, 15, 10],
          backgroundColor: ['#6f42c1', '#007bff', '#17a2b8', '#00cccc', '#adb2bd']
        }]
      };

      var optionpie = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false,
        },
        animation: {
          animateScale: true,
          animateRotate: true
        }
      };

      // For a doughnut chart
      var ctxpie = document.getElementById('chartDonut');
      var myPieChart6 = new Chart(ctxpie, {
        type: 'doughnut',
        data: datapie,
        options: optionpie
      });

    });
  </script>
</body>

</html>