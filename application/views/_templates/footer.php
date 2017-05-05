<?php if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
} ?>

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "<?php echo URL_WITH_INDEX_FILE; ?>";
</script>

<!-- our JavaScript -->
<script src="<?php echo URL; ?>public/js/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    bookIndex = 0;

    $('#tokoForm').on('click', '.addButton', function() {
            bookIndex++;
            var $template = $('#JKTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('index', bookIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="toko_jk"]').attr('name', 'toko[' + bookIndex + '].jk').end();
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('index');

            // Remove element containing the fields
            $row.remove();
        });
        var urlw = "<?php echo URL; ?>";
        var path = urlw + window.location.pathname.substring(1);
        console.log(urlw);
$('.nav>li>a[href="' + path + '"]').parent().addClass('active');

});
</script>
</body>
</html>
