<?php
require_once '../lib/db.php';

class PembayaranController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        $result = $this->conn->query("SELECT * FROM pembayaran");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($nama, $email, $tanggal, $jumlah, $metode_pembayaran) {
        $stmt = $this->conn->prepare("INSERT INTO pembayaran (nama, email, tanggal, jumlah, metode_pembayaran) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssds", $nama, $email, $tanggal, $jumlah, $metode_pembayaran);
        return $stmt->execute();
    }

    public function updateStatus($id, $status) {
        $stmt = $this->conn->prepare("UPDATE pembayaran SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM pembayaran WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
