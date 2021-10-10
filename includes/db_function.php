<!-- Burası global olarak kalacak ve sınıf oluşturulmayacak. Entity'lerin gerçekleştirilecek işlemleri bu dosya üzerinden yönetilecek. -->
<?php

require_once 'db.inc.php';
$db = new DBController();
require_once 'functions/entity_functions/unifunc.php';
$unifunc = new Unifunc($db);

function getPossitions(){
    return $GLOBALS['unifunc']->getPossitions();
}
function getDepartment($id){
    return $GLOBALS['unifunc']->getDepartment($id);
}
function getFaculty(){
    return $GLOBALS['unifunc']->getFaculty();
}
//Nesne oluşturma işlemleri gerçekleştirilecek ve nesnelerin fonksiyonları kullanılacak.