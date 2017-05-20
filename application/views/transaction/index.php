<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Produk</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-3">
                    <a class="btn btn-lg btn-primary btn-block" href="<?php echo URL; ?>index.php/transaction/listpulsa/0"
                       role="button">Transaksi Pulsa</a>
                       
                    </div>
                    <div class="col-md-3">
                    
                       <a class="btn btn-lg btn-primary btn-block" href="<?php echo URL; ?>index.php/transaction/listproduk"
                       role="button">Transaksi Barang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
