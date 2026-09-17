<?php
    include_once 'config/database.php';
    include_once 'app/models/AdminModel.php';

    class AdminController{
        private $AdminModel;
        private $db;

        public function __construct(){
            $database = new Database();
            $this->db = $database->getConnection();
            $this->AdminModel = new AdminModel($this->db);
        }

        public function index(){
            if(isset($_SESSION['id'])){
                header("Location: index.php?act=dashboard");
                exit;
            }
            include 'app/views/auth/login.php';
        }

        public function viewRegister(){
            include 'app/views/auth/register.php';
        }
        public function register(){
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    if ($this->AdminModel->cekUsername($username)) {
                    $_SESSION['error_msg'] = "Gagal: Username '$username' sudah terdaftar!";
                    header("Location: index.php?act=register");
                    exit();
                    } 

                    if($this->AdminModel->register($username, $password)){
                        $success = "berhasil daftar, silahkan login";
                        include 'app/views/auth/login.php';
                        exit();
                    } else {
                        $error = "Registration failed. Please try again.";
                        include 'app/views/auth/register.php';
                        exit();
                    }
                  
                } 
            }

        public function login(){
            if(isset($_SESSION['id'])){
                header("Location: index.php?act=dashboard");
                exit;
            }
            include 'app/views/auth/login.php';
        }

        public function loginProcess(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $admin = $this->AdminModel->login($username, $password);
                
                if($admin){
                    $_SESSION['id'] = $admin['id'];
                    $_SESSION['username'] = $admin['username'];
                    header("Location: index.php?act=dashboard");
                    exit;
                } else {
                    $error = "Invalid username or password.";
                    include 'app/views/auth/login.php';
                }
            }
        }

        public function dashboard(){
            if(!isset($_SESSION['id'])){
                header("Location: index.php?act=login");
                exit();
            }
            include 'app/views/dashboard/index.php';
        }
        public function logout(){
            session_destroy();
            header("Location: index.php?act=login");
        }
    }
?>