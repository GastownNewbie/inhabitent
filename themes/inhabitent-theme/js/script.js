(function ($) {

    $(function () {

        $('.icon-search').on('click', function (event) {
            event.preventDefault();
            $('.search-field').toggle().focus();
        })
        $('.icon-search').on('blur', function (event) {
            event.preventDefault();
            $('.search-field').hide();
        })

    }); //end of doc ready

})(jQuery); // end of js file
