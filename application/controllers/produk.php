<?php

class Produk extends Controller
{

    public function index()
    {
        if ($_SESSION['is_admin']) {
            $this->produk_pulsa();
        } else if ($_SESSION['is_penjual']) {
            $this->shipped_produk();
        } else {
            header("location: " . URL . "index.php");
        }
    }

    public function produk_pulsa()
    {
        if (!$_SESSION['is_admin']) {
            $this->index();
            return;
        }
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/produk/produk_pulsa.php';
        require APP . 'views/_templates/footer.php';
    }

    //TODO
    public function shipped_produk()
    {
        if ($_SESSION['is_admin']) {
            $this->produk_pulsa();
            return;
        }

        if (!$_SESSION['is_penjual']) {
            header("location: " . URL . "index.php");
            return;
        }

        $subkategori = $this->model->getSubCategories();

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/customer_navbar.php';
        require APP . 'views/produk/shipped_produk.php';
        require APP . 'views/_templates/footer.php';
    }

    public function addProdukPulsa()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

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

    public function addShippedProduk()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        if (!$_SESSION['is_penjual']) {
            header("location: " . URL . "index.php");
            return;
        }

        if (intval($_POST['min_grosir_produk']) > intval($_POST['max_grosir_produk'])) {
            $this->error("Minimal Grosir harus kurang dari Maksimal Grosir");
            return;
        }

        $shippedProduk = $this->model->getProduk($_POST['kode_produk']);
        if (count($shippedProduk) > 0) {
            $this->error("Kode Produk telah digunakan, silahkan gunakan yang lain!");
        } else {
            $this->model->addProduk($_POST['kode_produk'], $_POST['nama_produk'], $_POST['harga_produk'], $_POST['deskripsi_produk']);
            $toko = $this->model->getTokoByEmail($_SESSION['user']->email);
            $this->model->addShippedProduk($_POST['kode_produk'], $_POST['subkategori_produk'], $toko[0], $_POST['isAsuransi'], $_POST['stok_produk'], $_POST['isBaru'], $_POST['min_order_produk'], $_POST['min_grosir_produk'], $_POST['max_grosir_produk'], $_POST['harga_grosir_produk'], $_POST['foto_produk']);

            $this->success("Shipped Produk berhasil disimpan!");
        }
    }

    public function success($message)
    {
        if (!$_SESSION['is_admin']) {
            $subkategori = $this->model->getSubCategories();
        }

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
        if (!$_SESSION['is_admin']) {
            $subkategori = $this->model->getSubCategories();
        }

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
