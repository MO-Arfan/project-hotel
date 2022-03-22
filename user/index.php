<?php
session_start();

if (!isset($_SESSION['logint'])) {
    echo "<script>alert('Login Dulu Bang!');window.location='../logint.php'</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="icon" href="../img/sic.png" type="image/png">

    <title>Transylvania Hotel</title>
</head>
<body id="top">

    


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TRANSYLVANIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="datatransaksi.php">Data Pemesanan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../kamar.php">Kamar</a></li>
                <li><a class="dropdown-item" href="../fasilitas.php">Fasilitas Umum</a></li>
              </ul>
            </li>
            
          </ul>
          <a class="navbar-brand" href="profil.php">#<?php
             $nama=$_SESSION['username'];
             echo "$nama"
             ?></a>
          <form method="post" action="logout.php">
            <button class="btn btn-outline-primary" type="submit" name="logout">Logout</button>
          </form>
         
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->






  <!--carousel-->

  <div class="slider-area">
            <!-- Mobile Menu -->
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

        <!-- akhir carousel -->

    <!-- card2 -->

<script type="text/javascript">
    function pilih() {
        var type = document.opsi.tipe.value;
        var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
        document.opsi.harga.value = type;
        document.opsi.tipex.value = teks;

    }
</script>
<div class="container">
    <div style="margin-bottom: 100px;" class="card">
        <div class="card-header">
            <h2 class="alert alert-primary text-center mt-3">PESAN KAMAR</h2>
        </div>
      <div class="card-body">
        

        <div style="padding-left: 100px; padding-right: 100px;" class="container mb-5">
            <form method="post" action="pemesanan.php" name="opsi">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tglmasuk">Check in</label>
                            <input type="date" name="cekin" class="form-control" id="tglmasuk" required="required">
                        </div>
                    </div>
                
                    <div class="col">
                        <div class="form-group">
                            <label for="tglkeluar">Check out</label>
                            <input type="date" name="cekout" class="form-control" id="tglkeluar" required="required">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select class="form-select" name="tipe" id="selek" required="required" onchange="pilih()" aria-label="Default select example">
                              <option selected="selected" disabled>Tipe</option>
                              <option value="superior">Superior</option>
                              <option value="deluxe">Deluxe</option>
                              <option value="executive">Executive</option>
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
            <a href="../kamar.php"><button type="submit" class="btn btn-primary" >INFO KAMAR</button></a>
        </div>

      </div>
      <div class="card-footer text-muted">
           
        </div>    
    </div>
</div>
  <!-- akhir card2 -->
    

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
                <img style="height:300px; width: 100%; border: 0;" src="../img/gp.png" class="card-img-top">
                
                
              </div>
            </div>
</footer>

</html>