<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Membeli Produk Pulsa</h3>
                </div>
                <div class="panel-body">
                 <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="control-label">Kode Produk</label>
                                <input class="form-control" placeholder="KodeProduk" value="P0000001" name="kodeproduk" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Nomor HP / Token Listrik</label>
                                <input class="form-control" placeholder="Nomor" name="nomor" type="text"
                                       required>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
                        </fieldset>
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
</div>
