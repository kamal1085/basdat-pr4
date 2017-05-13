<?php

class ulasan extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/ulasan/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function addUlasan()
    {
    	$kode_produk = $_POST['kode_produk'];
    	$star = $_POST['star'];
    	$komentar = $_POST['komentar'];
        // $invoice = $_POST['invoice']

    	$ulasan = $this->model->addUlasan($kode_produk,$star,$komentar);


    	header("location: " . URL . "index.php");
    }

}