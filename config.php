<?php
    $folderPath=$_SERVER['SCRIPT_NAME'];
    $urlPath=$_SERVER['REQUEST_URI'];
    $url= $urlPath;

    // echo '<pre>';
    // var_dump($_SERVER);
    // echo '</pre>';

    echo '<br>---- folderPath :'.$folderPath;
    echo '<br>---- urlPath :'.$urlPath;
    echo '<br>---- url :'.$url;
    echo '<br>---- ';

    define('URL', $url);
    