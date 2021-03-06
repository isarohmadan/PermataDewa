<?php
require 'config/connection.php';
if (isset($_POST['submit'])) {
  $email = htmlspecialchars($_POST['email']);
 if(!empty($email)){
  $sql = "INSERT INTO `email_user`( `email`) VALUES ('$email')";
  $query = mysqli_query($conn,$sql);
  if ($query == true) {
      echo "<script> alert('Terimakasih data anda sudah kami terima!'); </script>";
  }

 }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="asset/main.css" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    
    <link rel="stylesheet" href="owl/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

    <title>PermataDewa</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar text-dark navbar-expand-sm navbar-dark sticky-top">
      <div class="container-fluid text-capitalize p-2 text-dark">
        <div class="brand ">
          <a
            href="#"
            class="logoku brend border-rounded justify-content-center"
          >
            <img
              src="asset/img/logo.png"
              alt=""
              width="100%"
              height="100%"
            />
          </a>
          <div class="first_name fs-2">permata</div>
          <div class="last_name fs-2">dewa</div>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon btn btn-outline-success btn btn-success"></span>
        </button>
        <div class="collapse navbar-collapse text-dark" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          </ul>
          <ul class="navbar-nav item-navbar">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#produk"> Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--carousel -->
    <div class="p-5 jumbo mb-4 background-img rounded-3 shadow-lg" id="jumbotron">
			<div class="row position-relative">
			<div class="col py-5 font">
			<h1 class="display-5 fw-bold">PERMATA DEWA</h1>
			<p class="col-md-8 fs-4">Meningkatkan efesiensi penggunaan energi fosil dan menggunakan energi yang dapat terbarukan</p>
			<a href="#produk" class="btn btn-primary btn-lg"> Produk Kami</a>
			</div>
			<div class="gambar position-absolute d-flex justify-content-end">
				<img class="img-fluid" src="asset/img/nusantara.png" alt="">
			</div>
			</div>
		</div>
    <!-- end carousel -->

    <section class="p-5 mission">
      <div class="container-fluid">
        <!-- title -->
        <div class="row text-black text-center">
          <div class="col m-4 text-center">

            <h1 class="display-6 mb-1 fw-bold">Misi</h1>
       
            <p class="lead mb-5">menghadirkan teknologi yang sesuai dengan apa yang kita butuhkan. 
              Dan teknologi tersebut kita debut Green Technology.</p>
              <hr>
          </div>
        </div>
        <!-- end of title -->
        <div class="row my-5">
          <div class="col-md-4 text-center">
            <img src="asset/img/icons/wallet-fill.svg" class="fa-5x wallet mb-4" width="100vw" height="100vh" alt="">
            <h1 class="text-black fs-3 fw-bold mb-3">Ramah</h1>
            <p class="text-muted">dengan teknologi Green technology kita dapat menghasilkan produk 0 emisi dan tentunya ramah lingkungan selain itu teknologi ini memiliki banyak manfaat</p>
          </div>
          <div class="col-md-4 text-center">
            <img src="asset/img/icons/sun-fill.svg" class="fa-5x sun mb-4" width="100vw" height="100vh" alt="">
              <h1 class="text-black fs-3 fw-bold mb-3">Kualitas</h1>
              <p class="text-muted">produk ini adalah produk yang handal dan fungsional artinya produk ini mampu berfungsi dengan medan berat dan perlakuan yang berat sesuai dengan spesifikasi</p>
          </div>
          <div class="col-md-4 text-center">
            <img src="asset/img/icons/graph-up-arrow.svg" class="fa-5x arrow mb-4" width="100vw" height="100vh" alt="">
              <h1 class="text-black fs-3 fw-bold mb-3">Efektif</h1>
              <p class="text-muted">bentuk A dan kita dapatkan energi dalam bentuk B yg kita butuhkan adalah petbandingan B/A yang disebut efiensi energi. jika mendekati 1 bisa disebut efektif dan tdk pernah bernilai 1 karena hukum kekekalan energi</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 text-center">
            <img src="asset/img/solar.png" width="350" class="img-fluid camera-img">
          </div>
          <div class="col-lg-7 text-black text-lg-right  mission-text">
            <h1 class="fw-bold">Apa yang kita lakukan?</h1>
            <p class="lead">Memberi solusi yang tepat jujur dan  bertanggung jawab sesusi dengan kemajuan teknology</p>
            <p class="lead">Detail yg bisa dikerjakan Permata Dewa adalah :</p>
            <ul class="lead fs-6">
              <li>1 pengadaan barang dan jasa pwmbangkit listrik tenaga surya dengan Solar Tracking, maupun panel surya atab dan LPJ penerangan jalan semua modul kontrol diproduksi permata dewa dengan garansi sampai 5 thn</li>
              <li>2.pengadaan panel VSD , panel variabel speed untuk pumpa air, fan, pendingin  dan kebutuhan automatisasi lain yang berbasis plc.</li>
              <li>3.pengadaan dannperbaikan panel Genset, ats amf, dan operatorless panel untuk genset, dan panel lain sesuai kebutuhan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <div class="container">
    <div class="row text-black text-center" id="grid">
      <div class="col m-5">
      
        <h1 class="display-5 mb-3 fw-bold">Galeri Foto</h1>
        <div class="underline mb-5"></div>
      </div>
      <div class="row mb-5">
    
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 ">
          <div class="pudar mb-4">
          <img src="asset/img/1 (6).jpeg" class="img-fluid" alt="">
          <div class="isian">Danfos</div>
        </div>

        <div class="pudar mb-4">
          <img src="asset/img/1 (5).jpg" class="img-fluid" alt=""
            data-wow-delay="0.3s">
            <div class="isian">Panel Surya</div>
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="pudar mb-4">
          <img src="asset/img/1 (4).jpg" class="img-fluid " alt=""
            data-wow-delay="0.1s">
            <div class="isian">Panel Surya</div>
            </div>
            <div class="pudar mb-4">
          <img src="asset/img/1 (3).jpeg" class="img-fluid " alt=""
            data-wow-delay="0.4s">
            <div class="isian">Perbaikan panel</div>
            </div>
        </div>
        <!--Grid column-->
   
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="pudar mb-4">
          <img src="asset/img/1 (1).jpeg" class="img-fluid " alt=""
            data-wow-delay="0.2s">
            <div class="isian">Alat pendidikan Electro</div>
            </div>
            <div class="pudar mb-4">
          <img src="asset/img/1 (4).jpeg" class="img-fluid  " alt=""
            data-wow-delay="0.5s">
            <div class="isian">Perbaikan panel</div>
          </div>
        </div>   
      </div>
    </div>
  </div>
  <hr>
  <!-- product -->
  <div class="container mt-5 mb-5" >
    <div class="row text-black text-center">
      <div class="col m-4" id="produk">
        <a
        href="#"
        class="logoku brend border-rounded justify-content-center"
      >
        <img
          src="asset/img/icons/gem-solid.svg"
          alt=""
          width="50vw"
          height="50vw"
        />
      </a>
        <h1 class="display-4 mb-2 fw-bold">Produk kita</h1>
        <div class="underline mb-4"></div>
        <p class="lead"></p>
      </div>
    </div>
</div>
<div class="container mt-5">
  <div class="text-product mb-3">
    <h2 class="fs-1 fw-bold text-uppercase">Produk Penjualan</h2>
  </div>
  <div class="owl-carousel owl-theme">
      <div class="card text-center border-primary mb-3">
        <img src="asset/img/solar.png" width="100%" height="100%" />
        <div class="card-body text-primary">
          <h5 class="card-title">1</h5>
          <p class="card-text">PLTS</p>
          <a href="produk_penjualan.php?items=solar_tracking" class="btn btn-outline-primary">Lihat</a>
        </div>
      </div>
      <div class="card text-center border-primary mb-3">
        <img src="asset/img/vfd.png" width="100%" height="100%" />
        <div class="card-body text-primary">
          <h5 class="card-title">2</h5>
          <p class="card-text"> Panel VFD|VSD </p>
          <a href="produk_penjualan.php?items=Panel_vfd" class="btn btn-outline-primary">Lihat</a>
        </div>
      </div>
      <div class="card text-center border-primary mb-3">
        <img src="asset/img/perbaikan_panel.png" width="100%" height="100%" />
        <div class="card-body text-primary">
          <h5 class="card-title">3</h5>
          <p class="card-text">Perbaikan Panel</p>
          <a href="produk_penjualan.php?items=perbaikan_panel" class="btn btn-outline-primary">Lihat</a>
        </div>
      </div>
      <div class="card text-center border-primary mb-3">
        <img src="asset/img/perbaikan_travo.png" width="100%" height="100%" />
        <div class="card-body text-primary">
          <h5 class="card-title">4</h5>
          <p class="card-text">Rewending Elektro motor</p>
          <a href="produk_penjualan.php?items=rewinding" class="btn btn-outline-primary">Lihat</a>
        </div>
    </div>
    <div class="card text-center border-primary mb-3">
      <img src="asset/img/soon.png" width="100%" height="100%" />
      <img src="asset/img/soon.png" width="100%" height="100%" />
      <div class="card-body text-primary">
        <h5 class="card-title">-</h5>
        <p class="card-text">-</p>
        <a href="#" class="btn btn-outline-primary">Lihat</a>
      </div>
  </div>
  <div class="card text-center border-primary mb-3">
    <img src="asset/img/soon.png" width="100%" height="100%" />
    <img src="asset/img/soon.png" width="100%" height="100%" />
    <div class="card-body text-primary">
      <h5 class="card-title">-</h5>
      <p class="card-text">-</p>
      <a href="#" class="btn btn-outline-primary">Lihat</a>
    </div>
</div>

  </div>
  
    <hr class="mt-5 mb-5">
    
  <!-- end of product -->
  <script src="asset/js/jquer.js"></script>
  <script src="owl/docs/assets/owlcarousel/owl.carousel.min.js"></script>
   <script src="asset/js/jquer.js"></script>
  <script src="owl/docs/assets/owlcarousel/owl.carousel.min.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script>
  </body>
  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">

  <footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Tentang PermataDewa</h5>

          <p>
            Permata Dewa  bergerak dibidang pengadaan  barang Dan jasa teknik 
            dengan misi meningkatkan penggunaan energi yang efesien dan ramah lingkungan , untuk hari esok yang lebih baik.
          </p>

          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-facebook-f"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-dribbble"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-twitter"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-light btn-lg"><i class="fab fa-google-plus-g"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Email anda</h5>
        <form action="#" method="post">
          <div class="form-outline form-white mb-4">
            <label class="form-label" for="formControlLg">Email</label>
            <input type="text" id="formControlLg" name="email" placeholder="contoh123@gmail.com" class="form-control form-control-lg" />
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Denpasar 20 juni 2022</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">permatadewa@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+62 8174763291</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>

          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
                <td>senin - kamis:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>jumat - sabtu:</td>
                <td>8am - 1pm</td>
              </tr>
              <tr>
                <td>minggu:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  </footer>

</div>
<!-- End of .container -->
</html>
