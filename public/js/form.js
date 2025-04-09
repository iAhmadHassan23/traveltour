$(function(){
    $('body').on('input', '#title', function() {
        var inputValue = $('#title').val();
        var slug = convertToSlug(inputValue);
        $('#slug').val(slug);
        // You can do whatever you want with the slug here
    });

    function convertToSlug(text) {
        return text
            .toLowerCase()
            .replace(/ /g, '-')         // Replace spaces with -
            .replace(/[^\w-]+/g, '')    // Remove all non-word characters
            .replace(/--+/g, '-')       // Replace multiple - with single -
            .replace(/^-+|-+$/g, '');  // Trim - from both ends
    }
});
