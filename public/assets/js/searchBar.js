$('#myModal').on('keyup', function () {
    $value1 = $(this).val();
    $value2 = $('.filter[name="filter"]:checked').val()
    $.ajax({
        type: 'get',
        url: 'site/search',
        data: { 'search': $value1  , 'filter':$value2},
        success: function (data) {
            $('#searchResults').html(data);
        },
        error: function (xhr, status, error) {
            // Display an error message

            $('#message').text('Search failed: ' + error);
        }
    });
})

$.ajaxSetup({ headers: { 'csrftoken': '{{ csrf_token() }}' } });
