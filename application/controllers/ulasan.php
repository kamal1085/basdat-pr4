<?php

class ulasan extends Controller
{
    public function getUlasan($kode_produk)
    {
        $kode = $kode_produk;
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/ulasan/index.php';
        require APP . 'views/_templates/footer.php';

    }

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

        if(!isset($_POST['star'])){
            $this->error("Rating tidak boleh kosong",$kode_produk);   
            return;
        }
   
    	$star = $_POST['star'];
    	$komentar = $_POST['komentar'];
        $user = $_SESSION['user']->email;
        $tanggal = date("Y-m-d");
        
        $ulasan = $this->model->addUlasan($user,$kode_produk,$tanggal,$star,$komentar);
        header("location: " . URL);

    }

    public function error($error_message,$kode_produk)
    {   
        $kode=$kode_produk;
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/ulasan/index.php';
        require APP . 'views/_templates/footer.php';
    }

}