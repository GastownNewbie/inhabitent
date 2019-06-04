(function ($) {

    $(function ($) {

        $('.search-submit').on('click', function (event) {
            event.preventDefault();
            $('.search-field').toggle().focus();
        })
        $('.search-field').on('blur', function (event) {
            event.preventDefault();
            $('.search-field').hide();
        })

    }); //end of doc ready

})(jQuery); // end of js file
