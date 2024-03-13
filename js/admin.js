$(document).ready(function(){
    $("#btnPrikazi").click(function(){
        let datum = $("#inputDatum").val()
        $.get("ajax/ajax_admin.php",{datum:datum},function(response){
            $("#divLogovi").html(response);
        })
       
    })
})
