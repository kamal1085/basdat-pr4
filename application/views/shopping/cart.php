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
                             <?php foreach ($listcart as $tcart) {
                              $berat = $tcart->berat;
                              $sub_total = $tcart->sub_total;
                              $subtotal += $sub_total;
                              $berattotal += $berat;
                              ?>
    <tr>
        <td><?php if (isset($tcart->kode_produk)) echo htmlspecialchars($tcart->kode_produk, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tcart->nama)) echo htmlspecialchars($tcart->nama, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tcart->berat)) echo htmlspecialchars($tcart->berat, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tcart->kuantitas)) echo htmlspecialchars($tcart->kuantitas, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tcart->harga)) echo htmlspecialchars($tcart->harga, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tcart->sub_total)) echo htmlspecialchars($tcart->sub_total, ENT_QUOTES, 'UTF-8'); ?></td>
        
    </tr>

<?php } ?>
                            
                        </table>
                        </div>
                        <form accept-charset="UTF-8" role="form" id="produk_pulsa_form" action="<?php echo URL; ?>index.php/shopping/checkout" method="post">
                         <div class="row">
                          <div class="col-md-2 ">Alamat Kirim</div>
                          <div class="col-md-4 "> 
                            <textarea class="form-control" required name="alamat"  ></textarea> 
                          </div>
                        </div>
                        <div class="row">
          <div class="col-md-6 col-md-offset-3"> </div>
        </div>
                         <div class="row">
                          <div class="col-md-2 ">Jasa Kirim</div>
                          <div class="col-md-4 ">
<select id="jasakirim" name="jasakirim" class="form-control" >
                                 <option value="0">--Select--</option>
                                <?php foreach ($listJasaKirim as $jasakirim) { ?>
 <option value="<?php if (isset($jasakirim->nama)) echo htmlspecialchars($jasakirim->nama, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($jasakirim->nama)) echo htmlspecialchars($jasakirim->nama, ENT_QUOTES, 'UTF-8'); ?></option>
<?php } ?>
                               
                                </select>
                           <input type="hidden" id="totalberat" name="totalberat" value="<?php echo $berattotal;?>">
                           <input type="hidden" id="subtotal" name="subtotal" value="<?php echo $subtotal;?>">
                          </div>
                        </div>
 <div class="row">
          <div class="col-md-6 col-md-offset-3"> </div>
        </div>
                         <div class="row">
          <div class="col-md-6 "> 
 <button type="Submit" class="btn btn-primary btn-sm">Checkout</button>
          </div>
        </div>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
