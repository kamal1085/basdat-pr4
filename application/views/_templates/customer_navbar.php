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
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'shopping') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/shopping">Beli Produk</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'transaction') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/transaction">Transaksi</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'cart') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/shopping/cart">Keranjang Belanja</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'toko') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/toko">Buka Toko</a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'shipped_produk') echo 'class="active"' ?>><a
                        href="<?php echo URL; ?>index.php/produk/shipped_produk">Tambah Produk</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"><?php echo $_SESSION['user']->nama; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL; ?>index.php/home/logout">Logout</a>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>