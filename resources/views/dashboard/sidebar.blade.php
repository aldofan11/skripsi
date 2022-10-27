<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Dashboard</div>
        <a class="nav-link  {{str_contains(Request::url(), 'galeri')?'active':''}}" href="{{route('galeri.index')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Galeri
        </a>
        <a class="nav-link {{str_contains(Request::url(), 'aparatur')?'active':''}}" href="{{route('aparatur.index')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Aparatur
        </a>
        <a class="nav-link  {{str_contains(Request::url(), 'berita')?'active':''}}" href="{{route('berita.index')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          Berita
        </a>
        <a class="nav-link  {{str_contains(Request::url(), 'kependudukan')?'active':''}}" href="{{route('kependudukan.index')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          kependudukan
        </a>
        <a class="nav-link  {{str_contains(Request::url(), 'dokumen')?'active':''}}" href="{{route('dokumen.index')}}">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          Membuat dokumen
        </a>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      {{Auth::user()->name??''}}
    </div>
  </nav>
</div>