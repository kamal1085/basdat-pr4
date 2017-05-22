<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
   

    <div id="listProduk" class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Shipped Produk</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                Kategori : 
                            </div>
                            <div class="col-md-4">
                                <select id="katUtama" class="form-control" >
                                 <option value="0">--Select--</option>
                                <?php foreach ($listkategori as $tkat) { ?>
 <option value="<?php if (isset($tkat->kode)) echo htmlspecialchars($tkat->kode, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($tkat->nama)) echo htmlspecialchars($tkat->nama, ENT_QUOTES, 'UTF-8'); ?></option>
<?php } ?>
                               
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                               Sub Kategori :  
                            </div>
                             <div class="col-md-4">
                                <select id="subkat" class="form-control" ><option value="0">--Select--</option></select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <input type="hidden" id="hftokoid" name="hftokoid" value="<?php echo $tokoid; ?>">
                                 <button class="btn btn-sm btn-success btn-block" id="filterProduk">Filter</button> 
                            </div>
                        </div>
                        <div class="row">
                        <table class="table table-striped" id="tlistproduk">
                        <tr>
                            <th>
                            Kode Produk
                            </th>
                            <th>
                            Nama Produk
                            </th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Is_Asuransi</th>
                            <th>Stok</th>
                            <th>Is Baru</th>
                            <th>Harga grosir</th>
                            <th>Beli</th>
                            </tr>
                             <?php foreach ($listproduk as $tproduk) { ?>
    <tr>
        <td><?php if (isset($tproduk->kode_produk)) echo htmlspecialchars($tproduk->kode_produk, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tproduk->nama)) echo htmlspecialchars($tproduk->nama, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tproduk->harga)) echo htmlspecialchars($tproduk->harga, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tproduk->deskripsi)) echo htmlspecialchars($tproduk->deskripsi, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tproduk->is_asuransi)) {
            if ($tproduk->is_asuransi) {
              ?>
              True
              <?php 
            }
            else{
              ?>
              False
              <?php
            }
          }
          else{
            ?>
            False
            <?php 
            } ?></td>
         <td><?php if (isset($tproduk->stok)) echo htmlspecialchars($tproduk->stok, ENT_QUOTES, 'UTF-8'); ?></td>
          <td><?php if (isset($tproduk->is_baru)) {
              if ($tproduk->is_baru) {
                ?>
                True
                <?php
                }
                else{
                  ?>
                  False
                  <?php
                }}
                else{
              ?>
              False
              <?php
             } ?></td>
           <td><?php if (isset($tproduk->harga_grosir)) echo htmlspecialchars($tproduk->harga_grosir, ENT_QUOTES, 'UTF-8'); ?></td>
         <td> <button type="button" class="btn btn-primary btn-sm" onclick="loadFormBeli('<?php if (isset($tproduk->kode_produk)) echo htmlspecialchars($tproduk->kode_produk, ENT_QUOTES, 'UTF-8'); ?>','<?php if (isset($tproduk->harga)) echo htmlspecialchars($tproduk->harga, ENT_QUOTES, 'UTF-8'); ?>');" >
                                      Beli
                                    </button></td>
    </tr>

<?php } ?>
                              

                        </table>
                        </div>
                         <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination" id="pagingprod">
                            <?php for ($i=0; $i < $totalProduct/10; $i++) { 
                              $page=$i*10;
                              $currentPage= '/index.php/shopping/listproduk/' . $tokoid . '/' . $page;
                              // echo ($_SERVER['PHP_SELF']);
                              //  echo ($currentPage);
                              ?>
                               <li <?php if ($_SERVER['PHP_SELF'] == $currentPage ) echo 'class="active"' ?>><a href="<?php echo URL; ?>index.php/shopping/listProduk/<?php echo $tokoid; ?>/<?php echo $i*10; ?>"><?php echo $i+1; ?></a></li>
                             <?php } ?>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Masukkan Ke Keranjang Belanja</h4>
      </div>
      <form accept-charset="UTF-8" role="form" id="produk_pulsa_form" action="<?php echo URL; ?>index.php/shopping/addKeranjangBelanja" method="post">
      <div class="modal-body">
        <fieldset>
                            <div class="form-group">
                                <label for="berat" class="control-label">Berat Total</label>
                                <input class="form-control" placeholder="Berat Total"  name="berat" id="berat" type="text" required>
                                  <input type="hidden" name="kodeproduk" id="kodeproduk">
                                <input type="hidden" name="harga" id="harga">     
                            </div>
                            <div class="form-group">
                                <label for="kuantitas" class="control-label">Jumlah Barang</label>
                                <input class="form-control" placeholder="Jumlah Barang" name="kuantitas" id="kuantitas" type="text" required>
                            </div>
                            
                        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="Submit" onclick="return validate_field();" id="submitCart" class="btn btn-primary" >Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



