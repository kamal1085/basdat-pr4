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
            $clone.find('[name="toko_jk"]').attr('name', 'toko[' + count + '].jk').end();
        })
    });
</script>
