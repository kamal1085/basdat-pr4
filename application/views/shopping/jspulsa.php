<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script type="text/javascript">
    $(document).ready(function() {
    
 
    //$('#submitPulsa').on('click', function() {
        //this method will execute to entry to Keranjang belanja
             
          //   $('#modalBuyPulsa').modal('toggle');
        //});
                 
});

    function loadFormBeli(kodeproduk,harga,nominal)
    {
        $('#kodeproduk').val(kodeproduk);

        $('#hargabayar').val(harga);

        $('#nominal').val(nominal);
        $('#modalBuyPulsa').modal('show');
    }

     function validate_field()
    {

        

        var  y = $("#nomor").val();
        //alert(y);
        if (y != null && y != '') {
            if (!$.isNumeric(y)) {
            alert('Nomor Harus angka');
            return false;
        }    
        }
        
    }
</script>
