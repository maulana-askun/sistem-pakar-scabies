<?php


include "function.php";
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {
        header("location: test.php");
    }
} else {
    header("location:index.php");
}

$queryGejala = mysqli_query($koneksi, "SELECT * FROM gejala");

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
            <a class="nav-link" href="indexAdmin.php">
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

    <div class="kanan">
        <div class="container-fluid mt-5">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><strong>
                    <a  style="color: black; 
    text-decoration: none;" href="indexAdmin.php">DASHBOARD</a></strong></h1>
            </div>

            <!-- Content Row -->
            <div class="row">


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

                <!-- DataTales Example -->
                <div class="card shadow mb-12 w-100">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Gejala</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" encytpe="multipart/form-data">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center col-1">Id Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th class="text-center col-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($data = mysqli_fetch_assoc($queryGejala)) { ?>
                                        <tr>

                                            <td class="text-center"><?= $data['id_gejala']; ?></td>
                                            <td><?= $data['gejala']; ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-primary p-1" href="ubahGejala.php?id_gejala=<?php echo $data["id_gejala"]; ?>">edit</a>
                                                <a href="function.php?act=hapusGejala&id_gejala=<?= $data['id_gejala']; ?>" onclick="return confirm('Yakin ingin menghapus data?');" class="btn btn-danger p-1">hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <a href="tambahGejala.php" class="btn btn-primary my-2 px-2">Tambah Data Gejala</a>
                            </table>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>