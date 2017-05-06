<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div id="frmSelectToko" class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Pilih Toko</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="control-label">Nama Toko</label>
                                <select class="form-control" >
                                    <option>Toko 1</option>
                                    <option>Toko 2</option>
                                    <option>Toko 3</option>
                                    <option>Toko 4</option>
                                    <option>Toko 5</option>
                                </select>
                            </div>
                            
                            <button class="btn btn-lg btn-success btn-block" id="submitShowProduct">Submit</button> 
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="listProduk" class="row" style="display: none;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Shipped Produk</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                Kategori : <select><option>Test</option></select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               Sub Kategori : <select><option>Test</option></select>
                            </div>
                        </div>
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
                            <th>Is_Asuransi</th>
                            <th>Stok</th>
                            <th>Is Baru</th>
                            <th>Harga grosir</th>
                            <th>Beli</th>
                            </tr>
                            <tr>
                            <td>
                                P0000001
                                </td>
                                <td>Tas Flower 1
                                </td>
                                <td>75000</td>
                                <td>KOSONG</td>
                                <td>TRUE</td>
                                <td>30</td>
                                <td>TRUE</td>
                                <td>60000</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalAddCart">
                                      Beli
                                    </button>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                P0000002
                                </td>
                                <td>Tas Flower 2
                                </td>
                                <td>80000</td>
                                <td>KOSONG</td>
                                <td>TRUE</td>
                                <td>140</td>
                                <td>TRUE</td>
                                <td>70000</td>
                                <td>
                                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalAddCart">
                                      Beli
                                    </button> </td>
                            </tr>

                        </table>
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
      <div class="modal-body">
        <fieldset>
                            <div class="form-group">
                                <label for="email" class="control-label">Berat Total</label>
                                <input class="form-control" placeholder="Berat Total"  name="berat" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Jumlah Barang</label>
                                <input class="form-control" placeholder="Jumlah Barang" name="nomor" type="text">
                            </div>
                            
                        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="submitCart" class="btn btn-primary" >Submit</button>
      </div>
    </div>
  </div>
</div>



