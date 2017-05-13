<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM TOKOKEREN.pengguna WHERE email = :email AND password = :password";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll();
    }

    public function getPengguna($email)
    {
        $sql = "SELECT * FROM TOKOKEREN.pengguna WHERE email = :email";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll();
    }

    public function getPelanggan($email)
    {
        $sql = "SELECT * FROM TOKOKEREN.pelanggan WHERE email = :email";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll();
    }

    public function addPengguna($email, $password, $nama, $jenis_kelamin, $tgl_lahir, $no_telp, $alamat)
    {
        $sql = "INSERT INTO TOKOKEREN.pengguna (email, password, nama, jenis_kelamin, tgl_lahir, no_telp, alamat) " .
            "VALUES (:email, :password, :nama, :jenis_kelamin, :tgl_lahir, :no_telp, :alamat);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':jenis_kelamin', $jenis_kelamin, PDO::PARAM_STR);
        $query->bindParam(':tgl_lahir', $tgl_lahir, PDO::PARAM_STR);
        $query->bindParam(':no_telp', $no_telp, PDO::PARAM_STR);
        $query->bindParam(':alamat', $alamat, PDO::PARAM_STR);
        $query->execute();
    }

    public function addPelanggan($email, $is_penjual, $nilai_reputasi, $poin)
    {
        $sql = "INSERT INTO TOKOKEREN.pelanggan (email, is_penjual, nilai_reputasi, poin) " .
            "VALUES (:email, :is_penjual, :nilai_reputasi, :poin);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':is_penjual', $is_penjual, PDO::PARAM_BOOL);
        $query->bindParam(':nilai_reputasi', $nilai_reputasi, PDO::PARAM_INT);
        $query->bindParam(':poin', $poin, PDO::PARAM_INT);
        $query->execute();
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM kategori";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllTransaksiPulsa()
    {
        $sql = "SELECT * FROM TOKOKEREN.transaksi_pulsa;";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllJasaKirim()
    {
        $sql = "SELECT * FROM TOKOKEREN.jasa_kirim;";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addProduk($kode_produk, $nama_produk, $harga_produk, $deskripsi_produk)
    {
        $sql = "INSERT INTO TOKOKEREN.produk (kode_produk, nama, harga, deskripsi) VALUES (:kode_produk, :nama, :harga, :deskripsi);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama_produk, PDO::PARAM_STR);
        $query->bindParam(':harga', $harga_produk, PDO::PARAM_INT);
        $query->bindParam(':deskripsi', $deskripsi_produk, PDO::PARAM_STR);
        $query->execute();
    }

    public function addProdukPulsa($kode_produk, $nominal_produk)
    {
        $sql = "INSERT INTO TOKOKEREN.produk_pulsa (kode_produk, nominal) VALUES (:kode_produk, :nominal);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query->bindParam(':nominal', $nominal_produk, PDO::PARAM_INT);
        $query->execute();
    }

    public function addToko($nama, $deskripsi, $slogan, $lokasi, $email_penjual)
    {
        $sql = "INSERT INTO TOKOKEREN.toko (nama, deskripsi, slogan, lokasi, email_penjual) VALUES (:nama, :deskripsi, :slogan, :lokasi, :email_penjual);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
        $query->bindParam(':slogan', $slogan, PDO::PARAM_STR);
        $query->bindParam(':lokasi', $lokasi, PDO::PARAM_STR);
        $query->bindParam(':email_penjual', $email_penjual, PDO::PARAM_STR);
        $query->execute();
    }

    public function addTokoJasaKirim($nama_toko, $jasa_kirim)
    {
        $sql = "INSERT INTO TOKOKEREN.toko_jasa_kirim (nama_toko, jasa_kirim) VALUES (:nama_toko, :jasa_kirim);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':nama_toko', $nama_toko, PDO::PARAM_STR);
        $query->bindParam(':jasa_kirim', $jasa_kirim, PDO::PARAM_STR);
        $query->execute();
    }
	
	public function updateStatusPelanggan($email)
    {
        $sql = "UPDATE TOKOKEREN.pelanggan SET is_penjual = TRUE WHERE email = :email;";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
    }

    public function getProdukPulsa()
    {
        $sql = "SELECT p.kode_produk, p.nama, p.harga, p.deskripsi, pp.nominal FROM TOKOKEREN.produk p, TOKOKEREN.produk_pulsa pp WHERE p.kode_produk = pp.kode_produk";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function addPromo($description, $periode_awal, $periode_akhir, $kode)
    {

        $sql = "INSERT INTO TOKOKEREN.promo (id,deskripsi, periode_awal, periode_akhir,kode) VALUES ('X001', : description, :periode_awal, :periode_akhir);";
        $query = $this->db->prepare($sql);
        $query -> bindParam('X001', $id, PDO::PARAM_STR);
        $query -> bindParam(':description', $id, PDO::PARAM_STR);
        $query -> bindParam(':periode_awal', $periode_awal, PDO::PARAM_STR);
        $query -> bindParam(':periode_akhir', $periode_akhir, PDO::PARAM_STR);
        $query -> execute();
    }

    public function addJasaKirim($nama,$lama_kirim,$tarif)
    {
        $sql = "INSERT INTO TOKOKEREN.jasa_kirim (nama,lama_kirim,tarif) VALUES (:nama,:lama_kirim,:tarif);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':nama', $nama, PDO::PARAM_STR);
        $query -> bindParam(':lama_kirim', $lama_kirim, PDO::PARAM_STR);
        $query -> bindParam(':tarif', $tarif, PDO::PARAM_INT);
        $query -> execute();
    }
    
    public function addUlasan($kode_produk,$star,$komentar)
    {
        $sql = "INSERT INTO TOKOKEREN.ulasan(email_pembeli,kode_produk,tanggal,rating,komentar) VALUES ('pembeli41@tokokeren.compact',:kode_produk,'2017-11-11',:star,:komentar);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query -> bindParam(':star', $star, PDO::PARAM_INT);
        $query -> bindParam(':komentar', $komentar, PDO::PARAM_STR);
        $query -> execute();
        echo $sql;
    }
}
