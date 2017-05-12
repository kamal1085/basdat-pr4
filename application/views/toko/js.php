<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script>
    $(document).ready(function () {
        count = 0;

        $('#tokoForm').on('click', '.addButton', function () {
            count++;
            var $template = $('#JKTemplate'),
                $clone = $template
                    .clone()
                    .removeClass('hide')
                    .removeAttr('id')
                    .attr('index', count)
                    .insertBefore($template);

            // Update the name attributes
			$clone.find('[id="label"]').text('Jasa Kirim ' + (count + 1)).end();
            $clone.find('[name="name[]"]').attr('id', 'select' + count).end();
        })
    });
	
	(function ($) { 
 
		var form = $('#tokoForm').parent(); 
	 
		form.submit(function (event) { 
	 
		  event.preventDefault(); 
	 
		  var selected = {}, 
			errors = []; 
	 
		  form.find('option:selected').each(function (index, elem) { 
	 
			var val = $(elem).val().trim(); 
	 
			if (! selected[val]) { 
			  selected[val] = 1; 
			  return; 
	 
			} else if (selected[val] == 1) { 
	 
			  errors.push('Jasa kirim harus diisi dan unik'); 
			} 
	 
			selected[val] += 1; 
		  }); 
	 
		  if (errors.length) { 
			alert(errors.join("\n")); 
			return; 
		  } 
	 
		  form.submit(); 
		}); 
	 
	  }) (jQuery);
</script>
