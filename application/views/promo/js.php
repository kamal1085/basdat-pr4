<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script>  
function getSubKategori()  
{  
		var kodeKategori = $("#kategori").val();
		$.ajax({
			  url: "promo/getSubKategoriList",
			  type: "post",
			  data: 'kategori='+kodeKategori,
			  success: function(data){
					$("#subkategori").html("");
					$("#subkategori").append($('<option value="" selected="selected" disabled>-- Pilih subkategori --</option>'))					
					$.each($.parseJSON(data), function(i, subkategori)  
					{  
						$("#subkategori").append($('<option></option>').val(subkategori.kode).html(subkategori.nama))  
					})       
			  },
			  error:function(){
				  alert("Whooaaa! Something went wrong..")
			  }   
			}); 
}  
</script>  
