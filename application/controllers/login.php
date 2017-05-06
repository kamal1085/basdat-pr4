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
}
