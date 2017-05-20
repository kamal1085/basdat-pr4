<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Produk Pulsa</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                        <tr>
                            <th>
                            Kode Produk
                            </th>
                            <th>
                            Nama Produk
                            </th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                            <th>Beli</th>
                            </tr>
                             <?php foreach ($listpulsa as $tpulsa) { ?>
    <tr>
        <td><?php if (isset($tpulsa->kode_produk)) echo htmlspecialchars($tpulsa->kode_produk, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->nama)) echo htmlspecialchars($tpulsa->nama, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->harga)) echo htmlspecialchars($tpulsa->harga, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->deskripsi)) echo htmlspecialchars($tpulsa->deskripsi, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->nominal)) echo htmlspecialchars($tpulsa->nominal, ENT_QUOTES, 'UTF-8'); ?></td>
         <td> <button type="button" class="btn btn-primary btn-sm" onclick="loadFormBeli('<?php if (isset($tpulsa->kode_produk)) echo htmlspecialchars($tpulsa->kode_produk, ENT_QUOTES, 'UTF-8'); ?>','<?php if (isset($tpulsa->harga)) echo htmlspecialchars($tpulsa->harga, ENT_QUOTES, 'UTF-8'); ?>','<?php if (isset($tpulsa->nominal)) echo htmlspecialchars($tpulsa->nominal, ENT_QUOTES, 'UTF-8'); ?>');" >
                                      Beli
                                    </button></td>
    </tr>

<?php } ?>
                        </table>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination">
                            <?php for ($i=0; $i < $totalProduct/10; $i++) { 
                              $page=$i*10;
                              $currentPage= '/index.php/shopping/listpulsa/' . $page;
                               //echo ($_SERVER['PHP_SELF']);
                              //  echo ($currentPage);
                              ?>
                               <li <?php if ($_SERVER['PHP_SELF'] == $currentPage ) echo 'class="active"' ?>><a href="<?php echo URL; ?>index.php/shopping/listpulsa/<?php echo $i*10; ?>"><?php echo $i+1; ?></a></li>
                             <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBuyPulsa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Membeli Produk Pulsa</h4>
      </div>
      <form accept-charset="UTF-8" role="form" id="produk_pulsa_form" action="<?php echo URL; ?>index.php/shopping/addTransaksiPulsa" method="post">
      <div class="modal-body">
       
       <fieldset>

                            <div class="form-group">
                                <label for="kodeproduk" class="control-label">Kode Produk</label>
                                <input class="form-control" placeholder="Kode Produk" id="kodeproduk" name="kodeproduk" type="text" >
                                <input type="hidden" name="hargabayar" id="hargabayar">
                                <input type="hidden" name="nominal" id="nominal">                                
                            </div>

                            <div class="form-group">
                                <label for="nomor" class="control-label">Nomor HP / Token Listrik</label>
                                <input class="form-control" placeholder="Nomor" maxlength="20" name="nomor" id="nomor" type="text" required>
                            </div>
                        </fieldset>
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="Submit" id="submitPulsa" onclick="return validate_field();"  class="btn btn-primary" >Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

