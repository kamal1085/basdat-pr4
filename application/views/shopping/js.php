<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script type="text/javascript">
    $(document).ready(function() {
    
 $('#filterProduk').on('click', function() {
     $('#tlistproduk tr').not(function(){ return !!$(this).has('th').length; }).remove();
             $.ajax({  
                type: "post",  
                url: url + "/shopping/getlistprodfilter/",  
                data: { subkatid: $('#subkat').val(), tokoid: $('#hftokoid').val() },  
                datatype: "json",  
                traditional: true,  
                success: function (data) {  
                     console.log(data);
                      var object = $.parseJSON(data);
                    //$("#tblmodal").empty();

                    
                   // console.log(object);
                     //$('#lblnoinvoice').text(result);
                     var tbody = $("<tbody />"),tr;
                      $.each(object, function (_,dprod) {
                        //console.log(dprod["kode_produk"]);
                          tr = $("<tr />");
                          tr.append("<td>"+dprod["kode_produk"]+"</td>");
                          tr.append("<td>"+dprod["nama"]+"</td>");
                          tr.append("<td>"+dprod["harga"]+"</td>");
                          tr.append("<td>"+dprod["deskripsi"]+"</td>");
                          tr.append("<td>"+dprod["is_asuransi"]+"</td>");
                          tr.append("<td>"+dprod["stok"]+"</td>");
                          tr.append("<td>"+dprod["is_baru"]+"</td>");
                          tr.append("<td>"+dprod["harga_grosir"]+"</td>");
                          tr.append("<td><a href='"+url+"ulasan/mantap/"+dprod["kode_produk"]+"' class='btn btn-primary btn-sm'>Beli</a></td>");
                          //$.each(obj,function(_,text) {
                          //  tr.append("<td>"+text+"</td>")
                          //});
                          tr.appendTo(tbody);
                      });
                     tbody.appendTo("#tlistproduk");
                }  
            });  
        });      
});

    function loadFormBeli(kodeproduk,harga)
    {
        $('#kodeproduk').val(kodeproduk);

        $('#harga').val(harga);

        //$('#nominal').val(nominal);
        $('#modalAddCart').modal('show');
    }


    $(document).ready(function () {  

        $('#katUtama').change(function () {  
            $.ajax({  
                type: "post",  
                url: url + "/shopping/getsubkategori/",  
                data: { katid: $('#katUtama').val() },  
                datatype: "json",  
                traditional: true,  
                success: function (data) {  
                    $("#subkat").empty(); 
                    //console.log(data);
                    var object = $.parseJSON(data);
                     $("#subkat").append('<option value="0">--Select--</option>');
                    $.each(object, function (_,dsub) {
                        //console.log(dprod["kode_produk"]);
                        $("#subkat").append('<option value="'+dsub["kode"]+'">'+dsub["nama"]+'</option>');
                      });
                    
                }  
            });  
        });  
    });  
</script> 
