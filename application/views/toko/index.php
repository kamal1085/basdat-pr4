<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo URL; ?>index.php/">Tokokeren</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo URL; ?>index.php/toko">Membuat Toko</a></li>
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
                    <h3 class="panel-title">Form Membuat Toko</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="tokoForm">
                        <fieldset>
                            <div class="form-group">
                                <label for="nama_toko" class="control-label">Nama</label>
                                <input class="form-control" placeholder="Nama" name="nama_toko" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_toko" class="control-label">Deskripsi</label>
                                <input class="form-control" placeholder="Deskripsi" name="deskripsi_toko" type="text">
                            </div>
							<div class="form-group">
                                <label for="slogan_toko" class="control-label">Slogan</label>
                                <input class="form-control" placeholder="Slogan" name="slogan_toko" type="text">
                            </div>
							<div class="form-group">
                                <label for="lokasi_toko" class="control-label">Lokasi</label>
                                <input class="form-control" placeholder="Lokasi" name="lokasi_toko" type="text" required>
                            </div>
							<div class="form-group">
							  <label for="jasa_kirim" value="tes">Jasa Kirim</label>
							  <select class="form-control" name="toko[0].jk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							  </select>
							</div>
							<!-- The template for adding new field -->
							<div class="form-group hide" id="JKTemplate">
								<select class="form-control" name="toko_jk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							  </select>
							</div>
                            <a class="btn btn-lg btn-success btn-block addButton" type="button">Tambah Jasa Kirim</a>
                        </fieldset>
                    </form>
                    <hr/>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
