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
		if (intval($_POST['harga_produk']) <= 0) {
            $this->error("Kolom harga tidak boleh kosong atau negatif (-)");
            return;
        }
		
		if (intval($_POST['nominal_produk']) <= 0) {
            $this->error("Kolom nominal tidak boleh kosong atau negatif (-)");
            return;
        }
		
		$produkPulsa = $this->model->getProduk($_POST['kode_produk']);
		if (count($produkPulsa) > 0) {
            $this->error("Kode Produk telah digunakan, silahkan gunakan yang lain!");
        } else {
			
			$this->model->addProduk($_POST['kode_produk'], $_POST['nama_produk'], $_POST['harga_produk'], $_POST['deskripsi_produk']);
			$this->model->addProdukPulsa($_POST['kode_produk'], $_POST['nominal_produk']);

			$this->success("Produk Pulsa berhasil disimpan!");
		}
    }
	
	public function success($message)
    {
        require APP . 'views/_templates/header.php';
		if (!$_SESSION['is_admin']) {
			require APP . 'views/_templates/customer_navbar.php';
			require APP . 'views/produk/shipped_produk.php';
		} else {
			require APP . 'views/_templates/admin_navbar.php';
			require APP . 'views/produk/produk_pulsa.php';
		}
        require APP . 'views/_templates/footer.php';
    }
	
	public function error($error_message)
    {
        require APP . 'views/_templates/header.php';
		if (!$_SESSION['is_admin']) {
			require APP . 'views/_templates/customer_navbar.php';
			require APP . 'views/produk/shipped_produk.php';
		} else {
			require APP . 'views/_templates/admin_navbar.php';
			require APP . 'views/produk/produk_pulsa.php';
		}
        require APP . 'views/_templates/footer.php';
    }
}
