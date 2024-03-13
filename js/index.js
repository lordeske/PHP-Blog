$(document).ready(function(){
    $("#btnLogovanje").click(function(){
        let email= $("#email").val();
        let lozinka= $("#lozinka").val();
        if(email=="" || lozinka==""){
            $("#greska").html("Enter All Data");
            return;
        }
        $.post("ajax/ajax_index.php",{email:email, lozinka:lozinka},function(response){
            if(response == "post.php"){
                window.location.href = response;
            } else {
                $("#greska").html(response);
            }
        })
    })
})