<?php

$recDir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("C:\OpenServer\domains\DeskAlgArchPattPHP\lesson8/task1"));

foreach ($recDir as $file) {
    echo "---" . $file. "<br>";
}