<?php

class Home extends Controller
{
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
