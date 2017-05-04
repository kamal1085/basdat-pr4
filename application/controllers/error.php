<?php

class Error extends Controller
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/error/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
