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
                    <form accept-charset="UTF-8" role="form" action="<?php echo URL; ?>index.php/login/submit"
                          method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input class="form-control" placeholder="Email" name="email" type="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <input class="form-control" placeholder="Password" name="password" type="password"
                                       required>
                            </div>
                            <div class="alert alert-danger" <?php if (!isset($error_message)) echo "hidden" ?>>
                                <?php echo $error_message; ?>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                    <hr/>
                    <div style="text-align: center;"><h5>ATAU</h5></div>
                    <a class="btn btn-lg btn-primary btn-block" href="<?php echo URL; ?>index.php/register"
                       role="button">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>