
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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="toko">Toko</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products">Pesanan Saya</a>
            </li>
            <!-- <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="konsumen">Data Konsumen</a>
            </li> -->
            @auth
            @if(Auth::user()->type === "admin")
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="konsumen">Data Konsumen</a>
            </li>
            @elseif(Auth::user()->type === "bidder")
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="konsumen">Data Konsumen</a>
            </li>
            @endif
            @endauth
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

    <section class="page-section about-heading">
      <div class="container">

        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="upper">Pakaian Untuk Hari Yang Sempurna!</span>
                  <span class="lower" style="margin-bottom: 5rem">Pakaian Untuk Anda</span>
                <a href="/products" class="mb-0" style="align : center" font-size= 14 px">
                <img class="box rounded about-heading-img1 mb-3 mb-3-lg-0" src="img/kaos.png" alt="">
                </a>
                <a href="/products" class="mb-0" style="align : center" font-size= 14 px">
                <img class="box rounded about-heading-img1 mb-3 mb-lg-0" src="img/bomber.png" alt="">
                </a>
                <h2></h2>
                <a href="/products" class="mb-0" style="align : center" font-size= 14 px">
                <img class="box rounded about-heading-img1 mb-3 mb-lg-0" src="img/kemeja.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Weply!.co.id 2018</p>
      </div>
    </footer>

    <section class="page-section about1-heading">
      <div class="container">
       
        <div class="about1-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="upper">Kesegaran Yang Selalu Terjamin!</span>
                  <span class="lower">Pangan Sehat Hidup Berkualitas</span>
                </h2>
                <a href="/products" class="mb-0" style="align : center" font-size= 14 px">
                <img class="box img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/makanan kecil.jpg" alt="">
              </a>
              <h1></h1>
              <h2></h2>
                 <a href="/products" class="mb-0" style="align : center" font-size= 14 px">
                 <img class="box img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/makanan berat.jpg" alt="">
               </a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
