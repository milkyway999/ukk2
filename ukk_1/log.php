<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="log.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INI LOGIN</title>
</head>

<body>
  <div class="container">
    <!-- baris 1 -->
    <div class="row">
      <!-- kolom 1 -->
      <div class="col tes">
        <!-- corousel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="img/welcome1.png" class="d-block w-100" alt="...">
              <div class="carousel-capti on d-none d-md-block">
                <h5>registrasi</h5>
                <a href="registrasi.php">jika belum punya akun, silahkan klik link ini untuk membuat akun</a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/welcome2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>login</h5>
                <p>dimohon untuk login terlebih dahulu, form login tersedia disebelah kanan kamu</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/welcome3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>mohon untuk</h5>
                <p>tidak menggunakan bahasa kasar, rasis, dan hina</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- kolom 2 -->
      <div class="col">
        <!-- card -->
        <div class="shadow-lg p-3 mb-5 bg-body bulat" style="margin-top: 50px;">
          <div class="card shadow-lg bulat" style="height: 500px; width: 500px; padding: 50px 50px 50px 50px; background-color: #FFB703;">
            <!-- input -->
            <h1 style="text-align: center; color: black;">login dulu ya!</h1> <br> <br>

            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">username</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">password</span>
              <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div> <br>
            <!-- button -->
            <button class="btn btn-dark hover" style="color: #8ECAE6;">LOGIN</button>
            <a href="registrasi.php" style="text-align: center;">belum punya akun? klik disini</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>