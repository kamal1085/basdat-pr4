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
                                <td><a href="<?php echo URL; ?>index.php/shopping/shoppulsa">Beli</a> </td>
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
                                <td><a href="<?php echo URL; ?>index.php/shopping/shoppulsa">Beli</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    

    $('#submitShowProduct').on('click', function() {
             $('#listProduk').show();
             $('#frmSelectToko').hide();
        })         
});
</script>
