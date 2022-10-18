<!doctype html>
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fonts -->
     <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Antic+Didone&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
     <!-- icon -->
     <script src="https://kit.fontawesome.com/3fad9dbe1c.js" crossorigin="anonymous"></script>
     <!-- animation -->
     <link rel="stylesheet" href="css/font-awesome-animation.min.css">
     <!-- mycss -->
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- chart -->
      <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
        <script src="js/utils.js"></script>
    <style>
  canvas {
    min-width: 180px;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
  </style>
     

    <title>Data Statistik Desa Sumberagung</title>
  </head id="top">
  <body>
<!-- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-fluid"><a class="navbar-brand" href="index.html">
        <img src="img/n.png" alt="" width="20%"> Desa Sumberagung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown" style="list-style: none;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil Desa</a>
              <ul class="dropdown-menu">
                <li >
                  <a href="/aparatur" class="dropdown-item">Pemerintah Desa</a>
                </li>
                <li>
                <div role="separator" class="dropdown-divider"></div>
                </li>
                <li >
                  <a href="/sejarahdesa" class="dropdown-item">Sejarah Desa</a>
                </li>
                <li>
                <div role="separator" class="dropdown-divider"></div>
                </li>
                <li >
                  <a href="/visimisidesa" class="dropdown-item">Visi dan Misi Desa</a>
                </li>
                <li>
                <div role="separator" class="dropdown-divider"></div>
                </li>
                <li >
                  <a href="/tentangdesa" class="dropdown-item">Tentang Desa Sumberagung</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown" style="list-style: none;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Desa</a>
              <ul class="dropdown-menu">
                <li >
                  <a href="/berita" class="dropdown-item">Berita Desa</a>
                </li>
                <li>
                <div role="separator" class="dropdown-divider"></div>
                </li>
                <li >
                  <a href="/galeri" class="dropdown-item">Galeri Desa</a>
                </li>
              </ul>
            </li>

             <li class="nav-item dropdown" style="list-style: none;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info Desa</a>
              <ul class="dropdown-menu">
                <li >
                  <a href="/informasikependudukan" class="dropdown-item">Informasi Kependudukan</a>
                </li>
                <li>
                <div role="separator" class="dropdown-divider"></div>
                </li>
                <li >
                  <a href="/informasidesa" class="dropdown-item">Informasi Membuat Dokumen</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kategori</a>
            </li>
            <li>
          
            <!-- login -->
            <!-- Modal -->
              <a type="button" class="btn" href="/login"><i class="fas fa-user fa-lg"></i></a>
            </li>
          </ul>            
       <!-- akhir login -->      
          <form class="form-inline my-1">
            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari</button>
          </form>
        </div>
        </div> 
      </nav>

<!-- akhir nav -->
<div class="container mt-3">
  <div class="panel-content berita">
    <div class="row justify-content-center">    
      <div class="col-lg-12 d-flex justify-content-center">
        <i class="fas fa-database fa-3x text-success"></i>
          <h1 class="mt-0 float-right ml-3">Data Statistik Desa</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg">
          <div class="input-group mb-2 mt-2">
            
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilih Data</button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/informasikependudukan">Data Pekerjaan</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="/data pendidikan">Data Pendidikan</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="/data agama">Data Agama</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="/data gender">Data Gender</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="row justify-content-center">
      <div class="col-lg d-flex justify-content-center">
        <h1>Gender</h1>      
      </div>
    </div>
  </div>
<!-- content -->
<div class="container">
  <div class="row pt-5">
    <!-- <span><hr></span> -->
    <div class="col-lg">
<div class="tabs mb-5 ">
              <ul class="nav nav-tabs ">
                <li class="nav-item shadow-tabs bg-light rounded">
                  <a class="nav-link active" href="#pupular-post" role="tab" data-toggle="tab">Tabel</a>
                </li>
                <li class="nav-item shadow-tabs bg-light rounded">
                  <a class="nav-link" href="#grafik-bar" role="tab" data-toggle="tab">Grafik Bar</a>
                </li>
                
                </li>
              </ul>
              <div class="tab-content rounded">
                <div role="tabpanel" id="pupular-post" class="tab-pane active">
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="bg-dark text-white">
                      <th scope="col" rowspan="2">No</th>
                      <th scope="col" rowspan="2">Kelompok</th>
                      <th scope="col" colspan="2">Jumlah</th>                      
                      <th scope="col" colspan="2">Laki-laki</th>                      
                      <th scope="col" colspan="2">Perempuan</th>                      
                    </tr>
                    <tr class="bg-dark text-white">
                      <th scope="col" >N</th>
                      <th scope="col" >%</th>
                      <th scope="col" >N</th>
                      <th scope="col" >%</th>
                      <th scope="col" >N</th>
                      <th scope="col" >%</th>
                    </tr>                      
                    </thead>
                    <tbody>
                    <tr>
                      <td scope="row" >1</td>
                      <td>Balita</td>
                      <td>200</td>
                      <td>28.7</td>
                      <td>100</td>
                      <td>0.00</td>
                      <td>100</td>
                      <td>28.7</td>
                    </tr>
                    <tr>
                      <td scope="row" >2</td>
                      <td>Remaja</td>
                      <td>1500</td>
                      <td>28.7</td>
                      <td>1000</td>
                      <td>0.00</td>
                      <td>500</td>
                      <td>28.7</td>
                    </tr>
                    <tr>
                      <td scope="row" >3</td>
                      <td>Dewasa</td>
                      <td>1000</td>
                      <td>28.7</td>
                      <td>600</td>
                      <td>0.00</td>
                      <td>400</td>
                      <td>28.7</td>
                    </tr>
                    <tr>
                      <td scope="row" >4</td>
                      <td>Lansia</td>
                      <td>500</td>
                      <td>28.7</td>
                      <td>200</td>
                      <td>0.00</td>
                      <td>300</td>
                      <td>28.7</td>
                    </tr>
                    </tbody>
                  </table>
                  </div>
                </div>
                <div role="tabpanel" id="grafik-bar" class="tab-pane">
                  <div class="row">
                    <div class="col scrollable">
                      <div class="chart-container ">                  
                        <canvas id="canvas"></canvas>                      
                      </div>
                      
                      <script>
                        var barChartData = {
                          labels: ['Laki-laki', 
                                                  'Perempuan', 
                                                  ],
                                                  datasets: [{
                                                      label: ' Populasi',
                                                      data: [4, 5, 3, 5, 2, 3, 2, , 3,,,,5],
                                                      backgroundColor:['#ff6666','yellow','blue','#b3fff0','grey','#80ff80','#4287f5','#ff66d9',' #ffbb33'],
                                                      borderColor:['#ff6666'],                                  
                                                      borderWidth: 1
                                                  }]
                                              };
                        window.onload = function() {
                          var ctx = document.getElementById('canvas').getContext('2d');
                          window.myBar = new Chart(ctx, {
                            type: 'bar',
                            data: barChartData,
                            options: {
                              tooltips: {
                                
                              },
                              
                              scales: {
                                yAxes: [{
                                  ticks: {
                                    beginAtZero: true
                                                          }
                                                      }]
                              }
                            }
                          });
                        };
                      </script>
                    </div>
                  </div>
                </div>
                
                  
                </div>                  
                </div>
              </div>
              </div>
</div>
</div>
</div>


<!-- akhir content -->


<!-- container -->
<div class="container">
</div>

<!-- footer -->
<footer>
<div class="mt-3">
  <div class="row justify-content-center">
  <div class="col-1 d-flex justify-content-center">
    <div style="font-size: 0.5rem;">
      <a href="#top"><i class="fas fa-chevron-circle-up fa-2x"></i></a>
    </div> 
  </div>
</div>
<div class="container-lg">
  <div class="row footer">
    <div class="col-lg-6"> 
      <p>© 2022 Aplikasi    |   Dikembangkan Pemdes Sumberagung</p>
    </div>
    <div class="col-lg-6 d-flex justify-content-end">
      <div class="kanan">
        <ul class="social-link faa-parent animated-hover">
          <li><a href="" title="facebook" class="sayu"><i class="fab fa-facebook-f fa-lg faa-vertical animated-hover"></i></a></li>
          <li><a href="" title="youtube" class="sayu"><i class="fab fa-youtube fa-lg faa-vertical animated-hover"></i></a></li>
          <li><a href="" title="instagram" class="sayu"><i class="fab fa-instagram fa-lg faa-vertical animated-hover"></i></a></li>
          <li><a href="" title="instagram" class="sayu"><i class="fab fa-twitter fa-lg faa-vertical animated-hover"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div></footer>
<!-- akhir footer -->
    <!-- Optional JavaScript -->
    <!-- <script src="js/main.js"></script> -->
    
    <!-- <script  src="js/charts.js"></script>
    jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.polyfills.js"></script>

    
  </body>
</html>