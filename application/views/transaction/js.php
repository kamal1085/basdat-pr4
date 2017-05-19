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

    function loadDetailTransaksi(noinvoice)
    {

            var JS_BASE_URL = '<?php echo $_SERVER['HTTP_HOST']; ?>';
            $('#tblmodal tr').not(function(){ return !!$(this).has('th').length; }).remove();
          $.ajax(url + "/transaction/listproduktransaction/" + noinvoice)
                .done(function(result) {
                     var object = $.parseJSON(result);
                    //$("#tblmodal").empty();

                    
                   // console.log(object);
                     //$('#lblnoinvoice').text(result);
                     var tbody = $("<tbody />"),tr;
                      $.each(object, function (_,dprod) {
                        //console.log(dprod["kode_produk"]);
                          tr = $("<tr />");
                          tr.append("<td>"+dprod["nama"]+"</td>");
                          tr.append("<td>"+dprod["berat"]+"</td>");
                          tr.append("<td>"+dprod["kuantitas"]+"</td>");
                          tr.append("<td>"+dprod["harga"]+"</td>");
                          tr.append("<td>"+dprod["sub_total"]+"</td>");
                          tr.append("<td><a href='"+url+"ulasan/mantap/"+dprod["kode_produk"]+"' class='btn btn-primary btn-sm'>Ulas</a></td>");
                          //$.each(obj,function(_,text) {
                          //  tr.append("<td>"+text+"</td>")
                          //});
                          tr.appendTo(tbody);
                      });
                     tbody.appendTo("#tblmodal");
                    
                })
                .fail(function() {
                    // this will be executed if the ajax-call had failed
                })
                .always(function() {
                    // this will ALWAYS be executed, regardless if the ajax-call was success or not
                });
        

        $('#lblnoinvoice').text(noinvoice);
        $('#modalShowDetail').modal('show');
    }
</script>
