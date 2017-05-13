<?php

class Transaction extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/transaction/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listpulsa()
    {
        $transpulsa = $this->model->getAllTransaksiPulsa();

        //echo $transpulsa;
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/transaction/listpulsa.php';
        require APP . 'views/_templates/footer.php';
    }

 public function listproduk()
    {
        $transshipped = $this->model->getAllTransaksiShipped($_SESSION['user']->email);
        //echo $transshipped;
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/transaction/listproduk.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/transaction/js.php';


    }


    public function listproduktransaction($noinv)
    {
       // $noinv = $this->url_params;//$_GET["id"];

        
       $listitem = $this->model->getlistItem($noinv);
//print_r($this->url_params, true) ;

$obj = json_encode($listitem, true);
print_r($obj); // 'kamal' . $noinv;

        //echo $transpulsa;
        //require APP . 'views/_templates/header.php';
        //require APP . 'views/_templates/customer_navbar.php';
        //require APP . 'views/transaction/listpulsa.php';
        //require APP . 'views/_templates/footer.php';
    }

   
      
    
}
