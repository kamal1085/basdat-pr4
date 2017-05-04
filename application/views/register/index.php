<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div class="row vertical-align">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar ke Tokokeren</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input class="form-control" placeholder="Email" name="email" type="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="repeat_password" class="control-label">Ulangi Password</label>
                                    <input class="form-control" placeholder="Ulangi Password" name="repeat_password"
                                           type="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="control-label">Alamat</label>
                                    <input class="form-control" placeholder="Alamat" name="address" type="text"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="control-label">Nama</label>
                                    <input class="form-control" placeholder="Nama Lengkap" name="name" type="text"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date" class="control-label">Tanggal Lahir</label>
                                    <input class="form-control" placeholder="Tanggal Lahir" name="birth_date"
                                           type="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="control-label">Jenis Kelamin</label>
                                    <div>
                                        <select name="gender" class="form-control">
                                            <option value="1">Laki-laki</option>
                                            <option value="0">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label">No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="phone" type="tel"
                                           required>
                                </div>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Daftar">
                        </fieldset>
                    </form>
                    <hr/>
                    <div style="text-align: center;"><h5>ATAU</h5></div>
                    <a class="btn btn-lg btn-primary btn-block" href="<?php echo URL; ?>index.php"
                       role="button">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
