<?php

require_once '../login/models/Database.php';
require_once 'controllers/PelangganController.php';



session_start(); // Memulai sesi untuk cek login

// Fungsi autoload untuk memuat file class otomatis
spl_autoload_register(function ($class_name) {
    if (file_exists("core/" . $class_name . ".php")) {
        require_once "core/" . $class_name . ".php";
    } elseif (file_exists("controllers/" . $class_name . ".php")) {
        require_once "controllers/" . $class_name . ".php";
    } elseif (file_exists("models/" . $class_name . ".php")) {
        require_once "models/" . $class_name . ".php";
    }
});

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['logged_in'])) {
    header("Location: views/login.php");
    exit;
}

// Mengambil request URL dan memecahnya
$request = isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'], '/') : '';
$uri = explode('/', $request);

// Default controller dan method
$controllerName = !empty($uri[0]) ? ucfirst($uri[0]) . 'Controller' : 'HomeController';
$methodName = isset($uri[1]) ? $uri[1] : 'index';

// Cek apakah controller dan method yang diminta ada
if (class_exists($controllerName)) {
    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $params = array_slice($uri, 2);
        call_user_func_array([$controller, $methodName], $params);
    } else {
        header('HTTP/1.1 404 Not Found');
        echo '<h1>Method not found</h1>';
    }
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<h1>Controller not found</h1>';
}



$controller = new PelangganController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$idpel = isset($_GET['idpel']) ? $_GET['idpel'] : null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($_POST);
        break;
    case 'edit':
        $controller->edit($idpel);
        break;
    case 'update':
        $controller->update($_POST);
        break;
    case 'delete':
        $controller->delete($idpel);
        break;
    default:
        $controller->index();
        break;
}
?>







