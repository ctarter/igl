<?php
    $file = fopen("names.txt", "r");
    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
?>
