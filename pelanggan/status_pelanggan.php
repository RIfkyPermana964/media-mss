<?php
require_once '../controllers/PelangganController.php';

$controller = new PelangganController($conn);
$pelanggan = $controller->index();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idpel = $_POST['idpel'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $noktp = $_POST['noktp'];
    $langganan = $_POST['langganan'];
    $paket = $_POST['paket'];
    $controller->create( $idpel, $nama, $alamat, $nohp, $email, $noktp, $langganan, $paket) ;  
    header('Location: index.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $controller->delete($_GET['id']);
    header('Location: status_pelanggan.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'edit') {
    $controller->edit($_GET['id'], $_GET['aksi']);
    header('Location: status_pelanggan.php');
}

if (!empty($pelanggan)) 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembayaran</title>
    <link rel="stylesheet" href="../aset/style4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bb">
    <div class="container mt-5">
    <h2 class="bw">Lihat Pendaftaran berhasil</h2>
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Hp</th>
            <th>Email</th>
            <th>No KTP</th>
            <th>Langganan</th>
            <th>paket</th>
            <th>Aksi</th>
            <th>---</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pelanggan as $pelanggan): ?>
            <tr>
                <td><?= $pelanggan['idpel'] ?></td>
                <td><?= $pelanggan['nama'] ?></td>
                <td><?= $pelanggan['alamat'] ?></td>
                <td><?= $pelanggan['nohp'] ?></td>
                <td><?= $pelanggan['email'] ?></td>
                <td><?= $pelanggan['noktp'] ?></td>
                <td><?=$pelanggan['langganan']?></td>
                <td><?=$pelanggan['paket'] ?></td>
                <td>
                  <a href="?action=edit&id=<?=$pelanggan['id'] ?>&aksi=berhasil" class="btn btn-success"> Berhasil</a>
                    <a href="?action=edit&id=<?= $pelanggan['id'] ?>&aksi=gagal" class="btn btn-danger">Gagal</a>
                    <a href="?action=delete&id=<?= $pelanggan['id'] ?>" class="btn btn-danger">Delete</a>
                </td> 
            </tr>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../aset//redirect.js"></script>
    <<script>

</body>
</html>
