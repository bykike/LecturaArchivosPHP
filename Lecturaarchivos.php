<?php

    # Funciones para lectura de archivos en php.

    # 1. fgets

    $fp = fopen("miarchivo.txt", "r");
    while (!feof($fp)){
        $linea = fgets($fp);
        echo $linea . "<br>";
    }
    fclose($fp);


    # 2. fread

    $fp = fopen("miarchivo.txt", "rb");
    $datos = fread($fp, filesize("miarchivo.txt"));
    echo $datos . "<br>";
    fclose($fp);


    
    # 2. fscanf

    $fp = fopen("miarchivo.txt", "r");
    while ($animalinfo = fscanf($fp, "%s\t%s")){
        list($animal, $nombre) = $animalinfo;
        echo "El " . $animalinfo[0] . " se llama {$animalinfo[1]} <br>";
    }
    fclose($fp);

?>