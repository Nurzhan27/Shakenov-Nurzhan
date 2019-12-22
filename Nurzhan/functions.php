<?php

function get_POST_data($key){

    if(isset($_POST[$key])){
        return $_POST[$key];
    }
    return false;

}

function login_required(){

    return isset($_SESSION['user']);

}