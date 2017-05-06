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
                            <tr>
                            <td>
                                V000000001
                                </td>
                                <td>Pulsa IM3
                                </td>
                                <td>4/1/2016</td>
                                <td>SUDAH DIBAYAR</td>
                                <td>12000</td>
                                <td>10</td>
                                <td>085742356534</td>
                                <td> <button type="button" class="btn btn-primary btn-lg">
                                      ULAS
                                    </button></td>
                            </tr>
                            <tr>
                            <td>
                                V000000002
                                </td>
                                <td>Listrik PLN
                                </td>
                                <td>4/1/2016</td>
                                <td>BELUM DIBAYAR</td>
                                <td>23000</td>
                                <td>20</td>
                                <td>2345612345</td>
                                <td> <button type="button" class="btn btn-primary btn-lg">
                                      ULAS
                                    </button></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
