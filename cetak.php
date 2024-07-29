<?php
require_once __DIR__ . '/vendor/autoload.php';

// Mulai session dan koneksi database
session_start();
include 'function.php';

// Ambil nama pengguna dari sesi
if (isset($_SESSION['nama'])) {
    $nama = $_SESSION['nama'];
} else {
    $nama = 'Pengguna'; // Nama default jika tidak ada nama pengguna dalam sesi
}

$mpdf = new \Mpdf\Mpdf();

ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PDF Hasil Diagnosa</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 100%;
            margin: 0 auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }

        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
            vertical-align: top;
        }

        .table th {
            text-align: left;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .align-middle {
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <section class="hasil mt-4">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Berikut hasil diagnosa untuk: <?php echo $nama ?> </h4>
                    <?php
                    $diseases = [
                        'Scabies Pada Anak Anak' => $_SESSION['scabiesPadaAnakAnak'],
                        'Scabies Pada Orang Dewasa' => $_SESSION['scabiesPadaOrangDewasa'],
                        'Scabies Pada Orang Bersih' => $_SESSION['scabiesPadaOrangBersih'],
                        'Scabies Yang Ditularkan Hewan' => $_SESSION['scabiesYangDitularkanHewan']
                    ];
                    ?>
                    <table class="table table-bordered card-deck">
                        <tr>
                            <td class="align-middle font-weight-bold">Nama Penyakit</td>
                            <td>
                                <?php
                                foreach ($diseases as $name => $percentage) {
                                    echo "<p>{$name} = <strong>{$percentage}%</strong> </p>";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Penyakit yang di derita</td>
                            <td> <?php
                                    $penyakit_tertinggi = array_keys($diseases, max($diseases))[0];
                                    echo $penyakit_tertinggi;
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Persentase</td>
                            <td> <?php echo "<strong>$diseases[$penyakit_tertinggi]%</strong>" ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle font-weight-bold">Gejala yang dipilih</td>
                            <td> <?php
                                    $no = 1;
                                    foreach ($_SESSION['persentase'] as $id_gejala) {
                                        $query = "SELECT * FROM gejala WHERE id_gejala = '$id_gejala'";
                                        $data = mysqli_query($koneksi, $query);
                                        while ($row = mysqli_fetch_array($data)) {

                                            echo "<p> {$no}. " . $row['gejala'] . " ? </p>";
                                            $no++;
                                        }
                                    }
                                    ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Deskripsi dan Solusi yang di berikan</td>
                            <td>
                                <?php
                                if (count($_SESSION['persentase']) > 0) {
                                    function maximum($a, $b, $c, $d)
                                    {
                                        $max = $a;
                                        $kode = 1;
                                        if ($b > $max) {
                                            $max = $b;
                                            $kode = 2;
                                        }
                                        if ($c > $max) {
                                            $max = $c;
                                            $kode = 3;
                                        }
                                        if ($d > $max) {
                                            $max = $d;
                                            $kode = 4;
                                        }
                                        return  $kode;
                                    }

                                    $id_penyakit = maximum($_SESSION['scabiesPadaAnakAnak'], $_SESSION['scabiesPadaOrangDewasa'], $_SESSION['scabiesPadaOrangBersih'], $_SESSION['scabiesYangDitularkanHewan']);
                                    $query = "SELECT * FROM solusi WHERE id_penyakit = '$id_penyakit'";
                                    $data = mysqli_query($koneksi, $query);
                                    while ($row = mysqli_fetch_array($data)) {
                                        echo '<p><strong>Deskripsi :</strong> ' . $row['deskripsi'] . '</p> <br>';
                                        echo '<p><strong>Solusi :</strong>' . $row['solusi'] . '</p>';
                                    }
                                } else {
                                    echo '<p>Tidak ada gejala yang dipilih, jadi tidak ada hasil.</p>';
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
$html = ob_get_contents();
ob_end_clean();

$fileName = 'hasil_diagnosa_' . $nama . '.pdf';

$mpdf->WriteHTML($html);
$mpdf->Output($fileName, 'D');
?>