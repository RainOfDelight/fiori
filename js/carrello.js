$(document).ready(function() {
    $(".piu").click(function() {
        var valore= $(this).siblings(".numero").val();
        valore=parseInt(valore);
        var nuovovalore= valore+1;
        $(this).siblings(".numero").val(nuovovalore);
    });
    $(".meno").click(function() {
        var valore = $(this).siblings(".numero").val();
        valore = parseInt(valore);
        if (valore==0){var nuovovalore = valore;}
        else {
            var nuovovalore = valore - 1;
        }
        $(this).siblings(".numero").val(nuovovalore);
    });

    $(".totale_carrello")
});
