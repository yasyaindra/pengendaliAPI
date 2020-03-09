$('#search-button').on('click', function () {
    $.ajax({
        url: 'http://www.omdbapi.com/?apikey=',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '6227b97',
            's': $('#search-input').val()
        },
        success: function (result) {
            console.log(result)
        }
    })
});