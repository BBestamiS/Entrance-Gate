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
function getStaff($id){
    return $GLOBALS['personfunc']->getStaff($id);
}
function getStaffs(){
    return $GLOBALS['personfunc']->getStaffs();
}
function getGuest($id){
    return $GLOBALS['personfunc']->getGuest($id);
}
function getGuests(){
    return $GLOBALS['personfunc']->getGuests();
}
function getWaitingUsers(){
    return $GLOBALS['personfunc']->getWaitingUsers();
}
function updateConfirmation($id, $status){
     $GLOBALS['personfunc']->updateConfirmation($id, $status);
}
function getGuestConfirmation($id){
  
     return $GLOBALS['personfunc']->getGuestConfirmation($id);
}
function getStaffEntryConfirmation($id){
  
     return $GLOBALS['personfunc']->getStaffEntryConfirmation($id);
}
function getStaffConfirmation($id){
     return $GLOBALS['personfunc']->getStaffConfirmation($id);
}


function getGates(){
    return $GLOBALS['gatefunc']->getGates();
}
function getSecurity($id){
    return $GLOBALS['gatefunc']->getSecurity($id);
}
function getGate($id){
    return $GLOBALS['gatefunc']->getGate($id);
}
function getGateConfirmation($id){
    return $GLOBALS['gatefunc']->getGateConfirmation($id);
}
function getVehiclesInfo(){
    return $GLOBALS['gatefunc']->getVehiclesInfo();
}
function getGateInfo($gateId){
    return $GLOBALS['gatefunc']->getGateInfo($gateId);
}
function getGateStaffInfo($gateId){
    return $GLOBALS['gatefunc']->getGateStaffInfo($gateId);
}
function getGateGuestInfo($gateId){
    return $GLOBALS['gatefunc']->getGateGuestInfo($gateId);
}
function getStaffInfo($id){
    return $GLOBALS['gatefunc']->getStaffInfo($id);
}
function getGuestInfo($id){
    return $GLOBALS['gatefunc']->getGuestInfo($id);
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