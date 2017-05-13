<?php

class Home extends Controller
{
    public function index()
    {
        if ($_SESSION['is_admin']) {
            $this->admin();
            return;
        }
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function admin()
    {
        if (!$_SESSION['is_admin']) {
            $this->index();
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/home/admin.php';
        require APP . 'views/_templates/footer.php';
    }

    public function logout()
    {
        if (session_destroy()) {
            header("Location: " . URL . "index.php/login");
        }
    }
}
