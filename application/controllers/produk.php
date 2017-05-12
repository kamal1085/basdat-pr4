<?php

class Produk extends Controller
{
	 
	public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/produk/index.php';
        require APP . 'views/_templates/footer.php';
    }
	
    public function produk_pulsa()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/produk/produk_pulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    //TODO
    public function shipped_produk()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/produk/shipped_produk.php';
        require APP . 'views/_templates/footer.php';
    }
}
