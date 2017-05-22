<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<style type="text/css">
    a[disabled] { pointer-events: none; }
</style>

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
                             <?php foreach ($transshipped as $tshipped) { ?>
    <tr>
        <td><?php if (isset($tshipped->no_invoice)) echo htmlspecialchars($tshipped->no_invoice, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->nama_toko)) echo htmlspecialchars($tshipped->nama_toko, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->tanggal)) echo htmlspecialchars($tshipped->tanggal, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->statusstr)) echo htmlspecialchars($tshipped->statusstr, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->total_bayar)) echo htmlspecialchars($tshipped->total_bayar, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->alamat_kirim)) echo htmlspecialchars($tshipped->alamat_kirim, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->biaya_kirim)) echo htmlspecialchars($tshipped->biaya_kirim, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->no_resi)) echo htmlspecialchars($tshipped->no_resi, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tshipped->nama_jasa_kirim)) echo htmlspecialchars($tshipped->nama_jasa_kirim, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><button type="button" class="btn btn-primary btn-sm" onclick="loadDetailTransaksi('<?php if (isset($tshipped->no_invoice)) echo htmlspecialchars($tshipped->no_invoice, ENT_QUOTES, 'UTF-8'); ?>');" >
                                      Daftar Produk
                                    </button></td>
    </tr>
<?php } ?>
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
          No Invoice : <label id="lblnoinvoice"></label>
      </div>
      <div class="row">
       <table class="table table-striped" id="tblmodal">
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
                             

                        </table>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>



