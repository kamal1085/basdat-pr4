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
		$toko = $this->model->addToko($_POST['nama_toko'], $_POST['deskripsi_toko'], $_POST['slogan_toko'], $_POST['lokasi_toko'], $_SESSION['user']->email); 
		$this->model->updateStatusPelanggan($_SESSION['user']->email); 
		$_SESSION['is_penjual'] = true; 
		$jk = $_POST['name']; 
		$arrlength = count($jk); 
		for ($x = 0; $x < $arrlength; $x++) { 
		  $this->model->addTokoJasaKirim($_POST['nama_toko'], $jk[$x]); 
		} 
		 
		header("location: " . URL . "index.php");
    }
	
	public function success($message)
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/toko/js.php';
    }

    public function error($error_message)
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/toko/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/toko/js.php';
    }
}
