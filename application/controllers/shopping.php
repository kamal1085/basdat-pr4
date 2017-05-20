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

    public function addKeranjangBelanja()
    {
        $kodeproduk = $_POST['kodeproduk'];
        $berat = $_POST['berat'];
       $kuantitas = $_POST['kuantitas'];
       $harga = $_POST['harga'];
 
        $transaksiresult = $this->model->addKeranjangBelanja($kodeproduk,$berat,$kuantitas,$_SESSION['user']->email,$harga);

        header("location: " . URL . "index.php");
    }

     public function checkout()
    {
        
        $alamat = $_POST['alamat'];
       $jasakirim = $_POST['jasakirim'];

       $listjk = $this->model-> getJasaKirimByNama($jasakirim);
       $tarif=0;
       $namatoko='';
        foreach ($listjk as $jk) {
          $tarif=$jk->tarif;
          $namatoko=$jk->nama_toko;
        }
       
       $totalberat = $_POST['totalberat'];
       $subtotal = $_POST['subtotal'];
       $biayakirim = $totalberat*$tarif;
 //addTransaksiShipped($namatoko,$alamatkirim,$email,$biayakirim,$namajaskirim)
        $transaksiresult = $this->model->addTransaksiShipped($namatoko,$alamat,$_SESSION['user']->email,$biayakirim,$jasakirim,$subtotal);

        header("location: " . URL . "index.php");
    }

    

     public function getsubkategori()
    {
        $katid = $_POST['katid'];
         
        $listsubkategori = $this->model->getSubKategori($katid);

        //header("location: " . URL . "index.php");

$obj = json_encode($listsubkategori, true);
print_r($obj); // 'kamal' . $noinv;

    }

  public function getlistprodfilter()
  {
       $subkatid = $_POST['subkatid'];
      $tokoid=$_POST['tokoid'];
      $offset=0;
        $listproduk = $this->model->getProdukShippedByKat($offset,str_replace('%20', ' ', $tokoid),$subkatid);
$obj = json_encode($listproduk, true);
print_r($obj); // 'kamal' . $noinv;
    }


    public function listproduk($tokoid,$offset)
    {
       $listproduk = $this->model->getProdukShipped($offset,str_replace('%20', ' ', $tokoid));
       $listkategori =$this->model->getAllCategories();
       $tokoid=str_replace('%20', ' ', $tokoid);
 $totalProduct =  $this->model->getCountProdukShipped(str_replace('%20', ' ', $tokoid));

       //echo str_replace('%20', ' ', $tokoid); 
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/listproduk.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/shopping/js.php';
    }

    public function produktoko()
    {
       $listtoko = $this->model->getTokoAll();
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/produktoko.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/shopping/jstoko.php';
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
 $listcart = $this->model->getKeranjangBelanja($_SESSION['user']->email);
$listJasaKirim = $this->model->getJasaKirimByToko($_SESSION['user']->email);
$berattotal=0;
$subtotal=0;
        require APP . 'views/_templates/header.php';
         require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/shopping/cart.php';
        require APP . 'views/_templates/footer.php';
    }
    
}
