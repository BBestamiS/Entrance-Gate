<?php
require_once 'db.inc.php';
$db = new DBController();

require_once 'functions/form_functions/signupfunc.php';

$signup = new Signup($db);

adminRegister();

function adminRegister(){
    $GLOBALS['signup']->adminRegister("admin@inonu.tr", "a");
}