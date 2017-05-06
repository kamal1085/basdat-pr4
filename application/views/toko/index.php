<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>


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
							  <select class="selectpicker form-control">
								<option>  </option>
								<option>  </option>
								<option>  </option>
							  </select>
							</div>
							<!-- The template for adding new field -->
							<div class="form-group hide" id="JKTemplate">
								<select class="selectpicker form-control">
									<option>  </option>
									<option>  </option>
									<option>  </option>
								</select>
							</div>
                            <a class="btn btn-lg btn-success btn-block addButton" type="button">Tambah Jasa Kirim</a>
                        </fieldset>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
