$(document).ready(function() {
    $("input[type='button").on("click", function(){
        let id = this.id;
        document.getElementById("id").value = id;
        document.getElementById('listaNoticias').submit();
    });
});