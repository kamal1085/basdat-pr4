<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Kategori</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" id="category_form">
                        <fieldset>
                            <div class="form-group">
                                <label for="category_code" class="control-label">Kode kategori</label>
                                <input class="form-control" placeholder="Kode kategori" name="category_code" type="text"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="category_name" class="control-label">Nama kategori</label>
                                <input class="form-control" placeholder="Nama kategori" name="category_name" type="text"
                                       required>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label class="control-label">Sub kategori 1:</label>
                                    <br/>
                                    <label for="subcategory_code" class="control-label">Kode subkategori</label>
                                    <input class="form-control" placeholder="Kode subkategori" name="subcategory_code[0]"
                                           type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_name" class="control-label">Nama kategori</label>
                                    <input class="form-control" placeholder="Nama subkategori" name="subcategory_name[0]"
                                           type="text" required>
                                </div>
                            </div>
                            <div class="hide" id="subcategory_template">
                                <div class="form-group">
                                    <label class="control-label" id="label">Sub kategori 1:</label>
                                    <br/>
                                    <label for="subcategory_code" class="control-label">Kode subkategori</label>
                                    <input class="form-control" placeholder="Kode subkategori" name="subcategory_code"
                                           type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_name" class="control-label">Nama kategori</label>
                                    <input class="form-control" placeholder="Nama subkategori" name="subcategory_name"
                                           type="text" required>
                                </div>
                            </div>
                            <a class="btn btn-lg btn-success btn-block add-subcategory"
                               role="button">Tambah Subkategori</a>
                        </fieldset>
                    </form>
                    <hr/>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</div>
