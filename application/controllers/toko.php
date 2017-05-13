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
		$toko = $this->model->addToko($_POST['nama_toko'], $_POST['deskripsi_toko'], $_POST['slogan_toko'], $_POST['slogan_toko'], $_POST['lokasi_toko'], $_SESSION['user']->email);
		//$arrlength = count($text1);
		echo $text1."-".$_SESSION['user']->email;
		
    }
}
