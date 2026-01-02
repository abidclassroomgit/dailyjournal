<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">WEBSITE HIJAU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                    <div class="d-flex justify-content-center gap-1">
                        <button id="dark-mode" class="btn btn-dark border border-light"
                            style="width: 40px; height: 40px;"><i class="bi bi-lightbulb-fill"></i></button>
                        <button id="light-mode" class="btn btn-light border border-dark"
                            style="width: 40px; height: 40px;"><i class="bi bi-lightbulb"></i></button>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- hero start -->
    <section id="hero" class="text-center p-5 bg-success text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/banner.jpg" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">Website gokil banget ini</h1>
                    <h4 class="lead display-6">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</h4>
                    <h6>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery start -->
    <section id="gallery" class="text-center p-5 bg-success">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/pegunungan.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/fenomena.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/kertas.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- Schedule start -->
    <section id="schedule" class="text-center p-5">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="bungkus1 d-md-flex justify-content-center">
            <div id="card1" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Senin</div>
                <div class="card-body">
                    <h4 class="card-title">Logika Informatika</h4>
                    <p class="card-text mb-0">09.30-12.00</p>
                    <p class="card-text">H.5.12</p>
                    <h4 class="card-title">Basis Data</h4>
                    <p class="card-text mb-0">14.10-15.50</p>
                    <p class="card-text">H.5.10</p>
                </div>
            </div>
            <div id="card2" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Selasa</div>
                <div class="card-body">
                    <h4 class="card-title">Rekayasa Perangkat Lunak</h4>
                    <p class="card-text mb-0">12.30-15.00</p>
                    <p class="card-text">H.5.10</p>
                    <h4 class="card-title">Sistem Operasi</h4>
                    <p class="card-text mb-0">15.30-18.00</p>
                    <p class="card-text">H.3.2</p>
                </div>
            </div>
            <div id="card3" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Rabu</div>
                <div class="card-body">
                    <h4 class="card-title">Kriptografi</h4>
                    <p class="card-text mb-0">09.30-12.00</p>
                    <p class="card-text">H.5.13</p>
                    <h4 class="card-title">Pemrograman Web</h4>
                    <p class="card-text mb-0">12.30-14.10</p>
                    <p class="card-text">D.2.J</p>
                </div>
            </div>
            <div id="card4" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Kamis</div>
                <div class="card-body">
                    <h4 class="card-title">Basis Data</h4>
                    <p class="card-text mb-0">14.10-15.50</p>
                    <p class="card-text">D.2.K</p>
                </div>
            </div>
        </div>

        <div class="bungkus2 d-md-flex justify-content-center">
            <div id="card5" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Jumat</div>
                <div class="card-body">
                    <h4 class="card-title">Probabilitas & Statistik</h4>
                    <p class="card-text mb-0">09.30-12.00</p>
                    <p class="card-text">H.3.2</p>
                    <h4 class="card-title">Penambangan Data</h4>
                    <p class="card-text mb-0">13.00-15.30</p>
                    <p class="card-text">H.4.2</p>
                </div>
            </div>
            <div id="card6" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Sabtu</div>
                <div class="card-body">
                    <h4 class="card-title">Tidak ada jadwal</h4>
                </div>
            </div>
            <div id="card7" class="card text-bg-success mb-3 me-3 shadow" style="max-width: 18rem;">
                <div class="card-header">Minggu</div>
                <div class="card-body">
                    <h4 class="card-title">Tidak ada jadwal</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule end -->

    <!-- Profile start -->
    <section id="profile" class="text-center p-5 bg-success">
        <h1 class="fw-bold display-4 pb-3">Profil Mahasiswa</h1>
        <div class="container d-md-flex justify-content-center align-items-center">
            <img src="img/FotoAbid.jpg" class="rounded-circle mb-3 me-md-5 mt-md-0 mb-md-0 shadow" width="200"
                height="200" alt="">
            <div id="cardProfile" class="card text-bg-white mb-3 mt-md-0 ms-md-5 mb-md-0 shadow text-start w-100"
                style="max-width: 450px;">
                <div class="card-title text-center">
                    <h5 class="mt-2">Muhammad Abid</h5>
                    <p>Mahasiswa Teknik Informatika</p>
                </div>
                <div class="card-body text-start">
                    <div class="row">
                        <div class="col-4 fw-bold">NIM</div>
                        <div class="col">: A11.2024.12345</div>
                    </div>
                    <div class="row">
                        <div class="col-4 fw-bold">Program Studi</div>
                        <div class="col">: Teknik Informatika</div>
                    </div>
                    <div class="row">
                        <div class="col-4 fw-bold">Email</div>
                        <div class="col">: 111202415597@mhs.dinus.ac.id</div>
                    </div>
                    <div class="row">
                        <div class="col-4 fw-bold">Alamat</div>
                        <div class="col">: Jl.Nanas</div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a id="btn-profile" href="https://wa.me/+62812685577" class="btn btn-success">Telepon</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile end -->

    <!-- footer start -->
    <footer id="footer" class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/udinusofficial"><i id="icon1"
                    class="bi bi-instagram h-2 p-2 text-dark"></i></a>
            <a href="https://www.twitter.com/udinusofficial"><i id="icon2"
                    class="bi bi-twitter h-2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+62812685577"><i id="icon3" class="bi bi-whatsapp h-2 p-2 text-dark"></i></a>
        </div>
        <div>Muhammad Abid &copy; 2025</div>
    </footer>
    <!-- footer end -->

    <style>
        @media (max-width: 576px) {
            #cardProfile {
                font-size: 0.5rem;
            }

            #profile h1 {
                font-size: 1.8rem;
            }

            #cardProfile .card-title h5 {
                font-size: 1rem;
            }

            #cardProfile .card-title p {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }
        document.getElementById("dark-mode").onclick = function () {
            document.body.classList.add("bg-dark", "text-white");
            document.getElementById("hero").classList.add("bg-warning", "text-dark");
            document.getElementById("gallery").classList.add("bg-warning", "text-dark");
            document.getElementById("icon1").classList.add("text-white");
            document.getElementById("icon2").classList.add("text-white");
            document.getElementById("icon3").classList.add("text-white");
            document.getElementById("card1").classList.add("bg-warning", "text-dark");
            document.getElementById("card2").classList.add("bg-warning", "text-dark");
            document.getElementById("card3").classList.add("bg-warning", "text-dark");
            document.getElementById("card4").classList.add("bg-warning", "text-dark");
            document.getElementById("card5").classList.add("bg-warning", "text-dark");
            document.getElementById("card6").classList.add("bg-warning", "text-dark");
            document.getElementById("card7").classList.add("bg-warning", "text-dark");
            document.getElementById("profile").classList.add("bg-warning", "text-dark");
            document.getElementById("cardProfile").classList.add("bg-white", "text-dark");
            document.getElementById("btn-profile").classList.add("btn-dark", "text-white");
        }
        document.getElementById("light-mode").onclick = function () {
            document.body.classList.remove("bg-dark", "text-white");
            document.getElementById("hero").classList.remove("bg-warning");
            document.getElementById("gallery").classList.remove("bg-warning");
            document.getElementById("icon1").classList.remove("text-white");
            document.getElementById("icon2").classList.remove("text-white");
            document.getElementById("icon3").classList.remove("text-white");
            document.getElementById("card1").classList.remove("bg-warning", "text-dark");
            document.getElementById("card2").classList.remove("bg-warning", "text-dark");
            document.getElementById("card4").classList.remove("bg-warning", "text-dark");
            document.getElementById("card3").classList.remove("bg-warning", "text-dark");
            document.getElementById("card5").classList.remove("bg-warning", "text-dark");
            document.getElementById("card6").classList.remove("bg-warning", "text-dark");
            document.getElementById("card7").classList.remove("bg-warning", "text-dark");
            document.getElementById("profile").classList.remove("bg-warning", "text-dark");
            document.getElementById("cardProfile").classList.remove("bg-white", "text-dark");
            document.getElementById("btn-profile").classList.remove("btn-dark", "text-white");
        }
    </script>
</body>

</html>