<?php

class User {

public $email;
public $psw;
public $name;

function __construct($email, $name, $psw) {
    $this->email = $email;
    $this->psw = $psw;
    $this->name = $name;
}
}

function login($name, $psw){
    $file = fopen('credenziali.json', 'r');
    $json = fread($file, filesize('credenziali.json'));
    $json = json_decode($json);
    foreach($json as &$value) {
        if ($name == $value->name && md5($psw) == $value->psw) {
            return true;
        }
    }
    return false;
}

function register($email, $name, $psw){
    $user = new User($email, $name, $psw);
    $file = fopen('credenziali.json', 'r');
    $json = fread($file, filesize('credenziali.json'));
    $json = json_decode($json);
        array_push($json, $user);
        $json = json_encode($json);
        file_put_contents('credenziali.json', $json);
        return true;
}

?>