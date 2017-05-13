<?php

class Register extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/register/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function submit()
    {
        if (!isset($_POST['email'])) {
            $this->error("Mohon masukan email!");
            return;
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error("Email yang anda masukan tidak valid!");
            return;
        }

        if (!isset($_POST['password'])) {
            $this->error("Mohon masukan password anda!");
            return;
        }

        if (strlen($_POST['password']) < 6) {
            $this->error("Minimal panjang password adalah 6 karakter!");
            return;
        }

        if (!isset($_POST['repeat_password'])) {
            $this->error("Mohon masukan ulangi password anda!");
            return;
        }

        if (strcmp($_POST['password'], $_POST['repeat_password']) != 0) {
            $this->error("Password yang anda masukan tidak sama!");
            return;
        }

        if (!isset($_POST['address'])) {
            $this->error("Mohon masukan alamat anda!");
            return;
        }

        if (!isset($_POST['name'])) {
            $this->error("Mohon masukan nama anda!");
            return;
        }

        if (!isset($_POST['birth_date'])) {
            $this->error("Mohon masukan tanggal lahir anda!");
            return;
        }

        if (strtotime($_POST['birth_date']) >= strtotime('now')) {
            $this->error("Tanggal lahir tidak valid!");
            return;
        }

        if (!isset($_POST['gender'])) {
            $this->error("Mohon pilih jenis kelamin anda!");
            return;
        }

        if (!isset($_POST['phone'])) {
            $this->error("Mohon masukan nomor telepon anda!");
            return;
        }

        if (!preg_match('/(\+)?([0-9]){2}([0-9]){10,12}/', $_POST['phone'])) {
            $this->error("Nomor telepon yang anda masukan tidak valid!");
            return;
        }

        $users = $this->model->getPengguna($_POST['email']);
        if (count($users) > 0) {
            $this->error("Email sudah terdaftar, silahkan login!");
        } else {
            $this->model->addPengguna($_POST['email'], $_POST['password'], $_POST['name'], $_POST['gender'],
                $_POST['birth_date'], $_POST['phone'], $_POST['address']);

            $this->model->addPelanggan($_POST['email'], false, 0, 0);

            $users = $this->model->getPengguna($_POST['email']);
            $_SESSION['user'] = $users[0];
            $_SESSION['is_admin'] = false;
            $_SESSION['is_penjual'] = false;

            header("location: " . URL . "index.php");
        }
    }

    public function error($error_message)
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/register/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
