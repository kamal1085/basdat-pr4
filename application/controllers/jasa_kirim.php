<?php
class Jasa_Kirim extends Controller
{
    public function index()
    {
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/jasa_kirim/index.php';
        require APP . 'views/_templates/footer.php';
    }
    public function addJasaKirim()
    {
        $jaskir = $this->model->getJasaKirim($_POST['nama']);
        if (count($jaskir) > 0) {
            $this->error("Nama Jasa Kirim telah digunakan, silahkan gunakan yang lain!");
        } else {
            $nama = $_POST['nama'];
            $lama_kirim = $_POST['lama_kirim'];
            $tarif = $_POST['tarif'];
            $jasa_kirim = $this->model->addJasaKirim($nama, $lama_kirim, $tarif);
            $this->success("Jasa Kirim berhasil disimpan!");
        }
    }
    public function success($message)
    {   
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/jasa_kirim/index.php';
        require APP . 'views/_templates/footer.php';
    }
    public function error($error_message)
    {   
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/admin_navbar.php';
        require APP . 'views/jasa_kirim/index.php';
        require APP . 'views/_templates/footer.php';
    }
    
}