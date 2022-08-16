<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- vigafont -->
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
    <title>Aparatur Desa</title>
</head>
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
                  <a href="/informasikependudukan" class="dropdown-item">Informasi kependudukan</a>
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
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user fa-lg"></i></button>
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
<!-- content -->
<div class="container mt-3">
  <div class="panel-content pb-0">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h1 class="display-6">Aparatur Desa</h1>
          <p class="lead">Sumberagung, Panggungrejo, Blitar.</p>
          <span class="text-muted pb-0">Updated at 23-10-2021, by Admin.</span>
      </div>
      <div class="col-lg-6 d-flex justify-content-center">
        <figure class="figure kepala">
            <img src="img/kades.jpg" alt="kepala-desa" class="figure-img img-fluid rounded-circle">
            <figcaption class="text-center ">
              <h5 class="font-weight-bold">SUKRAM</h5>
              <p class="text-muted">Kepala Desa Sumberagung</p>
            </figcaption>
          </figure>
      </div>
  </div>
</div>
  <div class="row justify-content-center mt-5">
    <div class="col-lg">
      <div class="aparat">
      	<img src="img/foto3.jpeg" alt="..." class="img-thumbnail">
      	<h5 class="font-weight-bold">Sunarso</h5>
      	<p class="text-muted">Sekretaris Desa</p>
      </div>
    </div>
    <div class="col-lg">
      <div class="aparat">
      	<img src="img/foto5.jpg" alt="..." class="img-thumbnail">
      	<h5 class="font-weight-bold">Narno</h5>
      	<p class="text-muted">Kaur Keuangan</p>
      </div>
    </div>
    <div class="col-lg">
      <div class="aparat">
      	<img src="img/foto1.jpg" alt="..." class="img-thumbnail">
      	<h5 class="font-weight-bold">Mujianto</h5>
      	<p class="text-muted">wakil kepala desa </p>
      </div>
    </div>
      <div class="col-lg">
      <div class="aparat">
      	<img src="img/foto6.jpg" alt="..." class="img-thumbnail">
      	<h5 class="font-weight-bold">Sukirin</h5>
      	<p class="text-muted">Kasi Pemerintahan</p>
      </div>
    </div>
  </div>
  <div class="container komen">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <p>Menemukan kesalahan atau saran?
        tuliskan komentar anda!</p>
      </div>
    </div>
  </div>
  </div>
<!-- akhir content -->


<!-- coment -->

<!-- akhir coment -->
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
   <script src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.polyfills.js"></script>
	
</body>
</html>
