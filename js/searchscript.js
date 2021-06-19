$(document).ready(function() {

    $(".compra").click(function(){

        var id = $(this).attr("data-prodotto_id");
        var quantita = $(this).parent().parent().find(".numero").val();
        console.log(typeof (id), typeof (quantita));
        $.ajax({
            url: "compra.php?ID=" + id + "&quantita=" + quantita, //you can also pass get parameters
            dataType: 'json',    //dataType you expect in the response from the server
            timeout: 2000
        }).done(function (data, textStatus, jqXHR) {
            alert("è andato tutto bene");
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log("jqXHR:" + jqXHR);
            console.log("TestStatus: " + textStatus);
            console.log("ErrorThrown: " + errorThrown);
        });

    });
    $(".piu").click(function() {
        var valore= $(this).siblings(".numero").val();
        valore=parseInt(valore);
        if(Number.isNaN(valore)){
            valore=0;
        }
        var nuovovalore= valore+1;
        $(this).siblings(".numero").val(nuovovalore);
    });
    $(".meno").click(function() {
        var valore = $(this).siblings(".numero").val();
        valore = parseInt(valore);
        if(Number.isNaN(valore)){
            valore=0;
        }
        if (valore==0){var nuovovalore = valore;}
        else {
            var nuovovalore = valore - 1;
        }
        $(this).siblings(".numero").val(nuovovalore);
    });
});