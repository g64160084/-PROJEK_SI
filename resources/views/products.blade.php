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
              <a class="nav-link text-uppercase text-expanded" href="about">Toko</a>
            </li>
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Pesanan Saya</a>
            </li>
            <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="login">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="page-section clearfix">
      <form method="POST" action="konfirmasi">
          @csrf

          <input type="hidden" id="order_type" name="order_type" value="wedding">

          <div class="form-group row">
              <label for="Nama" class="col-sm-4 col-form-label text-md-right">{{ __('Nama') }}</label>

              <div class="col-md-6">
                  <input id="Nama" type="text" class="form-control{{ $errors->has('Nama') ? ' is-invalid' : '' }}" name="Nama" required autofocus>

                  @if ($errors->has('Jenis Pakaian/Makanan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('Nama') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="Nomor Telepon" class="col-sm-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

              <div class="col-md-6">
                  <input id="Nomor Telepon" type="text" class="form-control{{ $errors->has('Nomor Telepon') ? ' is-invalid' : '' }}" name="Nomor Telepon" required autofocus>

                  @if ($errors->has('Jenis Pakaian/Makanan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('Nomor Telepon') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="Jenis Pakaian/Makanan" class="col-sm-4 col-form-label text-md-right">{{ __('Jenis Pakaian/Makanan') }}</label>

              <div class="col-md-6">
                  <input id="Jenis Pakaian/Makanan" type="text" class="form-control{{ $errors->has('Jenis Pakaian/Makanan') ? ' is-invalid' : '' }}" name="Jenis Pakaian/Makanan" required autofocus>

                  @if ($errors->has('Jenis Pakaian/Makanan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('Jenis Pakaian/Makanan') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
           <div class="form-group row">
              <label for="Jumlah Pesanan" class="col-sm-4 col-form-label text-md-right">{{ __('Jumlah Pesanan') }}</label>

              <div class="col-md-6">
                  <input id="Jumlah Pesanan" type="text" class="form-control{{ $errors->has('Jumlah Pesanan') ? ' is-invalid' : '' }}" name="Jumlah Pesanan" required autofocus>

                  @if ($errors->has('Jumlah Pesanan'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('Jumlah Pesanan') }}</strong>
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