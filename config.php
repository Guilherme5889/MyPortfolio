<?php
session_start();

define('URL', 'http://localhost/port/');
define('PROFILE_IMAGE', 'profile');

date_default_timezone_set("America/Sao_Paulo");

$autoload = function($classe){
    require_once 'classes/'.$classe.'.php';
};
spl_autoload_register($autoload);