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

    public function getPengguna($email, $password)
    {
        $sql = "SELECT * FROM TOKOKEREN.pengguna WHERE email = '$email' and password = '$password'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getPelanggan($email)
    {
        $sql = "SELECT * FROM TOKOKEREN.pelanggan WHERE email = '$email'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
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
		$query -> bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
		$query -> bindParam(':nama', $nama_produk, PDO::PARAM_STR);
		$query -> bindParam(':harga', $harga_produk, PDO::PARAM_INT);
		$query -> bindParam(':deskripsi', $deskripsi_produk, PDO::PARAM_STR);
		$query -> execute();
    }
	
	public function addProdukPulsa($kode_produk, $nominal_produk)
    {
		$sql = "INSERT INTO TOKOKEREN.produk_pulsa (kode_produk, nominal) VALUES (:kode_produk, :nominal);";
		$query = $this->db->prepare($sql);
		$query -> bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
		$query -> bindParam(':nominal', $nominal_produk, PDO::PARAM_INT);
		$query -> execute();
    }
	
	public function addToko($nama, $deskripsi, $slogan, $lokasi, $email_penjual)
    {
		$sql = "INSERT INTO TOKOKEREN.toko (nama, deskripsi, slogan, lokasi, email_penjual) VALUES (:nama, :deskripsi, :slogan, :lokasi, :email_penjual);";
		$query = $this->db->prepare($sql);
		$query -> bindParam(':nama', $nama, PDO::PARAM_STR);
		$query -> bindParam(':deskripsi', $deskripsi, PDO::PARAM_STR);
		$query -> bindParam(':slogan', $slogan, PDO::PARAM_STR);
		$query -> bindParam(':lokasi', $lokasi, PDO::PARAM_STR);
		$query -> bindParam(':email_penjual', $email_penjual, PDO::PARAM_STR);
		$query -> execute();
    }
	
	public function addTokoJasaKirim($nama_toko, $jasa_kirim)
    {
		$sql = "INSERT INTO TOKOKEREN.toko_jasa_kirim (nama_toko, jasa_kirim) VALUES (:nama_toko, :jasa_kirim);";
		$query = $this->db->prepare($sql);
		$query -> bindParam(':nama_toko', $nama_toko, PDO::PARAM_STR);
		$query -> bindParam(':jasa_kirim', $jasa_kirim, PDO::PARAM_STR);
		$query -> execute();
    }

     public function getProdukPulsa()
    {
        $sql = "select p.kode_produk, p.nama, p.harga, p.deskripsi, pp.nominal from TOKOKEREN.produk p, TOKOKEREN.produk_pulsa pp where p.kode_produk = pp.kode_produk";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
}
