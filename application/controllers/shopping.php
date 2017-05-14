<?php

class Shopping extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listpulsa()
    {
      $listpulsa = $this->model->getProdukPulsa();

        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/listpulsa.php';
        require APP . 'views/_templates/footer.php';
          require APP . 'views/shopping/jspulsa.php';
    }

    public function addTransaksiPulsa()
    {
        $kodeproduk = $_POST['kodeproduk'];
        $nomor = $_POST['nomor'];
       
        $jasa_kirim = $this->model->addJasaKirim($nama, $lama_kirim, $tarif);

        header("location: " . URL . "index.php");
    }

    public function listproduk()
    {
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/listproduk.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/shopping/js.php';
    }

     public function shoppulsa()
    {
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/shoppulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    public function cart()
    {
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/cart.php';
        require APP . 'views/_templates/footer.php';
    }
    
}
