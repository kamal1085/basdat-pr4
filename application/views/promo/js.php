<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script>
function getSubKategori(val) {
	$.ajax({
	type: "POST",
	url: "/promo/getSubKategoriList",
	data:'kategori='+val,
	success: function(data){
		$("#subkategori").html(data);
	}
	});
}
</script>
