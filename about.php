<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="pendaf.css">
    <link rel="icon" href="img/sic.png" type="image/png">

    <title>Transylvania Hotel</title>
</head>
<body>


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
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="kamar.php">Kamar</a></li>
                <li><a class="dropdown-item" href="fasilitas.php">Fasilitas Umum</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="pendaftaran.php">Daftar</a></li>
              </ul>
            </li>
            
          </ul>
          
         
        </div>
      </div>
    </nav>

    <!-- akhir navbar -->



    <div style="margin-top:100px; margin-bottom: 100px; width:800px;" class="container">

        <div style="border: 0;" class="card text-center mb-2 mt-5">
            <div class="card-header">
                Created By
            </div>
            <div class="card-body">
                <img style="width: 200px; height: 300px; margin-bottom:10px;" src="img/ko.png" class="rounded-circle">
                <h5 class="card-title">Moch Arfan Nurrachman</h5>
                <p class="card-text">12 RPL 1</p>
            </div>
            <div class="card-footer text-muted">
                2022
            </div>
        </div>
        <center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
    </div>

        
    </div>


    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>