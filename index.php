<?php

session_start();
include_once 'app/controllers/KategoriController.php';
include_once 'app/controllers/AdminController.php';
include_once 'app/controllers/CatatanController.php';

$action = isset($_GET['act']) ? $_GET['act'] : 'login';
$AdminController = new AdminController();
$KategoriController = new KategoriController();
$catatanController = new CatatanController();

switch ($action) {
        case 'register':
            $AdminController->viewRegister();
        break;
        case 'register-process':
            $AdminController->register();
            break;
        case 'login':   
            $AdminController->login();
            break;
        case 'login-process':
            $AdminController->loginProcess();
            break;
        case 'logout':
            $AdminController->logout();
            break;
        case 'dashboard':
            $AdminController->dashboard();
            break;
        case 'kategori':
            $KategoriController->index();
            break;
        case 'kategori-tambah':
            $KategoriController->tambah();
            break;
        case 'kategori-tambah-proses':
            $KategoriController->tambahproses();
            break;
        case 'kategori-edit':
            $KategoriController->edit();
            break;
        case 'kategori-edit-proses':
            $KategoriController->editproses();
            break;
        case 'kategori-hapus':
            $KategoriController->hapus();
            break;
        case 'catatan':
            $catatanController->index();
            break;
        case 'catatan-tambah':
        $catatanController->tambah();
        break;
        case 'catatan-tambah-proses':
        $catatanController->tambahproses();
        break;
         case 'catatan-edit':
        $catatanController->edit();
        break;
        case 'catatan-edit-proses':
        $catatanController->editproses();
        break;
        case 'catatan-hapus':
        $catatanController->hapus();
        break;
        // default:
        //      $AdminController->index();
        //      break;
    }

?>