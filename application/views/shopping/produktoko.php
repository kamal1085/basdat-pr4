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
                                <select class="form-control" id="tokolist" >
                                 <?php foreach ($listtoko as $toko) { ?>
 <option value="<?php if (isset($toko->nama)) echo htmlspecialchars($toko->nama, ENT_QUOTES, 'UTF-8'); ?>" ><?php if (isset($toko->nama)) echo htmlspecialchars($toko->nama, ENT_QUOTES, 'UTF-8'); ?></option>
<?php } ?>
                                </select>
                            </div>
                            
                            <button class="btn btn-lg btn-success btn-block" id="submitShowProduct">Submit</button> 
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>