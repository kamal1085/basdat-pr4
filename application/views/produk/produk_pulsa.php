<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo URL; ?>index.php/">Tokokeren</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo URL; ?>index.php/toko">Produk Pulsa</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo URL; ?>index.php/">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Membuat Produk Pulsa</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="tokoForm">
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
                                <input class="form-control" placeholder="Harga" name="harga_produk" type="text" required>
                            </div>
							<div class="form-group">
                                <label for="deskripsi_produk" class="control-label">Deskripsi</label>
                                <input class="form-control" placeholder="Deskripsi" name="deskripsi_produk" type="text" required>
                            </div>
							<div class="form-group">
                                <label for="nominal_produk" class="control-label">Nominal</label>
                                <input class="form-control" placeholder="Nominal" name="nominal_produk" type="text" required>
                            </div>
                        </fieldset>
                    </form>
                    <hr/>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
