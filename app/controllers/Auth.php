<?php
class Auth extends Controller {
    public $userModel;

    public function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->userModel = $this->model('User_model');

        if(!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
            $token = $_COOKIE['remember_token'];
            $user = $this->userModel->getUserByToken($token);
            if($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['username'] = $user['username'];
            }
        }
    }

    // Login
    public function index() {
        $data['judul'] = 'Login';
        $data['error'] = '';
        $userModel = $this->model('User_model');
        if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsername($username);

            if( $user && password_verify($password, $user['password']) ) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['username'] = $user['username'];

                if(isset($_POST['remember_token'])) {
                    $token = bin2hex(random_bytes(32));
                    $this->userModel->storeRememberToken($user['id'], $token);
                    setcookie('remember_token', $token, time() + (86400 * 7), "/");
                }

                if( $user['role'] === 'admin' ) {
                    header("Location:" . BASEURL . "/admin");
                } else {
                    header("Location:" . BASEURL);
                }
                exit;
            } else {
                $data['error'] = 'Username atau Password salah.';
            }
        }

        $this->view('templates/header', $data);
        $this->view('auth/login', $data);
        $this->view('templates/footer');
    }

    // Register
    public function register() {
        $data['judul'] = 'Register';
        $data['error'] = '';
        $data['success'] = '';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];

            if( $password !== $confirm ) {
                $data['error'] = 'Password tidak sama!';
            } else if ($this->userModel->getUserByUsername($username)) {
                $data['error'] = 'Username sudah dipakai!';
            } else {
                $this->userModel->addUser([
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'role' => 'user'
                ]);
                $user = $this->userModel->getUserByUsername($username);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                header("Location: " . BASEURL);
                exit;

            }
        }
        $this->view('templates/header', $data);
        $this->view('auth/register', $data);
        $this->view('templates/footer');
    }

    public function logout() {
        session_destroy();

        if(isset($_COOKIE['remember_token'])) {
            setcookie('remember_token', '', time() - 3600, '/');
        }

        header("Location: " . BASEURL . "/auth");
        exit;
    }
}