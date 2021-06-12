$(document).ready(function() {
    $(":button").click(function(){
        $(this).prev().prop('disabled', false);
    });
    $(".salva").click(function(){
        var nome = $(this).parent().find(".input_nome").val();
        var prezzo = $(this).parent().find(".input_prezzo").val();
        var descrizione = $(this).parent().find(".input_descrizione").val();
        var immagine = $(this).parent().parent().find(".fileToUpload")[0].files[0];
        var id = $(this).parent().find(".id").val();
        var fd = new FormData();
        fd.append('nome', nome);
        fd.append("ciao", prezzo);
        fd.append("andrei", descrizione);
        if(typeof immagine!=='undefined') {
            fd.append("francesco", immagine);
        }
        fd.append("id", id);
        fd.append("azione", "modifica");

        $.ajax({
            url: 'modifica.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
            }
        });
    });

    $(".inserisci").click(function(){
        var nome = $(this).parent().find(".input_nome").val();
        var prezzo = $(this).parent().find(".input_prezzo").val();
        var descrizione = $(this).parent().find(".input_descrizione").val();
        var immagine = $(this).parent().parent().find(".fileToUpload")[0].files[0];
        var fd = new FormData();
        fd.append("nome", nome)
        fd.append("prezzo", prezzo);
        fd.append("descrizione", descrizione);
        if(typeof immagine!=='undefined') {
            fd.append("immagine", immagine);
        }
        fd.append("azione", "inserisci");
        $.ajax({
            url: 'modifica.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
            }
        });
    });
});