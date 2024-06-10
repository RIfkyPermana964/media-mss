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
    <title>Daftar Pembayaran</title>
    <link rel="stylesheet" href="../aset/style4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bb">
    <div class="container mt-5">
        <h2 class="bw">Status Pembayaran</h2>
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
                  <a href="?action=updateStatus&id=<?= $pembayaran['id'] ?>&status=Completed" class="btn btn-success">Completed</a>
                    <a href="?action=updateStatus&id=<?= $pembayaran['id'] ?>&status=Failed" class="btn btn-danger">Failed</a>
                    <a href="?action=delete&id=<?= $pembayaran['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
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
