$(document).ready(function() {
    $('#logout').click(function() {
        event.preventDefault();
        $.ajax({     
            type: $('#logout-form').attr('method'), 
            url: $('#logout-form').attr('action'),     
            data: $('#logout-form').submit()
        }); 
    });
});
