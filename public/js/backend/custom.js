$(document).ready(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        if ($(this).attr('show-loading') == 1) {
            showLoading();
        }
        $(this).off('submit').submit();
    });
});
