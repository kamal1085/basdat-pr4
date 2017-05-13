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

    /**
     * TODO
     * Get all categories from database
     */
    public function getAllCategories()
    {
        $sql = "SELECT * FROM kategori";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function getAllTransaksiPulsa()
    {
        $sql = "SELECT * FROM TOKOKEREN.transaksi_pulsa;";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function getAllJasaKirim()
    {
        $sql = "SELECT * FROM TOKOKEREN.jasa_kirim;";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
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
}
