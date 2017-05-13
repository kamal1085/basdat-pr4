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
         <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalBuyPulsa">
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
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
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
      <div class="modal-body">
       <fieldset>
                            <div class="form-group">
                                <label for="email" class="control-label">Kode Produk</label>
                                <input class="form-control" placeholder="KodeProduk" value="P0000001" name="kodeproduk" type="text" >
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Nomor HP / Token Listrik</label>
                                <input class="form-control" placeholder="Nomor" name="nomor" type="text"
                                       >
                            </div>
                             
                        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="submitPulsa" class="btn btn-primary" >Submit</button>
      </div>
    </div>
  </div>
</div>

