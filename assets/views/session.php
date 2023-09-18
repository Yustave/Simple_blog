<?php
function setsession($key,$value){
    $_SESSION[$key] = $value;
};
function checksession($key){
    
    return isset($_SESSION[$key]);
};
function getsession($key){
    return $_SESSION[$key];
}
?>