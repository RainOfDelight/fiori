$(document).ready(function() {
    $(".piu").click(function() {
        var valore= $(this).siblings(".numero").val();
        valore=parseInt(valore);
        var nuovovalore= valore+1;
        $(this).siblings(".numero").val(nuovovalore);
    });
    $(".piu").click(function (){
        var prezzo=parseFloat($(this).parent().parent().find(".prezzo").text(),2);
        var quantita=parseInt($(this).parent().parent().find(".numero").val());
        $(this).parent().parent().find(".subtotale").text(parseFloat((prezzo*quantita).toString(),2));
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

    $(".meno").click(function (){
        var prezzo=parseFloat($(this).parent().parent().find(".prezzo").text(),2);
        var quantita=parseInt($(this).parent().parent().find(".numero").val());
        $(this).parent().parent().find(".subtotale").text(parseFloat((prezzo*quantita).toString(),2));
    });
});
