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
                            <tr>
                            <td>
                                P0000001
                                </td>
                                <td>Pulsa IM3
                                </td>
                                <td>12000</td>
                                <td></td>
                                <td>10</td>
                                <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalBuyPulsa">
                                      Beli
                                    </button></td>
                            </tr>
                            <tr>
                            <td>
                                P0000002
                                </td>
                                <td>Pulsa XL
                                </td>
                                <td>12000</td>
                                <td></td>
                                <td>10</td>
                                <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalBuyPulsa">
                                      Beli
                                    </button></td>
                            </tr>

                        </table>
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

