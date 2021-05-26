$(document).ready(function() {
    $(":button").click(function(){
        $(this).prev().prop('disabled', false);
    });
});