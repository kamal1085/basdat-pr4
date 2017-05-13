<?php

class Jasa_Kirim extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/jasa_kirim/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function addJasaKirim()
    {
    	$nama = $_POST['nama'];
    	$lama_kirim = $_POST['lama_kirim'];
    	$tarif = $_POST['tarif'];

    	$jasa_kirim = $this->model->addJasaKirim($nama, $lama_kirim, $tarif);

    	header("location: " . URL . "index.php");
    }

}
