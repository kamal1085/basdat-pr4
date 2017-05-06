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
