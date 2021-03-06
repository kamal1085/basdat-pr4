<?php

class Promo extends Controller
{
    public function index()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        $list_kategori = $this->model->getAllCategories();
        // var_dump($list_kategori);
        $list_subkategori = $this->model->getSubCategories();
        // var_dump($list_subkategori);
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/promo/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/promo/js.php';
    }

    public function addPromo()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        $randid = rand(10, 100);
        $id = 'R' . $randid;
        // echo $id;
        $description = $_POST['description'];
        $periode_awal = $_POST['periode_awal'];
        $periode_akhir = $_POST['periode_akhir'];
        $kode = $_POST['kode_promo'];
        $kategori = $_POST['kategori'];
        $subkategori = $_POST['subkategori'];


        if ($periode_awal > $periode_akhir) {
            $this->error("Periode Awal harus lebih kecil dari Periode Akhir");
        } else {
            echo "success";
            $promo = $this->model->addPromo($id, $description, $periode_awal, $periode_akhir, $periode_akhir, $kode);
            $tampung_ktgr = $this->model->getShippedProduk($subkategori);
            // echo $tampung_ktgr[0];
            foreach ($tampung_ktgr as $row_ktgr) {
                $this->model->addPromoProduk($id, $row_ktgr->kode_produk);
                // echo $row_ktgr->kode_produk;
                header("location: " . URL);
            }


        }

    }

    public function getSubKategoriList()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        if (!empty($_POST["kategori"])) {
            $list_subkategori = $this->model->getSubKategori($_POST["kategori"]);
            foreach ($list_subkategori as $ls_sk) {
                $subKat[] = array(
                    'kode' => $ls_sk->kode,
                    'nama' => $ls_sk->nama
                );
            }
            echo json_encode($subKat);
        }
    }

    public function error($error_message)
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/promo/index.php';
        require APP . 'views/_templates/footer.php';
    }

}