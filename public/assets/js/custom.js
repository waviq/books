/**
 * Created by waviq on 8/11/2016.
 */

$(document).ready(function () {
    $.fn.editable.defaults.params = function (params)
    {
        params._token = $("#_token").data("token");
        return params;
    };

    $.fn.editable.defaults.mode = 'inline';
    $('.title').editable({
        validate: function(value) {
            if($.trim(value) == '')
                return 'Value is required.';
        },
        type: 'text',
        url:'/book/editedTitle',
        title: 'Edit Status',
        placement: 'top',
        send:'always',
        ajaxOptions: {
            dataType: 'json'
        }
    });
    $('.author').editable({
        validate: function(value) {
            if($.trim(value) == '')
                return 'Value is required.';
        },
        type: 'text',
        url:'/book/editedAuthor',
        title: 'Edit Status',
        placement: 'top',
        send:'always',
        ajaxOptions: {
            dataType: 'json'
        }
    });
});
