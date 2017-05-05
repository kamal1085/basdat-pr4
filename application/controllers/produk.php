<?php

class Produk extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/category/index
     */
    public function produk_pulsa()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/produk/produk_pulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    //TODO
    public function shipped_produk()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/produk/shipped_produk.php';
        require APP . 'views/_templates/footer.php';
    }
}
