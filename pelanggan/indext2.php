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
    $controller->create( $idpel, $nama, $alamat, $nohp, $email, $noktp, $langganan, $paket);
    header('Location: ../pelanggan/indext2.php');
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
        <h2>Data Pendaftaran</h2>
        <form method="POST" class="fr">
            <div class="form-group">
                <label for="idpel">ID:</label>
                <input type="text" class="form-control" id="idpel" name="idpel" placeholder="Masukkan id Anda" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda disini" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat anda" required>
            </div>
            <div class="form-group">
                <label for="nohp">No Hp:</label>
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan Nomor Yang Bisa dihubungi" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="form-group">
                <label for="noktp">No KTP:</label>
                <input type="text" class="form-control" id="noktp" name="noktp" placeholder="Masukkan Nomor KTP Anda" required>
            </div>
            <div class="form-group">
                <label for="langganan">Langganan Sebagai:</label>
                <select class="form-control" id="langganan" name="langganan">
                    <option value="Mitra">Mitra</option>
                    <option value="Home">Home</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paket">Paket:</label>
                <input type="text" class="form-control" id="paket" name="paket" placeholder="Masukkan paket yang dipesan" required>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
            

        </form>
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
                    <!--
                  <a href="?action=aksi&id=<?=$pelanggan['id'] ?>&aksi=berhasil" class="btn btn-success">Set Berhasil</a>
                    <a href="?action=aksi&id=<?= $pelanggan['id'] ?>&aksi=gagal" class="btn btn-danger">Set Gagal</a>
                    <a href="?action=aksi&id=<?= $pelanggan['id'] ?>" class="btn btn-danger">Delete</a>
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
