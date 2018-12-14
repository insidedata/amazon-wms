<?php 

set_include_path(get_include_path() . PATH_SEPARATOR . '../../.');

function amazonAutoload($className) {

    $filePath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $includePaths = explode(PATH_SEPARATOR, __DIR__ . '/');

    foreach ($includePaths as $includePath) {
        if (file_exists($includePath . '/' . $filePath)) {
            require_once $includePath . '/' . $filePath;
            return;
        } 
    }
    
}