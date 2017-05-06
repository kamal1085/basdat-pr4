<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script type="text/javascript">
    $(document).ready(function() {
    

    $('#submitShowProduct').on('click', function() {
             $('#listProduk').show();
             $('#frmSelectToko').hide();
        });

    $('#submitCart').on('click', function() {
        //this method will execute to entry to Keranjang belanja
             
             $('#modalAddCart').modal('toggle');
        });
                 
});
</script>
