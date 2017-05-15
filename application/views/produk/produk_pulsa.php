<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Membuat Produk Pulsa</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="produk_pulsa_form" action="<?php echo URL; ?>index.php/produk/addProdukPulsa" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="kode_produk" class="control-label">Kode Produk</label>
                                <input class="form-control" placeholder="Kode" name="kode_produk" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_produk" class="control-label">Nama Produk</label>
                                <input class="form-control" placeholder="Nama" name="nama_produk" type="text" required>
                            </div>
							<div class="form-group">
                                <label for="harga_produk" class="control-label">Harga</label>
                                <input class="form-control" placeholder="Harga" name="harga_produk" type="number" min="1" step="1" required>
                            </div>
							<div class="form-group">
                                <label for="deskripsi_produk" class="control-label">Deskripsi</label>
                                <input class="form-control" placeholder="Deskripsi" name="deskripsi_produk" type="text" required>
                            </div>
							<div class="form-group">
                                <label for="nominal_produk" class="control-label">Nominal</label>
                                <input class="form-control" placeholder="Nominal" name="nominal_produk" type="number" min="1" step="1" required>
                            </div>
							<div class="alert alert-danger" <?php if (!isset($error_message)) echo "hidden" ?>>
                                <?php echo $error_message; ?>
                            </div>
                            <div class="alert alert-success" <?php if (!isset($message)) echo "hidden" ?>>
                                <?php echo $message; ?>
                            </div>
							<hr/>
							<input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
