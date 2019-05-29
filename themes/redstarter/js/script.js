(function ($) {

    $('.search-submit').on('click', function (event) {
        event.preventDefault();
        $('.search-field').toggle().focus();
    })
    $('.search-field').on('blur', function (event) {
        event.preventDefault();
        $('.search-field').hide();
    })

})(jQuery); // end of js file
