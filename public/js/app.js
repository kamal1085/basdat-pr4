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
