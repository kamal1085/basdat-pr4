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
<script src="<?php echo URL; ?>public/js/app.js"></script>
</body>
</html>
