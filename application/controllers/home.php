<?php

class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/login
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function login()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/login.php';
        require APP . 'views/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/register
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function register()
    {
        // load views
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/register.php';
        require APP . 'views/_templates/footer.php';
    }
}
