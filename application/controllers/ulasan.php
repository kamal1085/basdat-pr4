<?php

class ulasan extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/category/index
     */
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/ulasan/index.php';
        require APP . 'views/_templates/footer.php';
    }

}