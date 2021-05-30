<?php

require_once '../config.php';

ob_start();
if(isset($_SESSION['login'])){
    include('dashboard.php');
}else{
    include('login.php');
}
ob_end_flush();


