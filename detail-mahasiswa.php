<?php

session_start();

// membatasi halaman sebelum login
if (!isset($_SESSION["login"])) {
    echo "<script>
    alert('login dulu bos');
    document.location.href = 'login.php';
    </script>";
    exit;
}

include 'layout/header2.php';

$title = 'Detail Mahasiswa';

//mengambil id mahasiswa dari url
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

//menampilkan data mahasiswa
$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa")[0];

?>

<div class="container mt-5">
    <h1>Data <?= $mahasiswa['nama']; ?></h1>
    <hr>
    
    <table class="table table-bordered table-striped mt-3">
        <tr>
            <td>Nama</td>
            <td>: <?= $mahasiswa['nama'];?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>: <?= $mahasiswa['prodi'];?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $mahasiswa['jk'];?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>: <?= $mahasiswa['telepon'];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $mahasiswa['alamat'];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $mahasiswa['email'];?></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
            <a href="assets/img/<?= $mahasiswa['foto']; ?>">
            <img src="assets/img/<?= $mahasiswa['foto']; ?>" alt="foto" width="25%">
            </td>
                </a>    
        </tr>
    </table>

    <a href="mahasiswa.php" class="btn btn-secondary btn-sm" style="float: right;">Kembali</a>
</div>

<?php include 'layout/footer2.php' ?>