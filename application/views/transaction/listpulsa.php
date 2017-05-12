<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Transaksi Pulsa</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-striped">
                        <tr>
                            <th>
                            No Invoice
                            </th>
                            <th>
                            Nama Produk
                            </th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total Bayar</th>
                            <th>Nominal</th>
                            <th>Nomor</th>
                            <th>ULASAN</th>
                            </tr>
                            <?php foreach ($transpulsa as $tpulsa) { ?>
    <tr>
        <td><?php if (isset($tpulsa->no_invoice)) echo htmlspecialchars($tpulsa->no_invoice, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->kode_produk)) echo htmlspecialchars($tpulsa->kode_produk, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->tanggal)) echo htmlspecialchars($tpulsa->tanggal, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->status)) echo htmlspecialchars($tpulsa->status, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->total_bayar)) echo htmlspecialchars($tpulsa->total_bayar, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->nominal)) echo htmlspecialchars($tpulsa->nominal, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($tpulsa->nomor)) echo htmlspecialchars($tpulsa->nomor, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><a href="<?php echo URL; ?>index.php/ulasan" class="btn btn-primary btn-sm">
                                      Ulas
                                    </a></td>
    </tr>
<?php } ?>
                            
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
