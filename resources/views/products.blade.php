<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Weply!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">A Good Food And Clothing For All Your Daily Needs</span>
      <span class="site-heading-lower">Weply!</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="toko">Toko</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Pesanan Saya</a>
            </li>
            <!-- <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="konsumen">Data Konsumen</a>
            </li> -->
            @guest
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login">Masuk</a>
            </li>
            @endguest
            @auth
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="profile">Profil</a>
            </li>
            @endauth
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- <section class="page-section clearfix">
      <form method="POST" action={{route('products.store')}}>
          @csrf

          <input type="hidden" id="order_type" name="order_type" value="wedding">

          <div class="form-group row">
              <label for="Nama" class="col-sm-4 col-form-label text-md-right">{{ __('nama') }}</label>

              <div class="col-md-6">
                  <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="Nama" required autofocus>

                  @if ($errors->has('barang'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="Nomor Telepon" class="col-sm-4 col-form-label text-md-right">{{ __('nohp') }}</label>

              <div class="col-md-6">
                  <input id="nohp" type="text" class="form-control{{ $errors->has('nohp') ? ' is-invalid' : '' }}" name="Nomor Telepon" required autofocus>

                  @if ($errors->has('barang'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nohp') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="Jenis Pakaian/Makanan" class="col-sm-4 col-form-label text-md-right">{{ __('barang') }}</label>

              <div class="col-md-6">
                  <input id="barang" type="text" class="form-control{{ $errors->has('barang') ? ' is-invalid' : '' }}" name="Jenis Pakaian/Makanan" required autofocus>

                  @if ($errors->has('barang'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('barang') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
           <div class="form-group row">
              <label for="Jumlah Pesanan" class="col-sm-4 col-form-label text-md-right">{{ __('Jumlah Pesanan') }}</label>

              <div class="col-md-6">
                  <input id="jumlah" type="text" class="form-control{{ $errors->has('jumlah') ? ' is-invalid' : '' }}" name="Jumlah Pesanan" required autofocus>

                  @if ($errors->has('jumlah'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('jumlah') }}</strong>
                      </span>
                  @endif
              </div>
          </div>



          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Pesan') }}
                  </button>
              </div>
          </div>
      </form>
    </section>
 -->

<!--  INI UNTUK TABEL PEMESANAN -->


<div id="main-content">
<div class="wrapper">
    <h2 class="judul">POST YOUR ITEM</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form name="myForm" class="" action={{route('products.store')}} method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div  class="title-box form-group has-feedback{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="">Nama</label>
            <input type="text" id="title" class="" name="nama" placeholder="Input name" value="{{ old('nama')}}" required>
        </div>
        <div class="price-box">
            <label for="location">No HP</label>
            <input type="number" id="phone" name="nohp" placeholder="Masukan No HP" step="1000" value="{{old('nohp')}}" required>
        </div>
        <div class="stock-box">
                <label for="stock">Barang</label>
                <input type="text" id="goods" class="" name="barang" placeholder="Input goods" value="{{old('barang')}}" required>
            </div>
        <div class="unit-box">
                <label for="">Jumlah</label>
                <input type="number" id="units" name="jumlah" value="1" min="0" max="1000" value="{{old('jumlah')}}" required>
            </div>
            <input type="submit" value="Submit">
    </form>
</div>
</div>


<!-- SAMPE SINI TABELNYA -->

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Weply!.co.id 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>