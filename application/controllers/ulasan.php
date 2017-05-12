<?php

class ulasan extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/ulasan/index.php';
        require APP . 'views/_templates/footer.php';
    }

}