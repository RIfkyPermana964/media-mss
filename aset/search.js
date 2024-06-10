function searchFunction(event) {
    event.preventDefault();
    const searchInput = document.getElementById('searchInput').value.toLowerCase();

    if (searchInput.includes("beranda") || searchInput.includes("home")) {
        window.location.href = "home.php";
    } else if (searchInput.includes("paket wifi") || searchInput.includes("daftar paket")) {
        window.location.href = "daftarpaket.php";
    } else if (searchInput.includes("layanan")) {
        window.location.href = "layanan.php";
    } else if (searchInput.includes("pelanggan")) {
        window.location.href = "index.php";
    } else if (searchInput.includes("kontak") || searchInput.includes("contact")) {
        window.location.href = "contact.php";
    } else {
        alert('Halaman tidak ditemukan.');
    }
}
