<?php

class Login extends Controller
{
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/login/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function submit()
    {
        if (!isset($_POST['email'])) {
            $this->error("Mohon masukan email!");
            return;
        }

        if (!isset($_POST['password'])) {
            $this->error("Mohon masukan password anda!");
            return;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $users = $this->model->getPengguna($email, $password);
        if (count($users) > 0) {
            $customers = $this->model->getPelanggan($email);

            $_SESSION['user'] = $users[0];
            $_SESSION['is_admin'] = count($customers) == 0;
            if (!$_SESSION['is_admin']) {
                $_SESSION['is_penjual'] = $customers[0]->is_penjual;
            }

            header("location: " . URL . "index.php");
        } else {
            $this->error("Email atau password salah!");
        }
    }

    public function error($error_message)
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/login/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
