<?php
require_once '../models/User.php';

class LoginController {
    public function __construct() {
        // Constructor
    }

    public function index() {
        // Menampilkan halaman login
        require_once '../views/login.php';
    }

    public function login() {
        // Memproses login
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = new User();
            if ($user->login($username, $password)) {
                // Jika login berhasil, redirect ke halaman welcome
                header('Location: welcome.php');
                exit;
            } else {
                // Jika login gagal, kembali ke halaman login
                echo "Login gagal. Periksa kembali username dan password Anda.";
                require_once '../views/login.php';
            }
        } else {
            echo "Isi username dan password.";
        }
    }
}
?>
