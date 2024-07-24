<?php
include 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <title>Skabies</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg  navbar-light bg-info " id="1">
    <div class="container-md">
      <a class="navbar-brand" href="#">
        <img src="gambar/DPS1.png" alt="" style="width: 100px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarSupportedContent" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item align-self-center active">
            <a class="nav-link text-light " href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item align-self-center active">
            <a class="nav-link text-light" href="#flow">Flow<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item align-self-center active">
            <a class="nav-link text-light" href="#about">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item align-self-center active">
            <a class="nav-link text-light" href="#faq">FAQ<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item ">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-login text-light bg-primary" data-toggle="modal" data-target="#exampleModal">Log In</button>
            </button>

            <!-- Login -->
            <div class="modal fade bg-light  justify-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog " role="document">
                <div class="modal-content bg-info">
                  <div class="text-center mt-3 ">
                    <h3 class="modal-title text-light" id="exampleModalLabel" >Log In</h3>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> -->
                  </div>
                  <div class="modal-body ">
                    <form id="login-form" action="function.php?act=login" method="POST">
                      <div class="form-group">
                        <div id="result"></div>
                        <label for="nama" class="col-form-label">Username :</label>
                        <input type="text" class="form-control" id="nama" name="nama" rows="3" placeholder="Username">
                        <label for="pass" class="col-form-label">Password :</label>
                        <input type="password" class="form-control" id="password" name="password" rows="3" placeholder="Password">
                      </div>
                      <div class="form-row">
                      </div>
                      <div class="modal-footer">
                        <input type="submit" name="login_btn" id="login" class="btn bg-primary text-light" value="Log in">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </li>
          <li>
            <a class="btn px-4 btn-primary ml-2 btn-register bg-primary text-light" href="register.php" role="button">Register</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <section class="heroBWA bg-light">
    <div class="container-xl">
      <div class="row position-relative">
        <div class="col align-self-center">
          <h1 class="mb-4 ">Sistem Pakar Diagnosa Penyakit Skabies</h1>
          <h6 class="font-weight-normal">Diagnosa dan Identifikasi Penyakit Skabies Pada Manusia</h6>
          </p>
          <a class="btn btn-primary" href="register.php" role="button">Diagnosa Sekarang</a>
        </div>
        <div class="col d-none d-sm-block z-10">
          <img width="500" src="gambar/dok.png" alt="hero" />
        </div>
      </div>
    </div>
  </section>

  <section id="flow" class="py-5 ">
    <!--Content2-->
    <div class="container-xl" id="2">
      <h1 style=" text-align: center;" class="font-weight-normal ">Flow</h1>
      <p class="pb-5 text-center font-weight-light">Ikuti pentujuk dibawah ini, agar anda tidak kesulitan di diagnosa penyakit skabies</p>
      <p></p>
      <div class="card-deck text-center ">
        <div class="card border">
          <img src="gambar/biodata.jpg" class="card-img-top  mx-auto mt-5" style="width: 300px; height:250px">
          <div class="card-body pt-5">
            <h5 class="card-title ">Isi biodata</h5>
            <p class="card-text font-weight-light ">Silakan buka tautan Diagnosa dan lengkapi dengan informasi biodata anda..</p>
          </div>
        </div>
        <div class="card border">
          <img src="gambar/gejala.jpg" class="card-img-top mx-auto mt-5" style="width: 300px; height:250px">
          <div class="card-body pt-5">
            <h5 class="card-title">Pilih Gejala Penyakit</h5>
            <p class="card-text font-weight-light">Dalam tahap ini pengguna akan diberikan beberapa pertanyaan terkait dengan gejala yang dialami.</p>
          </div>
        </div>
        <div class="card border">
          <img src="gambar/hasil.jpg" class="card-img-top mx-auto mt-5" style="width: 300px; height:250px">
          <div class="card-body pt-5">
            <h5 class="card-title ">Hasil Penyakit Dan Solusi</h5>
            <p class="card-text font-weight-light">Hasil dari penyakit dari ayam akan muncul dan memberikan solusi terbaik..</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="py-4  container-xl" id="about">
    <div class="row  mb-5" id="3">
      <div class="col d-flex justify-content-center flex-column text-center mb-2 pt-4">
        <h1 class="font-weight-normal ">About</h1>
        <p class="font-weight-light">Sistem Pakar Diagnosa Penyakit Scabies: Solusi Cerdas untuk Kesehatan Kulit Anda.
        Website ini menyajikan Sistem Pakar berbasis web menggunakan metode Forward Chaining yang merupakan teknik inferensi dalam sistem pakar yang berproses dari fakta awal menuju kesimpulan melalui serangkaian aturan yang cocok, serta inovatif untuk mendiagnosa penyakit kulit, 
        khususnya scabies. Dengan menggunakan teknologi terkini dan basis data medis yang komprehensif,
         kami memberikan layanan diagnosa yang akurat dan cepat. 
         </p>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-5">
        <img src="gambar/kelebihan.PNG" style="width: 400px; height:400px">
      </div>
      <div class="col-7 d-flex justify-content-center flex-column">
        <h2 class="mt-1 ">Berikut adalah beberapa fitur utama:</h2>
        <ul>
              <li><i class="bi bi-check-circle"></i> Konsultasi Online: Pengguna dapat melakukan konsultasi online dengan sistem pakar kami, mengisi detail gejala dan informasi penting lainnya.</li>
              <li><i class="bi bi-check-circle"></i> Deteksi Level Penyakit: Melalui logika fuzzy, sistem pakar kami dapat menentukan tingkat keparahan penyakit scabies dengan akurasi tinggi.</li>
              <li><i class="bi bi-check-circle"></i> Basis Informasi Mendalam: Sistem pakar kami didukung oleh informasi medis terkini, memastikan analisis yang mendalam dan akurat</li>
              <li><i class="bi bi-check-circle"></i>Keamanan Data: Kami menjaga privasi pengguna dengan standar keamanan tinggi, memastikan data pribadi aman selama proses diagnosa.</li>
            </ul>
      </div>
    </div>
  </section>
  <section section class="  container-xl" id="faq" >
    <div class="row d-flex flex-column" id="4">
      <div class="pt-5 col d-flex justify-content-center flex-column text-center">
        <h1 class="font-weight-normal "> Frequently Asked Questions</h1>
        <p class="font-weight-light">Berikut ini merupakan kumpulan pertanyaan yang sering ditanyakan oleh pengguna atau pelanggan dan menyediakan jawaban atau solusi untuk pertanyaan tersebut. Tujuannya adalah untuk membantu pengguna atau pelanggan Anda menemukan informasi yang dibutuhkan dengan cepat.</p>
      </div>



      <div class="col ">
        <div class="accordion mb-5" id="accordionExample">
          <div class="card mb-3">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn font-weight-bold btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa itu scabies/kudis?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
              Kudis, disebut juga scabies atau gudik, adalah infeksi kulit yang disebabkan oleh tungau Sarcoptes scabiei.
                Tungau tersebut bereproduksi pada permukaan kulit, lalu masuk ke dalam kulit untuk bertelur, sehingga menyebabkan rasa gatal. Timbulnya rasa gatal dan keinginan menggaruk dapat lebih parah di malam hari.
                Penyakit ini terbilang sangat mudah menular dan menyebar dengan cepat, terlebih jika seseorang melakukan kontak fisik dekat dengan pengidapnya. Meski begitu, kudis dapat dengan mudah diobati yang mampu membunuh tungau serta telurnya pada kulit.
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn font-weight-bold btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Apa penyebab penularan penyakit scabies ?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
              Penyebab scabies adalah tungau jenis S. scabiei yang menginvasi kulit. Tungau ini biasanya terdapat di seprai, gorden, bantal, atau pakaian orang yang terinfeksi. Saat bersembunyi di bawah kulit, tungau membuat terowongan sebagai tempat ia menyimpan telur.
                Saat telur menetas, larva tersebut dapat muncul ke permukaan kulit dan menyebar ke area kulit lainnya, bahkan pindah ke orang lain. Gatal yang timbul karena penyakit ini merupakan reaksi tubuh terhadap tungau, telur, serta kotorannya.
                Kontak fisik dekat dengan seseorang yang mengidap penyakit ini, seperti berbagi pakaian atau tidur satu ranjang dapat meningkatkan risiko terinfeksi kudis. Rutin membersihkan tempat tidur dan tidak berbagi-pakai pakaian sangat penting untuk mencegah penularan.
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn font-weight-bold btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Apa sajah faktor penyebaran scabies?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
              <p>siapa pun dapat terkena kudis, tetapi risikonya lebih tinggi pada beberapa orang, seperti:</p>
              <p>- berkelompok, seperti pesantren, penjara, atau berkeluarga.</p>
              <p>- daya tahan tubuh yang lemah.</p>
              <p>- Mengonsumsi steroid.</p>
              <p>- Sedang menjalani kemoterapi.</p>
              <p>- Orang dewasa yang aktif secara seksual.</p>
              <p>- Untuk anak-anak, kerap berada di fasilitas penitipan.</p>
            </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn font-weight-bold btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Apa pencegahan yang dapat dilakukan agar tidak tertular skabies?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
              <p>
                Untuk mencegah infeksi skabies berulang dan penularannya kepada orang lain, beberapa langkah berikut dapat dilakukan:
                <p>- Mencuci semua pakaian dan kain yang digunakan.</p>
                <p>- Gunakan air hangat dan sabun untuk mencuci semua pakaian, handuk, dan seprai yang telah digunakan dalam tiga hari sebelum memulai pengobatan.</p>
                <p>- Keringkan dengan suhu tinggi. Untuk benda yang tidak dapat dicuci di rumah, gunakan layanan binatu.</p>
                <p>- Untuk benda yang tidak dapat dicuci, masukkan ke dalam plastik yang tertutup rapat dan simpan di tempat yang tidak terganggu selama sekitar dua minggu. Tungau akan mati jika tidak mendapatkan makanan selama beberapa hari.</p>
              </p></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section class="margin-top mb-5">
    <div class="pt-10 pb-10">
      <div class="container-xl mx-auto d-flex flex-wrap justify-content-center">
        <a href="" class="ml-4 md:ml-8">
          <img src="icon/facebook.svg" alt="Picture" width="40">
        </a>
        <a href="#" class="ml-4 md:ml-8">
          <img src="icon/twitter.svg" alt="Picture" width="40">
        </a>
        <a href="#" class="ml-4 md:ml-8">
          <img src="icon/instagram.svg" alt="Picture" width="40">
        </a>
        <a href="#" class="ml-4 md:ml-8">
          <img src="icon/linkedin.svg" alt="Picture" width="40">
        </a>
        <a href="#" class="ml-4 md:ml-8">
          <img src="icon/github.svg" alt="Picture" width="40">
        </a>
      </div>
    </div>
  </section> -->
  <footer class="footer bg-info py-3 mt-10">
    <div class=" container-xl">
      <div class="row">
        <!-- Footer Column 1 -->
        <div class="col-md-4 mb-3">
        <img src="gambar/DPS1.png" alt="LOGO" style="height:auto; width:200px" class="mb-2 mt-3" ><br>
               
        </p> 
        </div>
        <!-- Footer Column 2 -->
        <div class="col-md-4 mt-3 mb-3">
          <h5>Link </h5>
          <ul class="list-unstyled  text-light">
            <li><a href="#1">Home</a></li>
            <li><a href="#2">Flow</a></li>
            <li><a href="#3">About</a></li>
            <li><a href="#4">FAQ</a></li>
          </ul>
        </div>
        <!-- Footer Column 3 -->
        <div class="col-md-4 mt-3 mb-3">
          <h5>Kontak</h5>
          <strong>HASAN MAULANA</strong><br>
          <strong>Phone :</strong> +62-81936045095<br>
          <strong>Email  :</strong> hasmul074@gmail.com<br>
        </div>
      </div>
      <!-- Footer Bottom -->
    </div>
  </footer>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>