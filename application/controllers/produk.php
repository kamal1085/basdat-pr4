<?php

class Produk extends Controller
{
	 
	public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/produk/index.php';
        require APP . 'views/_templates/footer.php';
    }
	
    public function produk_pulsa()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/produk/produk_pulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    //TODO
    public function shipped_produk()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/produk/shipped_produk.php';
        require APP . 'views/_templates/footer.php';
    }
	
	public function addProdukPulsa()
    {
		$kode_produk  = $_POST['kode_produk'];
		$nama_produk  = $_POST['nama_produk'];
		$harga_produk  = $_POST['harga_produk'];
		$deskripsi_produk  = $_POST['deskripsi_produk'];
		$nominal_produk  = $_POST['nominal_produk'];
		
		$produk = $this->model->addProduk($kode_produk, $nama_produk, $harga_produk, $deskripsi_produk, $nominal_produk);
		$produkPulsa = $this->model->addProdukPulsa($kode_produk, $nominal_produk);

		header("location: " . URL . "index.php");
    }
}
