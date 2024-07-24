<?php


include "function.php";
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {
        header("location: test.php");
    }
} else {
    header("location:index.php");
}

$queryPasien = mysqli_query($koneksi, "SELECT * FROM user WHERE role = '1'");

$jumlahPasien = mysqli_query($koneksi, "SELECT COUNT('id_user') as jml_pasien FROM user WHERE role='1'");
$pasien = mysqli_fetch_assoc($jumlahPasien);

$jumlahPenyakit = mysqli_query($koneksi, "SELECT COUNT('id_penyakit') as jml_penyakit FROM penyakit");
$penyakit = mysqli_fetch_assoc($jumlahPenyakit);

$jumlahGejala = mysqli_query($koneksi, "SELECT COUNT('id_gejala') as jml_gejala FROM gejala");
$gejala = mysqli_fetch_assoc($jumlahGejala);

$jumlahSolusi = mysqli_query($koneksi, "SELECT COUNT('id_solusi') as jml_solusi FROM solusi");
$solusi = mysqli_fetch_assoc($jumlahSolusi);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

</head>

<body>
    <div class="kiri bg-info">
    
        <section class="logo ">
        <a href="indexAdmin.php"> 
        <img src="gambar/DPS1.png" alt="" style="width: 100px; left:auto; right:auto;" class="ml-5 mr-5">
        </a>
        
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Users & Pakar </h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexUser.php">
                <span>Data Users</span></a>
        </section>

        <section class="isi">
            <a class="nav-link" href="indexPakar.php">
                <span>Data Pakar</span></a>
        </section>

        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Gejala & Penyakit</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexPenyakit.php">
                <span>Data Penyakit</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link" href="indexGejala.php">
                <span>Data Gejala</span>
            </a>
        </section>
        <div class="sidebar-heading">
            <h5 class="font-weight-bold text-white text-uppercase teks">Solusi</h5>
        </div>
        <section class="isi">
            <a class="nav-link" href="indexSolusi.php">
                <span>Data Solusi</span>
            </a>
        </section>
        <section class="isi">
            <a class="nav-link bg-danger rounded mb-4" href="logout.php">
                <span>Logout</span>
            </a>
        </section>
    </div>

    <div class="kanan ">
        <div class="container-fluid mt-5 ">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><strong>
                    <a  style="color: black; 
    text-decoration: none;" href="indexAdmin.php">DASHBOARD</a></strong></h1>
            </div>
            <!-- Content Row -->
            <div class="row ">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pasien['jml_pasien']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Penyakit</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $penyakit['jml_penyakit']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Gejala</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $gejala['jml_gejala']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Solusi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $solusi['jml_solusi']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- <section class="section dashboard">
      <div class="row"> -->

        <!-- Left side columns -->
        <div class="col-lg-12">
              <div class="card ">
                  <!-- Background image -->
                  <div class="p-3 text-center bg-image" style="
                      background-image: url(gambar/bg-1.jpg);
                      height:450px;">
                    <div class="mask pt-2 pb-2" style="background-color: rgba(0, 0, 0, 0.6); margin:100px 0;">
                      <div class="d-flex justify-content-center align-items-center h-100 pt-3 ">
                        <div class="text-white">
                          <h3 class="fw-bold">Selamat Datang Di Halaman Utama Admin</h3>
                          <h1>"Sistem Pakar Diagnosa Penyakit Skabies"</h1>
                          <p class="lead">Halaman ini berfungsi sebagain control sistem pada sistem pakar untuk diagnosa penyakit scabies pada manusia.</p>
                          <!-- <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{url('diagnosa')}}" role="button">Mulai Diagnosa</a> <br><br> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div> 
      </div>
    </section>

                <!-- DataTales Example -->
                <!-- <div class="card shadow mb-12 w-100">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Users</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" encytpe="multipart/form-data">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>

                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Tgl Lahir</th>
                                        <th>Username</th>
                                        <?php if ($_SESSION['role'] == 1) {
                                            echo '<th>Aksi</th>';
                                        } ?>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($data = mysqli_fetch_assoc($queryPasien)) { ?>
                                        <tr>

                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['email']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['tgl_lahir']; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary p-1" href="ubahPasien.php?id_user=<?php echo $data["id_user"]; ?>" style="transition: all .2s ease-in-out;">
                                                    edit
                                                </a>
                                                <a href="function.php?act=hapusPasien&id_user=<?= $data["id_user"]; ?>" onclick="return confirm('Yakin ingin menghapus data?');" class="btn btn-danger p-1" style="transition: all .2s ease-in-out;">
                                                    hapus
                                                </a>


                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>
                    </div><br><br><br><br><br><br>
                </div> -->
    </div>

</body>

</html>