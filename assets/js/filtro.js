$(document).ready(function(){
    $("#filtro").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#lista tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
function filterByDate(año, mes, dia){
    if(mes<10) mes = "0"+mes;
    if(dia<10) dia = "0"+dia;
    fecha = año+"-"+mes+"-"+dia;
    $("#lista tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(fecha) > -1);
    });
}