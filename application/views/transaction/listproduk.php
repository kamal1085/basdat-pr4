<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    

    <div id="listProduk" class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Transaksi Shipped</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                          
                        <table class="table table-striped">
                        <tr>
                            <th>
                            No Invoice
                            </th>
                            <th>
                            Nama Toko
                            </th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total Bayar</th>
                            <th>Alamat Kirim</th>
                            <th>Biaya Kirim</th>
                            <th>Nomor Resi</th>
                            <th>Jasa Kirim</th>
                            <th>ULASAN</th>
                            </tr>
                            <tr>
                            <td>
                                V000000001
                                </td>
                                <td>Fashion Keren
                                </td>
                                <td>4/1/2016</td>
                                <td>Barang Sudah Dibayar</td>
                                <td>120000</td>
                                <td>Jl Veteran 45, Depok</td>
                                <td>25000</td>
                                <td>DPK9816788882627</td>
                                <td>JNE OKE</td>
                               <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalShowDetail">
                                      Daftar Produk
                                    </button></td>
                            </tr>
                             <tr>
                            <td>
                                V000000002
                                </td>
                                <td>Toko Buku MG
                                </td>
                                <td>4/1/2016</td>
                                <td>Transaksi Dilakukan</td>
                                <td>250000</td>
                                <td>Jl Pertiwi 34, Depok</td>
                                <td>10000</td>
                                <td>KOSONG</td>
                                <td>JNE OKE</td>
                               <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalShowDetail">
                                      Daftar Produk
                                    </button></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalShowDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar Produk Dibeli</h4>
      </div>
      <div class="modal-body">
      <div class="row">
          No Invoice : V000000001
      </div>
      <div class="row">
       <table class="table table-striped">
                        <tr>
                            <th>
                            Nama Produk
                            </th>
                            <th>
                            Berat
                            </th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Sub Total</th>
                            <th>ULASAN</th>
                            </tr>
                            <tr>
                            <td>
                                Tas Bagus 1
                                </td>
                                <td>4
                                </td>
                                <td>4</td>
                                <td>20000</td>
                                <td>80000</td>
                                
                               <td> <a href="<?php echo URL; ?>index.php/ulasan" class="btn btn-primary btn-sm">
                                      Ulas
                                    </a></td>
                            </tr>
                             <tr>
                            <td>
                                Sepatu Cantik 23
                                </td>
                                <td>1
                                </td>
                                <td>1</td>
                                <td>15000</td>
                                <td>15000</td>
                                
                               <td> <a href="<?php echo URL; ?>index.php/ulasan" class="btn btn-primary btn-sm">
                                      Ulas
                                    </a></td>
                            </tr>

                        </table>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



