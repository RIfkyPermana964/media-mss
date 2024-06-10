<?php
require_once __DIR__ . '/../lib/db.php';

class PelangganController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function index() {
        $result = $this->conn->query("SELECT * FROM pelanggan");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($idpel, $nama, $alamat, $nohp, $email, $noktp, $langganan, $paket) {
        $stmt = $this->conn->prepare("INSERT INTO pelanggan (idpel, nama, alamat, nohp, email, noktp, langganan, paket) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $idpel, $nama, $alamat, $nohp, $email, $noktp, $langganan, $paket);
        return $stmt->execute();
    }

    public function edit($id, $edit) {
        $stmt = $this->conn->prepare("UPDATE pelanggan SET id = ? WHERE id = ?");
        $stmt->bind_param("si", $edit, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM pelanggan WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
