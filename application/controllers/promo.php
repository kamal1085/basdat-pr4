<?php

class Promo extends Controller
{
    public function index()
    {
        $list_kategori = $this->model->getAllCategories();
        // var_dump($list_kategori);
        $list_subkategori = $this->model->getSubCategories();
        // var_dump($list_subkategori);
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/promo/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function addPromo()
    {
    	$description = $_POST['description'];
    	$periode_awal = $_POST['periode_awal'];
    	$periode_akhir = $_POST['periode_akhir'];
    	$kode = $_POST['kode_promo'];


        if($periode_awal > $periode_akhir){
            echo "Something wrong";
        }else{
            echo "success";
             $promo=$this->model->addPromo($description,$periode_awal,$periode_akhir,$periode_akhir,$kode);
        }

    	// $promo=$this->model->addPromo($description,$periode_awal,$periode_akhir,$periode_akhir,$kode);

        // header("location: " . URL . "index.php");

    }

}