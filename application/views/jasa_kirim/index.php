<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Jasa Kirim</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="jasakirimForm" action="./jasa_kirim/addJasaKirim" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama</label>
                                <input class="form-control" placeholder="Nama" name="nama" type="text"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="lama_kirim" class="control-label">Lama Kirim</label>
                                <input class="form-control" placeholder="Lama Kirim" name="lama_kirim" type="text"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="tarif" class="control-label">Tarif</label>
                                <input class="form-control" placeholder="Tarif" name="tarif"
                                       type="text"
                                       required>
                            </div>
                        </fieldset>
                        <hr/>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

