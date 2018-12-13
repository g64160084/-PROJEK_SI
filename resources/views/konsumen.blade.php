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
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Pesanan Saya</a>
            </li>
             <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="konsumen">Data Konsumen</a>
            </li>
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
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                   <tr>
                      <th>ID Konsumen</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Barang Pesanan</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID Konsumen</th>
                      <th>Nama</th>
                      <th>No HP</th>
                      <th>Barang Pesanan</th>
                      <th>Jumlah</th>
                    </tr>
                  </tfoot>
                  
                  <tbody>
                  @foreach($products as $post)
                    <tr>
                      <td>{{$post->konsumen_id}}</td>
                      <td>{{$post->name}}</td>
                      <td>{{$post->phone}}</td>
                      <td>{{$post->goods}}</td>
                      <td>{{$post->units}}</td>
                    </tr>
                  @endforeach
                  </tbody>

                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
    </nav>



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
