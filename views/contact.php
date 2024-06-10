<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafa.Net</title>
    <link rel="stylesheet" href="../aset/style5.css">
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

    <!--Utama Kontak -->
    <div class="container">
  <div class="contact-info">
    <h1>Kontak Kami</h1>
    <p>
      Jika Anda memiliki pertanyaan atau memerlukan bantuan, jangan ragu untuk menghubungi kami.
    </p>
    <ul>
      <li>
        <strong>Alamat:</strong> Perum. Bumi Karawang Residence, Blok G12 No. 9, Desa Cengkong, Kecamatan Purwasari, Kabupaten Karawang.
      </li>
      <li>
        <strong>E-mail:</strong> <a href="mailto:admin@mediasolusisukses.co.id">admin@mediasolusisukses.co.id</a>
      </li>
      <li>
        <strong>Telepon:</strong> <a href="tel:021-3977-0044">021-3977-0044</a>
      </li>
      <li>
        <strong>WhatsApp:</strong> <a href="https://wa.me/6282297560210" target="_blank">0822-9756-0210</a>
      </li>
    </ul>
    <a href="https://maps.app.goo.gl/j5H2DPZKTFS1j3Ss5" target="_blank" class="btn btn-map">
      Lihat Lokasi Kami
    </a>
  </div>
</div>


<!-- Link to Font Awesome for icons
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->



    <script src="../aset//search.js"></script>
  </body>
</html>
