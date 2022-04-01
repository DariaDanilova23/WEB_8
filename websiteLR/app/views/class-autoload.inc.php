<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    echo'load';
    $path='app/models/';
    $extention='.class.php';
    $fileName= $path.$className . $extention;
        echo $fileName;
    include_once $fileName;
}

