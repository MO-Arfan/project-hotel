<?php
session_start();

if (isset($_SESSION['logint'])) {
    header("location:user/");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/sic.png" type="image/png">

	<title>Transylvania Hotel</title>
</head>
<body id="top">

    


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand">TRANSYLVANIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="kamar.php">Kamar</a></li>
                <li><a class="dropdown-item" href="fasilitas.php">Fasilitas umum</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="pendaftaran.php">Daftar</a></li>
              </ul>
            </li>
            
          </ul>
          
            <a href="logint.php"><button class="btn btn-outline-primary">Login</button></a>
         
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->

  <div class="slider-area">
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/room1.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s"></h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/room2.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s"></h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/room3.jpg" >
                    <div class="container mt-5">
                        <div class="row justify-content-center text-center text-white">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">TRANSYLVANIA</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/room4.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s"></h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





	<!-- card1 carousel -->
<div class="container mb-5">
    <div style="padding: 50px 100px 50px 100px;" class="card text-center">
      <div class="card-body">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/room1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Superior</h5>
                <p>Harga Rp 800.000</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/room2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Deluxe</h5>
                <p>Harga Rp 1.500.000</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/room3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Executive</h5>
                <p>Harga Rp 5.450.000</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>    
    </div>
</div>
    <!-- akhir card1 -->




    <!-- card2 form -->

<script type="text/javascript">
    function pilih() {
        var type = document.opsi.tipe.value;
        var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
        document.opsi.harga.value = type;
        document.opsi.tipex.value = teks;

    }
</script>
<div class="container">
    <div class="card mb-5">
        <div class="card-header">
            <h2 style="font-weight:200;" class="alert alert-primary text-center mt-3">PESAN KAMAR</h2>
        </div>
      <div class="card-body">
        

        <div style="padding-left: 100px; padding-right: 100px;" class="container mb-4">
            <form method="post" action="user/pemesanan.php" name="opsi">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tglmasuk">Check in</label>
                            <input type="date" name="tglmasuk" class="form-control" id="tglmasuk" required="required">
                        </div>
                    </div>
                
                    <div class="col">
                        <div class="form-group">
                            <label for="tglkeluar">Check out</label>
                            <input type="date" name="tglkeluar" class="form-control" id="tglkeluar" required="required">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-select" name="tipe" id="selek" required="required" onchange="pilih()" aria-label="Default select example">
                              <option selected="selected" disabled>Tipe</option>
                              <option value="Rp 450.000">Superior</option>
                              <option value="Rp 700.000">Deluxe</option>
                              <option value="Rp 1.350.000">Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="jumlah">Jumlah kamar</label>
                            <input type="number" name="jumlah" class="form-control" id="jumlah" required="required">
                        </div>
                    </div>
                    
                </div>
                <br>

                <button type="submit" class="btn btn-success" name="submit">PESAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>

            </form>
            <br>
            <a href="kamar.php"><button type="submit" class="btn btn-primary" >INFO KAMAR</button></a>
        </div>

      </div>
      <div class="card-footer text-muted">
           
        </div>    
    </div>
</div>
  <!-- akhir card2 -->

  <!-- cardcaption -->
  <div class="container mb-5">
        <div class="card">

            <div class="card-header text-muted text-center">
            <h2 style="font-weight:200;" class="alert alert-primary text-center mt-3">FASILITAS UMUM HOTEL</h2>
            </div>


            <?php
                    include'fungsi/koneksi.php';

                    $data = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 1");
                    $d = mysqli_fetch_array($data);

                    $data2 = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 2");
                    $d2 = mysqli_fetch_array($data2);
                    
                    $data3 = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 3");
                    $d3 = mysqli_fetch_array($data3);

                        ?>


            <div class="card-group">
              <div style="border:0;" class="card">
                <img style="height:300px;" src="img/<?php echo $d['gambar']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-transform: capitalize;"><?php echo $d['namafas']?></h5>
                  <p class="card-text"><?php echo $d['deskrip']?></p>
                </div>
                
              </div>
              <div style="border:0;" class="card">
                <img style="height:300px;" src="img/<?php echo $d2['gambar']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-transform: capitalize;"><?php echo $d2['namafas']?></h5>
                  <p class="card-text"><?php echo $d2['deskrip']?></p>
                </div>
                
              </div>
              <div style="border:0;" class="card">
                <img style="height:300px;" src="img/<?php echo $d3['gambar']?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="text-transform: capitalize;"><?php echo $d3['namafas']?></h5>
                  <p class="card-text"><?php echo $d3['deskrip']?></p>
                </div>
                
              </div>
            </div>
        </div>
    </div>


 <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
<footer>
     <div style="height:300px;" class="card-group">
              <div style="padding-top:10px; padding-left: 20px; border: 0;" class="card">
                <div class="card-body">
                  <h2 class="card-title">HOTEL TRANSYLVANIA</h2>
                  <p class="card-text">CALL CENTER<br><span>+6287 0636 9944</span></p>
                  <p class="card-text">EMAIL<br><span>HTRAN@mail.co</span></p>
                  <p class="card-text">WHATSAPP<br><span>+6287 0636 9944</span></p>
                </div>

              </div>
              
              <div style="padding-top:10px; padding-left: 20px; border: 0;" class="card">
                
                <div class="card-body">
                  <h2 class="card-title">PELAYANAN</h2>
                  <h3 style="font-weight:200;" class="card-text">Reservasi hotel.<br><span>Anda adalah prioritas kami! Karena itu, kami melayani reservasi hotel anda untuk memastikan liburan anda selalu nyaman dan menyenangkan.</span></h3>
                </div>
                
              </div>
              <div class="card">
                <img style="height:300px; width: 100%; border: 0;" src="img/gp.png" class="card-img-top">
                
                
              </div>
            </div>
</footer>
</html>