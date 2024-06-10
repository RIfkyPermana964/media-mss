<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafa.Net</title>
    <link rel="stylesheet" href="../aset//style1.css">
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

    <!-- Utama -->

    <h3 class="homewifi">Daftar Harga Home Wifi</h3>

    <div class="columns">
    <ul class="price">
        <li class="header">Paket A</li>
        <li class="grey">Rp.173.000 / Bulan</li>
        <li class="putih">Unlimited</li>
        <li class="putih">Download Sepuasnya</li>
        <li class="putih">Kecepatan Stabil</li>
        <li class="blue">10 Mbps</li>
        <li class="grey">
            <a href="../pembayaran/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
    </ul>
</div>

    <div class="columns">
      <ul class="price">
        <li class="header">Paket B</li>
        <li class="grey">Rp.211.000 / Bulan</li>
        <li class="putih">Unlimited</li>
        <li class="putih">Download Sepuasnya</li>
        <li class="putih">Kecepatan Stabil</li>
        <li class="blue">20 Mbps</li>
        <li class="grey">
            <a href="../pelanggan/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
        
      </ul>
    </div>

    <div class="columns">
      <ul class="price">
        <li class="header">Paket C</li>
        <li class="grey">Rp.255.500 / Bulan</li>
        <li class="putih">Unlimited</li>
        <li class="putih">Download Sepuasnya</li>
        <li class="putih">Kecepatan Stabil</li>
        <li class="blue">40 Mbps</li>
        <li class="grey">
            <a href="../pelanggan/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
        
      </ul>
    </div>

    <h3 class="homewifi">Daftar Paket Mitra</h3>

    <div class="columns">
      <ul class="price">
        <li class="header">Bandwith</li>
        <li class="grey">35.000 / Mbps</li>
        <li class="putih">Dedicated</li>
        <li class="putih">Harga Belum Termasuk PPN 11%</li>
        <li class="putih">Bersedia Untuk PKS</li>
        <li class="putih">Berlaku untuk pelanggan upgrade</li>
        <li class="blue">50 Mbps</li>
        <li class="grey">
            <a href="../pelanggan/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
        
      </ul>
    </div>

    <div class="columns">
      <ul class="price">
        <li class="header">Bandwith</li>
        <li class="grey">30.000 / Mbps</li>
        <li class="putih">Dedicated</li>
        <li class="putih">Harga Belum Termasuk PPN 11%</li>
        <li class="putih">Bersedia Untuk PKS</li>
        <li class="putih">Berlaku untuk pelanggan upgrade</li>
        <li class="blue">100 Mbps</li>
        <li class="grey">
            <a href="../pelanggan/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
        
      </ul>
    </div>

    <div class="columns">
      <ul class="price">
        <li class="header">Bandwith</li>
        <li class="grey">25.000 / Mbps</li>
        <li class="putih">Dedicated</li>
        <li class="putih">Harga Belum Termasuk PPN 11%</li>
        <li class="putih">Bersedia Untuk PKS</li>
        <li class="putih">Berlaku untuk pelanggan upgrade</li>
        <li class="blue">200 Mbps</li>
        <li class="grey">
            <a href="../pelanggan/index.php" class="button" onClick="showPaymentForm()">Pilih Paket</a>
        </li>
        
      </ul>
    </div>

    <script src="../aset//search.js"></script>
  </body>
</html>