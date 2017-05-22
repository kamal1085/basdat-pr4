<?php

class Category extends Controller
{
    public function index()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/category/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/category/js.php';
    }

    public function submit()
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        if (!isset($_POST['category_code'])) {
            $this->error("Mohon masukan kode kategori!");
            return;
        }

        if (strlen($_POST['category_code']) > 3) {
            $this->error("Maksimal panjang kode kategori adalah 3 karakter!");
            return;
        }

        if (!isset($_POST['category_name'])) {
            $this->error("Mohon masukan nama kategori!");
            return;
        }

        $categories = $this->model->getKategori($_POST['category_code']);
        if (count($categories) > 0) {
            $this->error("Kode kategori telah digunakan, silahkan gunakan yang lain!");
        } else {
            $sub_codes = $_POST['subcategory_code'];
            $sub_names = $_POST['subcategory_name'];
            $size = count($sub_codes);

            if (count(array_unique($sub_codes)) < count($sub_codes)) {
                $this->error("Kode untuk setiap subkategori harus unik!");
                return;
            }

            $valid = true;
            for ($i = 0; $i < $size; $i++) {
                if (!isset($sub_codes[$i])) {
                    $this->error("Mohon masukan kode subkategori " . ($i + 1) . "!");
                    $valid = false;
                    break;
                }

                if (strlen($sub_codes[$i]) > 5) {
                    $this->error("Maksimal panjang kode subkategori adalah 5 karakter!");
                    $valid = false;
                    break;
                }

                if (!isset($sub_names[$i])) {
                    $this->error("Mohon masukan nama subkategori " . ($i + 1) . "!");
                    $valid = false;
                    break;
                }

                $subcategories = $this->model->getSubKategori($sub_codes[$i]);
                if (count($subcategories) > 0) {
                    $this->error("Kode subkategori " . ($i + 1) . " telah digunakan, silahkan gunakan yang lain!");
                    $valid = false;
                    break;
                }
            }

            if (!$valid) {
                return;
            }

            $this->model->addKategori($_POST['category_code'], $_POST['category_name']);
            for ($i = 0; $i < $size; $i++) {
                $this->model->addSubKategori($_POST['category_code'], $sub_codes[$i], $sub_names[$i]);
            }

            $this->success("Kategori berhasil disimpan!");
        }
    }

    public function success($message)
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/category/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/category/js.php';
    }

    public function error($error_message)
    {
        if (!$_SESSION['is_admin']) {
            header("location: " . URL . "index.php");
            return;
        }

        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/category/index.php';
        require APP . 'views/_templates/footer.php';
        require APP . 'views/category/js.php';
    }
}
