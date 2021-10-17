<!-- Burası global olarak kalacak ve sınıf oluşturulmayacak. Entity'lerin gerçekleştirilecek işlemleri bu dosya üzerinden yönetilecek. -->
<?php

require_once 'db.inc.php';
$db = new DBController();
require_once 'functions/entity_functions/unifunc.php';
$unifunc = new Unifunc($db);
require_once 'functions/entity_functions/personfunc.php';
$personfunc = new Personfunc($db);
require_once 'functions/entity_functions/gatefunc.php';
$gatefunc = new Gatefunc($db);

function getUserPossition($id){
    return $GLOBALS['personfunc']->getUserPossition($id);
}
function getUserDepartment($id){
    return $GLOBALS['personfunc']->getUserDepartment($id);
}
function getUserFaculty($id){
    return $GLOBALS['personfunc']->getUserFaculty($id);
}
function getWaitingUsers(){
    return $GLOBALS['personfunc']->getWaitingUsers();
}
function updateConfirmation($id, $status){
     $GLOBALS['personfunc']->updateConfirmation($id, $status);
}


function getGate(){
    return $GLOBALS['gatefunc']->getGate();
}


function getPossitions(){
    return $GLOBALS['unifunc']->getPossitions();
}
function getDepartments($id){
    return $GLOBALS['unifunc']->getDepartments($id);
}
function getFacultys(){
    return $GLOBALS['unifunc']->getFacultys();
}
//Nesne oluşturma işlemleri gerçekleştirilecek ve nesnelerin fonksiyonları kullanılacak.