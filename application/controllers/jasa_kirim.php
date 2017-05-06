<?php

class Jasa_Kirim extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/category/index
     */
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/jasa_kirim/index.php';
        require APP . 'views/_templates/footer.php';
    }

}
