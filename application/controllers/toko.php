<?php

class Toko extends Controller
{
    public function index()
    {
		$jasakirim = $this->model->getAllJasaKirim();
		
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/toko/js.php';
    }

    //TODO
    public function addToko()
    {
		$text1  = $_POST['nama_toko'];
		echo $text1;
		require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
