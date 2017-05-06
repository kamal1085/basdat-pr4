<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Shipped Produk</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                    <div class="row">
                       <table class="table table-striped">
                        <tr>
                            <th>
                            Kode Produk
                            </th>
                            <th>
                            Nama Produk
                            </th>
                            <th>Berat</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Sub total</th>
                            
                            </tr>
                            <tr>
                            <td>
                                P0000001
                                </td>
                                <td>Tas Flower 1
                                </td>
                                <td>4</td>
                                <td>4</td>
                                <td>75000</td>
                                <td>300000</td>
                            </tr>
                            <tr>
                            <td>
                                P0000002
                                </td>
                                <td>Tas Flower 2
                                </td>
                                <td>3</td>
                                <td>3</td>
                                <td>80000</td>
                                <td>240000</td>
                                
                            </tr>

                        </table>
                        </div>
                         <div class="row">
                          <div class="col-md-2 ">Alamat Kirim</div>
                          <div class="col-md-4 "> <textarea class="form-control" placeholder="Alamat Kirim" name="alamat"  >
                        </textarea> 
                          </div>
                        </div>
                        <div class="row">
          <div class="col-md-6 col-md-offset-3"> </div>
        </div>
                         <div class="row">
                          <div class="col-md-2 ">Jasa Kirim</div>
                          <div class="col-md-4 "><select class="form-control">
                              <option>Jasa Kirim-1</option>
                              <option>Jasa Kirim-2</option>
                              <option>Jasa Kirim-3</option>
                              <option>Jasa Kirim-4</option>
                          </select>
                          </div>
                        </div>
 <div class="row">
          <div class="col-md-6 col-md-offset-3"> </div>
        </div>
                         <div class="row">
          <div class="col-md-6 "> 
 <button type="button" class="btn btn-primary btn-lg">Checkout</button>
          </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
