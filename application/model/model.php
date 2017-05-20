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

    public function getKategori($kode)
    {
        $sql = "SELECT * FROM TOKOKEREN.kategori_utama";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


    public function getAllCategories()
    {
        $sql = "SELECT * from TOKOKEREN.kategori_utama";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getCategories()
    {
        $sql = "SELECT kode_kategori from TOKOKEREN.kategori_utama";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }

    public function getSubCategories()
    {
        $sql = "SELECT * FROM TOKOKEREN.sub_kategori";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getSubKategori($kode)
    {
        $sql = "SELECT * FROM TOKOKEREN.sub_kategori WHERE kode_kategori = :kode";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode', $kode, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll();
    }

    public function addKategori($kode, $nama)
    {
        $sql = "INSERT INTO TOKOKEREN.kategori_utama (kode, nama) VALUES (:kode, :nama);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode', $kode, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->execute();
    }

    public function addSubKategori($kode_kategori, $kode, $nama)
    {
        $sql = "INSERT INTO TOKOKEREN.sub_kategori (kode_kategori, kode, nama) VALUES (:kode_kategori, :kode, :nama);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode_kategori', $kode_kategori, PDO::PARAM_STR);
        $query->bindParam(':kode', $kode, PDO::PARAM_STR);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->execute();
    }

    public function getAllTransaksiPulsa($email)
    {
        $sql = "SELECT tp.no_invoice, p.nama, tp.tanggal, case when tp.status = 1 then 'Transaksi Dilakukan' else 'Pulsa Sudah dibayar' end statusstr, tp.total_bayar, tp.nominal, tp.nomor  FROM TOKOKEREN.transaksi_pulsa tp, TOKOKEREN.produk_pulsa pp, TOKOKEREN.produk p where tp.kode_produk = pp.kode_produk and pp.kode_produk = p.kode_produk and email_pembeli='$email' ;";
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
	
	public function getToko($nama)
    {
        $sql = "SELECT * FROM TOKOKEREN.toko WHERE  nama = :nama";
        $query = $this->db->prepare($sql);
        $query->bindParam(':nama', $nama, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll();
    }
	
	public function getTokoByEmail($email)
    {
        $sql = "SELECT * FROM TOKOKEREN.toko WHERE  email_penjual = :email";
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_COLUMN, 0);
    }
	
	public function getProduk($kode)
    {
        $sql = "SELECT * FROM TOKOKEREN.produk WHERE kode_produk = :kode";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode', $kode, PDO::PARAM_STR);
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
	
	public function addShippedProduk($kode_produk, $kategori, $nama_toko, $isAsuransi, $stok, $isBaru, $minOrder, $minGrosir, $maxGrosir, $hargaGrosir, $foto)
    {
        $sql = "INSERT INTO TOKOKEREN.shipped_produk (kode_produk, kategori, nama_toko, is_asuransi, stok, is_baru, min_order, min_grosir, max_grosir, harga_grosir, foto) VALUES (:kode_produk, :kategori, :nama_toko, :isAsuransi, :stok, :isBaru, :minOrder, :minGrosir, :maxGrosir, :hargaGrosir, :foto);";
        $query = $this->db->prepare($sql);
        $query->bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query->bindParam(':kategori', $kategori, PDO::PARAM_STR);
		$query->bindParam(':nama_toko', $nama_toko, PDO::PARAM_STR);
		$query->bindParam(':isAsuransi', $isAsuransi, PDO::PARAM_BOOL);
		$query->bindParam(':stok', $stok, PDO::PARAM_INT);
		$query->bindParam(':isBaru', $isBaru, PDO::PARAM_BOOL);
		$query->bindParam(':minOrder', $minOrder, PDO::PARAM_INT);
		$query->bindParam(':minGrosir', $minGrosir, PDO::PARAM_INT);
		$query->bindParam(':maxGrosir', $maxGrosir, PDO::PARAM_INT);
		$query->bindParam(':hargaGrosir', $hargaGrosir, PDO::PARAM_INT);
		$query->bindParam(':foto', $foto, PDO::PARAM_STR);
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

    public function getProdukPulsa($offset)
    { 
        $sql = "select p.kode_produk, p.nama, p.harga, p.deskripsi, pp.nominal from TOKOKEREN.produk p, TOKOKEREN.produk_pulsa pp where p.kode_produk = pp.kode_produk order by kode_produk asc
        limit 10 offset $offset;";
 
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getCountProdukPulsa()
    { 
        $sql = "select pp.* from TOKOKEREN.produk p, TOKOKEREN.produk_pulsa pp where p.kode_produk = pp.kode_produk;";
 
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->rowCount();
    }

    public function getAllTransaksiShipped($email)
    {
        $sql = "SELECT ts.*,  case when ts.status = 1 then 'Transaksi Dilakukan' else case when ts.status=2 then 'Barang sudah dibayar' else case when ts.status=3 then 'Barang sudah dikirim' else 'Barang Sudah diterima' end end end statusstr FROM TOKOKEREN.transaksi_shipped ts where email_pembeli='$email' ;";
        $query = $this->db->prepare($sql);
        $query->execute();

       
        return $query->fetchAll();
    }

    public function getlistItem($noinvoice)
    {
        $sql = "SELECT li.*, p.nama FROM TOKOKEREN.list_item li, TOKOKEREN.shipped_produk sp, TOKOKEREN.produk p where li.kode_produk = sp.kode_produk and sp.kode_produk = p.kode_produk and no_invoice='$noinvoice';";
        $query = $this->db->prepare($sql);
        $query->execute();

       
        return $query->fetchAll();
    }

    public function addPromo($id,$description, $periode_awal, $periode_akhir, $kode)
    {

        $sql = "INSERT INTO TOKOKEREN.promo (id,deskripsi, periode_awal,periode_akhir,kode) VALUES (:id,:description,:periode_awal,:periode_akhir,:kode);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':id', $id, PDO::PARAM_STR);
        $query -> bindParam(':description', $description, PDO::PARAM_STR);
        $query -> bindParam(':periode_awal', $periode_awal, PDO::PARAM_STR);
        $query -> bindParam(':periode_akhir', $periode_akhir, PDO::PARAM_STR);
        $query -> bindParam(':kode', $kode, PDO::PARAM_STR);
        $query -> execute();
    }

    public function getShippedProduk($kategori)
    {
        $sql = "SELECT * FROM TOKOKEREN.shipped_produk WHERE kategori = :kategori";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':kategori', $kategori, PDO::PARAM_STR);
        $query -> execute();
        return $query->fetchAll();
    }

    public function addPromoProduk($id, $kode)
    {

        $sql = "INSERT INTO TOKOKEREN.promo_produk (id_promo,kode_produk) VALUES (:id,:kode);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':id', $id, PDO::PARAM_STR);
        $query -> bindParam(':kode', $kode, PDO::PARAM_STR);
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
    
    public function addUlasan($user,$kode_produk,$tanggal,$star,$komentar)
    {
            $sql = "INSERT INTO TOKOKEREN.ulasan(email_pembeli,kode_produk,tanggal,rating,komentar) VALUES (:user,:kode_produk,:tanggal,:star,:komentar);";
        $query = $this->db->prepare($sql);
        $query -> bindParam(':user', $user, PDO::PARAM_STR);
        $query -> bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query -> bindParam(':tanggal', $tanggal, PDO::PARAM_STR);
        $query -> bindParam(':star', $star, PDO::PARAM_INT);
        $query -> bindParam(':komentar', $komentar, PDO::PARAM_STR);
        $query -> execute();

    }

    public function addTransaksiPulsa($kode_produk,$nomor,$totalbayar,$email,$nominal)
    {
        $sqlcount = "select * from TOKOKEREN.transaksi_pulsa;";
        $querycount = $this->db->prepare($sqlcount);
        $querycount->execute();
        $totaltransaksip= $querycount->rowCount() + 1;
//DDF3125012
//INVP0001000
//INVP0001003
        date_default_timezone_set("America/New_York");
        $runnumber ="";
        $noinvoice = "INVP" . substr("000000" .  $totaltransaksip, -6);
        //echo $noinvoice;
        $tanggal = date("Y-m-d");
        $waktu=date('Y-m-d H:i:s');
        $stat=2;
        $sql = "INSERT INTO TOKOKEREN.transaksi_pulsa VALUES (:no_invoice,:tanggal,:waktu_bayar,:status,:total_bayar,:email_pembeli,:nominal,:nomor,:kode_produk);";
        $query = $this->db->prepare($sql);
         $query -> bindParam(':no_invoice', $noinvoice, PDO::PARAM_STR);
          $query -> bindParam(':tanggal', $tanggal, PDO::PARAM_STR);
           $query -> bindParam(':waktu_bayar', $waktu, PDO::PARAM_STR);
            $query -> bindParam(':status', $stat, PDO::PARAM_STR);
             $query -> bindParam(':total_bayar', $totalbayar, PDO::PARAM_STR);
              $query -> bindParam(':email_pembeli', $email, PDO::PARAM_STR);
               $query -> bindParam(':nominal', $nominal, PDO::PARAM_STR);
                $query -> bindParam(':nomor', $nomor, PDO::PARAM_STR);
                 $query -> bindParam(':kode_produk', $kode_produk, PDO::PARAM_STR);
        $query -> execute();
    }
}
