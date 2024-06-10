<?php
require_once '../controllers/PembayaranController.php';

$controller = new PembayaranController($conn);
$pembayarans = $controller->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $metode_pembayaran = $_POST['metodePembayaran'];
    $controller->create($nama, $email, $tanggal, $jumlah, $metode_pembayaran);  
    header('Location: index.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $controller->delete($_GET['id']);
    header('Location: status_pembayaran.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'updateStatus') {
    $controller->updateStatus($_GET['id'], $_GET['status']);
    header('Location: status_pembayaran.php');
}

if (!empty($pembayarans)) 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafa.Net</title>
    <link rel="stylesheet" href="../aset//style3.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bd">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PT Media Solusi Sukses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftarpaket.php">Paket wifi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="layanan.php">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Kontak</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" onsubmit="searchFunction(event)">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search" id="searchInput">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h2 class="mb-4">Layanan WiFi - Media Solusi Sukses</h2>
        <div class="row">
            <!-- Status Pesanan -->
            <div class="col-md-4">
                <div class="service-card">
                    <h4>Status Pesanan</h4>
                    <p>Informasi tentang status pesanan WiFi Anda:</p>
                    <ul>
                        <li>ID Pesanan: 22</li>
                        <li>Tanggal Pemesanan: 10 Januari 2024</li>
                        <li>Status: Completed	</li>
                    </ul>
                </div>
            </div>
            <!-- Status Pemasangan WiFi -->
            <div class="col-md-4">
                <div class="service-card">
                    <h4>Status Pemasangan WiFi</h4>
                    <p>Informasi tentang status pemasangan WiFi:</p>
                    <ul>
                        <li>Tanggal Pemasangan: 15 Januari 2024</li>
                        <li>Status: Menunggu Konfirmasi</li>
                    </ul>
                </div>
            </div>
        </div>
        <h2 class="bw">Riwayat Transaksi</h2>
    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Jumlah (IDR)</th>
            <th>Metode Pembayaran</th>
            <th>Status</th>
            <th>---</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pembayarans as $pembayaran): ?>
            <tr>
                <td><?= $pembayaran['id'] ?></td>
                <td><?= $pembayaran['nama'] ?></td>
                <td><?= $pembayaran['email'] ?></td>
                <td><?= $pembayaran['tanggal'] ?></td>
                <td><?= $pembayaran['jumlah'] ?></td>
                <td><?= $pembayaran['metode_pembayaran'] ?></td>
                <td><?= $pembayaran['status'] ?></td>
                <td>
                    <!--
                  <a href="?action=updateStatus&id=<?= $pembayaran['id'] ?>&status=Completed" class="btn btn-success">Set Completed</a>
                    <a href="?action=updateStatus&id=<?= $pembayaran['id'] ?>&status=Failed" class="btn btn-danger">Set Failed</a>
                    <a href="?action=delete&id=<?= $pembayaran['id'] ?>" class="btn btn-danger">Delete</a>
                </td> -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>

    <!-- Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../aset//search.js"></script>
</body>
</html>
