(function ($) {

    $(function () {

        const iconSearch = $('.icon-search');
        const searchField = $('.search-field')

        iconSearch.on('click', function (event) {
            event.preventDefault();
            searchField.toggle().focus();
        })

        iconSearch.on('blur', function (event) {
            event.preventDefault();
            searchField.hide();
        })

    }); //end of doc ready

})(jQuery); // end of js file
