<?php
    if(isset($_GET["datum"])){
        $datum=$_GET["datum"];
        $nazivFajla = "../logs/" . $datum . "_log.txt";

        $datum = date_create($datum)->format("Y-m-d");
        $nazivFajla = "../logs/" . $datum . "_log.txt";
        
        $izlaz="";

        if(file_exists($nazivFajla)){
           
          $file = fopen($nazivFajla, "r");
          while(($red=fgets($file))!=null){
            $izlaz.=$red."<br>";
          }
          echo $izlaz;
        }
        else{
            echo "Podaci za taj datum ne postoje";
        }

    }
?>