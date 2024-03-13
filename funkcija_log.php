<?php
  function loguj($putanja, $tekst){
    $tekst = $tekst . "\n";
    $datum = date_create();
    $datumStr = date_create()->format("Y-m-d");
    $vreme = $datum->format("H:i:s");
    $tekst = $vreme . " - " . $tekst;

    $nazivFajla = "$putanja" . $datumStr . "_log.txt";
    
    $file = fopen($nazivFajla, "a");
    fwrite($file, $tekst);
    fclose($file);
  }
?>