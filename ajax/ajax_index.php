<?php
    if(isset($_POST["email"]) && isset($_POST["lozinka"])){
        $email=$_POST["email"];
        $lozinka=$_POST["lozinka"];
        
        $db=mysqli_connect("localhost","root","","pva_k2");
        @mysqli_query($db,"SET NAMES utf8");
        $upit="SELECT * FROM korisnici WHERE email='$email' AND lozinka='$lozinka'";
        $rez=mysqli_query($db,$upit);
        $brRedova=mysqli_num_rows($rez);
        if($brRedova==1){
            $korisnik=mysqli_fetch_assoc($rez);
            session_start();
            $_SESSION["id"]=$korisnik["id"];
            $_SESSION["ime"]=$korisnik["ime"];
            $_SESSION["prezime"]=$korisnik["prezime"];
            $_SESSION["email"]=$korisnik["email"];
            $_SESSION["status"]=$korisnik["status"];
            require_once("../funkcija_log.php");
            loguj("../logs/","Prijava korisnika '".$korisnik["email"]."'");
            echo "post.php";
        }
        else if($brRedova<1){
            echo "Pogrešno unet email ili lozinka";
        }
        else if($brRedova>1){
            echo "Greška na serveru. Molimo sačekajte dok ne rešimo problem.";
        }

        mysqli_close($db);
    }
    

?>