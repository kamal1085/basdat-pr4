<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>
<script>
    $(document).ready(function () {
        count = 0;

        $('#category_form').on('click', '.add-subcategory', function () {
            count++;
            var $template = $('#subcategory_template'),
                $clone = $template
                    .clone()
                    .removeClass('hide')
                    .removeAttr('id')
                    .attr('index', count)
                    .insertBefore($template);

            // Update the name attributes
            $clone.find('[id="label"]').text('Sub kategori ' + (count + 1) + ':').end();
            $clone.find('[name="subcategory_code"]').attr('name', 'subcategory_code[' + count + ']').end();
            $clone.find('[name="subcategory_name"]').attr('name', 'subcategory_name[' + count + ']').end();
        })
    });
</script>
