<?php

class Shopping extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/category/index
     */
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listpulsa()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/shopping/listpulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listproduk()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/shopping/listproduk.php';
        require APP . 'views/_templates/footer.php';
    }

     public function shoppulsa()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/shopping/shoppulsa.php';
        require APP . 'views/_templates/footer.php';
    }
    
}
