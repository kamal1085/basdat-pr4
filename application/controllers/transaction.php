<?php

class Transaction extends Controller
{
    public function index()
    {
        if ($_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/transaction/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listpulsa($offset)
    {
        if ($_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        $transpulsa = $this->model->getAllTransaksiPulsa($_SESSION['user']->email, $offset);
        $totalProduct = $this->model->getCountTransaksiPulsa($_SESSION['user']->email);

        //echo $transpulsa;
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/transaction/listpulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    public function listproduk()
    {
        if ($_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

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
        if ($_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

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
