function changeColor(color){
    $("#middle").css('background-color', color);
}

$(document).ready(function() {
    $("#middle").mouseover(function () {
        changeColor('pink');
    });
    $("#middle").mouseout(function () {
        changeColor('violet');
    });
});