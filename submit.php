<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $file = fopen("names.txt", "a");
    fwrite($file, $fname . " " . $lname . "\n");
    fclose($file);
    header("Location: pray1.html");
?>
