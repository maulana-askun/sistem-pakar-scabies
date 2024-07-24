<?php


include "function.php";
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {
        header("location: test.php");
    }
} else {
    header("location:index.php");
}

$id_gejala = $_GET["id_gejala"];

$queryPenyakit = mysqli_query($koneksi, "SELECT * FROM penyakit");

$query = mysqli_query($koneksi, "SELECT * FROM relasi INNER JOIN penyakit ON relasi.id_penyakit = penyakit.id_penyakit INNER JOIN gejala ON relasi.id_gejala = gejala.id_gejala WHERE relasi.id_gejala = '$id_gejala'");
$data = mysqli_fetch_assoc($query);


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
        <img src="gambar/DPS1.png" alt="" style="width: 100px; left:auto; right:auto;" class="ml-5 mr-5">
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
        <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 70vh;">
            <div class="card w-50">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">Form Ubah Gejala</h1>
                </div>
                <div class="card-body">
                    <form action="function.php?act=ubahGejala&id_gejala=<?= $data['id_gejala']; ?>" id="ubah" method="POST">
                        <div class="form-group">
                            <label for="namaGejala">Nama Gejala</label>
                            <input type="text" class="form-control" id="namaGejala" name="namaGejala" value="<?= $data['gejala']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_penyakit">Nama Penyakit</label>
                            <select name="id_penyakit" id="id_penyakit" class="form-control">
                                <option value="<?= $data['id_penyakit']; ?>"><?= $data['penyakit']; ?></option>
                                <?php while ($penyakit = mysqli_fetch_assoc($queryPenyakit)) { ?>
                                    <option value="<?= $penyakit["id_penyakit"]; ?>"><?= $penyakit["penyakit"]; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="submit" name="ubah_btn" id="ubah" class="btn btn-primary btn-block" value="Ubah">
                    </form>
                </div>
            </div>
        </div>

</body>

</html>