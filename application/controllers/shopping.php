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

    public function listpulsa($offset)
    {
      $listpulsa = $this->model->getProdukPulsa($offset);
      $totalProduct =  $this->model->getCountProdukPulsa();


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
       $totalbayar = $_POST['hargabayar'];
       $nominal = $_POST['nominal'];

        $transaksiresult = $this->model->addTransaksiPulsa($kodeproduk,$nomor,$totalbayar,$_SESSION['user']->email,$nominal);

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
