$(document).ready(function() {

    $(".compra").click(function(){
        var id = $(this).attr("data-prodotto_id");
        $.ajax({
            url: "compra.php?ID=" + id + "&quantita=1", //you can also pass get parameters
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
});