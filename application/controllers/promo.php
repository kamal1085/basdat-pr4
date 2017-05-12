<?php

class Promo extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/promo/index.php';
        require APP . 'views/_templates/footer.php';
    }

}