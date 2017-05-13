<?php

if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}
?>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo URL; ?>index.php/">Tokokeren</a>
        </div>
        <ul class="nav navbar-nav">
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'category') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/category">Kategori</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'jasa_kirim') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/jasa_kirim">Jasa Kirim</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'promo') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/promo">Promo</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'produk_pulsa') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/produk/produk_pulsa">Tambah Produk</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL; ?>index.php/home/logout">Logout</a>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>