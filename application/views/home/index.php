<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<div class="container">
    <div class="row vertical-align">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login ke Tokokeren</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password"
                                       value="" required>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                    <hr/>
                    <div style="text-align: center;"><h4>ATAU</h4></div>
                    <a class="btn btn-lg btn-primary btn-block" href="<?php echo URL; ?>index.php/register"
                       role="button">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>