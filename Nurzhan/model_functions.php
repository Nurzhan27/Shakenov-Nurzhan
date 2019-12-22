<?php
include "SETTINGS.php";

define('USER_TABLE' ,'user');
define('ORDER_TABLE' ,'orders');
define('CINEMA_TABLE' ,'cinema');
define('PRICE_TABLE', 'prices');

$db = new mysqli($DB_SERVER, $DB_ACC['login'], $DB_ACC['password'], $DB_NAME);

if($db->connect_error){
    echo 'CONNECTION ERROR';
    exit();
}

function get_cinema($id, $db){

    $sql = "SELECT * FROM ". CINEMA_TABLE." WHERE cinema_id = $id";


    $res = $db->query($sql);

    if(!$res) return false;

    return $res->fetch_assoc();


}


function get_user($login, $db){

    $sql = "SELECT * FROM ".USER_TABLE." WHERE login='$login'";

    $user = $db->query($sql);

    if(!$user) return false;

    return $user->fetch_assoc();
}

function get_cinema_all($db){

    $sql = "SELECT * FROM ".CINEMA_TABLE;

    $res = $db->query($sql);

    if(!$res) return false;

    $cinemas = array();

    while($row = $res->fetch_assoc()){

        $cinemas[] = $row;

    }

    return $cinemas;

}


function update_user_password($id, $new, $db){

    $sql = "UPDATE ".USER_TABLE." SET password='$new' WHERE user_id=$id";

    $res = $db->query($sql);

    if(!$res) return false;

    return true;

}

function insert_user($data, $db){

    $sql = "INSERT INTO " .USER_TABLE. " (`login`, `full_name`, `password`, `email`) VALUES ('$data[login]','$data[full_name]','$data[password]','$data[email]') ";


    $res = $db->query($sql);

    return $res;

}

function insert_order($user_id, $cinema_id, $theatr_id, $db){

    $sql = "INSERT INTO " .ORDER_TABLE. " (`cinema_id`, `theatr_id`, `user_id`) VALUES ($user_id, $cinema_id,$theatr_id) ";



    $res = $db->query($sql);

    return $res;

}


function get_cinema_prices($cinema_id, $db){

    $sql = "SELECT * FROM prices INNER JOIN hotel ON hotel.theatr_id = prices.theatr_id WHERE cinema_id=$cinema_id";

    $res = $db->query($sql);

    $theatrs = array();

    while($row = $res->fetch_assoc()){

        $theatrs[] = $row;

    }

    return $theatrs;

}
