<?php
    if(isset($_GET["idKorisnika"])){
        $idKorisnika=$_GET["idKorisnika"];
        $db=mysqli_connect("localhost","root","","pva_k2");
        mysqli_query($db,"SET NAMES utf8");

        $upit="SELECT p.id,p.post,p.idKorisnika,p.vremeK,p.vremeI,k.ime,k.prezime FROM korisnici k,postovi p WHERE k.id=p.idKorisnika ORDER BY p.vremeK DESC";
        $rez=mysqli_query($db,$upit);
        $odgovor=mysqli_fetch_all($rez,MYSQLI_ASSOC);
        echo JSON_encode($odgovor,256);

        mysqli_close($db);
    }
    if(isset($_GET["funkcija"])){
        if($_GET["funkcija"]=="dodavanje"){
            if(isset($_POST["idKorisnika"]) && isset($_POST["tekstPosta"])){
                $idKorisnika=$_POST["idKorisnika"];
                $tekstPosta=$_POST["tekstPosta"];
                $db=mysqli_connect("localhost","root","","pva_k2");
                mysqli_query($db,"SET NAMES utf8");
        
                $upit="INSERT INTO postovi(idKorisnika,post) VALUES ($idKorisnika,'$tekstPosta')";
                $rez=mysqli_query($db,$upit);

                $noviId = mysqli_insert_id($db);
                require_once("../funkcija_log.php");
                session_start();
                loguj("../logs/","Kreiranje novog posta sa id=".$noviId." od strane korisnika '".$_SESSION["email"]."'");

                echo "Uspesno dodat post";
                
        
                mysqli_close($db);
            }
        }
        if($_GET["funkcija"]=="brisanje"){
            if(isset($_POST["idPosta"])){
                $idPosta=$_POST["idPosta"];
               
                $db=mysqli_connect("localhost","root","","pvaklk2rt");
                mysqli_query($db,"SET NAMES utf8");
        
                $upit="DELETE FROM postovi WHERE id=$idPosta";
                $rez=mysqli_query($db,$upit);
                echo "Uspesno obrisan post";
        
                mysqli_close($db);
            }
        }
    }
    
    
?>