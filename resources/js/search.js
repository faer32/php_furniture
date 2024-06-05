$(document).ready(function() {
    $('[name="query"]').on('input', function() {
        var query = $(this).val();
        var searchRoute = $('#searchResults').data('search-route');

        $.ajax({
            url: searchRoute,
            method: 'GET',
            data: { query: query },
            success: function(response) {
                var options = '';
                response.forEach(function(product) {
                    options += '<option value="' + product.name + '">' + product.name + '</option>';
                });
                $('#searchResults').html(options);
            }
        });
    });
})