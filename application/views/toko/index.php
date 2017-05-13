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
                    <form accept-charset="UTF-8" role="form" id="tokoForm" action="<?php echo URL; ?>index.php/toko/addToko" method="post"> 
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
							  <label for="jasa_kirim" class="control-label">Jasa Kirim 1</label>
							  <select class="selectpicker form-control" id="select1" name="name[]"> 
								<option value="" selected="selected" disabled>-- Pilih Jasa Kirim --</option> 
								<?php foreach ($jasakirim as $jkirim) { ?>
								<?php if (isset($jkirim->nama)) echo "<option value='",$jkirim->nama,"'>",$jkirim->nama,"</option>"; ?>  
								<?php } ?>
							  </select>
							</div>
							<!-- The template for adding new field -->
							<div class="form-group hide" id="JKTemplate">
								<label for="jasa_kirim" class="control-label" id="label">Jasa Kirim 1</label>
								<select class="selectpicker form-control" id="select2" name="name[]"> 
								  <option value="" selected="selected" disabled>-- Pilih Jasa Kirim --</option> 
								  <?php foreach ($jasakirim as $jkirim) { ?>
								  <?php if (isset($jkirim->nama)) echo "<option value='",$jkirim->nama,"'>",$jkirim->nama,"</option>"; ?>  
								  <?php } ?>
								</select>
							</div>
							<div class="alert alert-danger" <?php if (!isset($error_message)) echo "hidden" ?>>
                                <?php echo $error_message; ?>
                            </div>
                            <div class="alert alert-success" <?php if (!isset($message)) echo "hidden" ?>>
                                <?php echo $message; ?>
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
