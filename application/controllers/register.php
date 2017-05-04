<?php

class Register extends Controller
{
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/register/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
