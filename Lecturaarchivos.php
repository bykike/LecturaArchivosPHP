<?php

    # Funciones para lectura de archivos en php.

    # 1. fgets

    $fp = fopen("miarchivo.txt", "r");
    while (!feof($fp)){
        $linea = fgets($fp);
        echo $linea;
    }
    fclose($fp);

?>