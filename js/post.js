$(document).ready(function(){
    sviPostovi=[];
    idKorisnika= $("#idKorisnika").html();
    prikaziPostove();
    $("#snimiPost").click(function(){
        let tekstPosta = $("#tekstPosta").val();
        $.post("ajax/ajax_post.php?funkcija=dodavanje",{idKorisnika:idKorisnika, tekstPosta:tekstPosta},function(response){
            //alert(response);
            prikaziPostove();
        })
    })
    $("#divPostovi").on("click", ".dugmeObrisi", function(){
        let idPosta=$(this).parent().attr('id');
        $.post("ajax/ajax_post.php?funkcija=brisanje",{idPosta:idPosta},function(response){
            //alert(response);
            prikaziPostove();
        })
    })
    
})

function prikaziPostove(){
    $.get("ajax/ajax_post.php",{idKorisnika:idKorisnika},function(response){
        sviPostovi=JSON.parse(response);
        console.log(response);
        let izlaz="";
        for(let i=0; i<sviPostovi.length;i++){
            izlaz+=`<div class="card bg-light mb-3 p-3" id="${sviPostovi[i].id}">
                            <p>${sviPostovi[i].vremeK}</p>
                            <p>${sviPostovi[i].post}</p>
                            <p>${sviPostovi[i].ime} ${sviPostovi[i].prezime}</p>`;
            if(sviPostovi[i].idKorisnika==idKorisnika){
                izlaz+="<button class='btn btn-danger dugmeObrisi' style='width:100px'>Obriši</button>";
            }
            izlaz+="</div>";
        }
        $("#divPostovi").html(izlaz);
    })
}