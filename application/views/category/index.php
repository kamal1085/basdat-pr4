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
                    <form accept-charset="UTF-8" role="form" id="category_form"
                          action="<?php echo URL; ?>index.php/category/submit"
                          method="post">
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
                                    <label class="control-label">Subkategori 1:</label>
                                    <br/>
                                    <label for="subcategory_code" class="control-label">Kode subkategori</label>
                                    <input class="form-control" placeholder="Kode subkategori"
                                           name="subcategory_code[0]"
                                           type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_name" class="control-label">Nama subkategori</label>
                                    <input class="form-control" placeholder="Nama subkategori"
                                           name="subcategory_name[0]"
                                           type="text" required>
                                </div>
                            </div>
                            <div class="hide" id="subcategory_template">
                                <div class="form-group">
                                    <label class="control-label" id="label">Subkategori 1:</label>
                                    <br/>
                                    <label for="subcategory_code" class="control-label">Kode subkategori</label>
                                    <input class="form-control" placeholder="Kode subkategori" name="subcategory_code"
                                           type="text" required disabled>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_name" class="control-label">Nama subkategori</label>
                                    <input class="form-control" placeholder="Nama subkategori" name="subcategory_name"
                                           type="text" required disabled>
                                </div>
                            </div>
                            <div class="alert alert-danger" <?php if (!isset($error_message)) echo "hidden" ?>>
                                <?php echo $error_message; ?>
                            </div>
                            <div class="alert alert-success" <?php if (!isset($message)) echo "hidden" ?>>
                                <?php echo $message; ?>
                            </div>
                            <a class="btn btn-lg btn-success btn-block add-subcategory"
                               role="button">Tambah Subkategori</a>
                            <hr/>
                            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
