<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script type="text/javascript">
    $(document).ready(function() {
    

    $('#submitShowProduct').on('click', function() {
             //$('#listProduk').show();
             var idtoko=$('#tokolist').val();

             window.location = "<?php echo URL; ?>index.php/shopping/listproduk/"+idtoko+"/0";
        });

    //$('#submitCart').on('click', function() {
        //this method will execute to entry to Keranjang belanja
             
      //       $('#modalAddCart').modal('toggle');
       // });
                 
});
</script>
