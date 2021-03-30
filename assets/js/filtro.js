$(document).ready(function(){
    $('#lista').tablesorter(); 
    $("#filtro").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lista tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});