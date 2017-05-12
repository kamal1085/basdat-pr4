<?php

class Toko extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/toko/js.php';
    }

    //TODO
    public function addToko()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
