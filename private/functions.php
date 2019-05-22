<?php

function url_for($script_path){
    if($script_path[0] != '/'){
        $script_path = '/' . $script_path;
    }

    return WWW_ROOT . $script_path;
}

function u($url=""){
    return urlencode($url);
}

function raw_u($url=""){
    return rawurldecode($url);
}

function h($str=""){
    return htmlspecialchars($str);
}

function error_404(){
    header($_SERVER['SERVER_PROTOCOL'] . " 404 Not Found");
    exit;
}

function error_500(){
    header($_SERVER['SERVER_PROTOCOL'] . " 500 Internal Server Error");
    exit;
}

function redirect_to($location){
    header("Location: " . $location);
    exit;
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

?>
