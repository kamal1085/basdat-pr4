<?php

class Category extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/category/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/category/js.php';
    }

    //TODO
    public function addCategory()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/category/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
