<?php
require_once 'controllers/PelangganController.php';

$controller = new PelangganController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;
$data = isset($_POST) ? $_POST : null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($data);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($data);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index();
        break;
}
?>
