<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Promo</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="promoForm" action="./promo/addPromo" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="description" class="control-label">Deskripsi</label>
                                <textarea class="form-control" placeholder="Enter text here..." name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="periode_awal" class="control-label">Periode Awal</label> 
                                <input class="form-control" placeholder="Periode Awal" name="periode_awal" type="date"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="periode_akhir" class="control-label">Periode Akhir</label>
                                <input class="form-control" placeholder="Periode Akhir" name="periode_akhir" type="date"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="kode_promo" class="control-label">Kode Promo</label>
                                <input class="form-control" placeholder="Kode Promo" name="kode_promo" type="text"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="category_name" class="control-label">Kategori</label>
                               <select class="form-control" name="kategori" id="kategori" required>
                                    <?php foreach ($list_kategori as $key) { ?>
                                        <option><?php echo $key->nama?></option>
                                    <?php } ?>
                                    
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subcategory_code" class="control-label">Subkategori</label>
                               <select class="form-control" name="subkategori" id="subkategori" required>
                                   <?php foreach ($list_subkategori as $key2) { ?>
                                       <option><?php echo $key2->nama?></option>
                                   <?php } ?>
                                </select>
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

