<?php 
    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    if(!isset($_SESSION)) {
        session_start();
    }
    
    include_once "classes/DB.php";
    include_once "classes/filter.php";

    $con = DB::getConnection();
?>