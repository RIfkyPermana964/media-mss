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
    header('Location: ../pembayaran/index.php');
}
/*
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $controller->delete($_GET['id']);
    header('Location: index.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'updateStatus') {
    $controller->updateStatus($_GET['id'], $_GET['status']);
    header('Location: index.php');
}

// Pastikan $pembayarans telah diinisialisasi sebelum digunakan
if (!empty($pembayarans)) 
*/
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
        <h2>Data Pembayaran</h2>
        <form method="POST" class="fr">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="yy/mm/gg" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Pembayaran (IDR):</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah pembayaran" required>
            </div>
            <div class="form-group">
                <label for="metodePembayaran">Metode Pembayaran:</label>
                <select class="form-control" id="metodePembayaran" name="metodePembayaran">
                    <option value="bank">Transfer Bank</option>
                    <option value="ovo">OVO</option>
                    <option value="dana">DANA</option>
                    <option value="pinjol">PINJOL</option>
                </select>
            </div>
            <button type="submit" id="btnBayar" class="btn btn-primary">Bayar Sekarang</button>
            

        </form>
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
        <button class="button" onclick="navigateToPage()">kembali</button>
        
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../aset//redirect.js"></script>
    <script>
     document.getElementById("btnBayar").addEventListener("click", function(event) {
        var isValid = true;
        var requiredFields = document.querySelectorAll('input[required], select[required]');
        
        requiredFields.forEach(function(field) {
            if (!field.value) {
                    isValid = false;
                    field.classList.add('is-invalid');
             } else {
                    field.classList.remove('is-invalid');
             }
            });

             if (!isValid) {
              event.preventDefault();
                 alert('Mohon isi semua field yang wajib.');
                 }
             });
    </script>
     <script>
        function navigateToPage() {
            window.location.href = "../views/home.php";
        }
    </script>

</body>
</html>
