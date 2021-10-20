<?php
include_once 'header.php';
session_start();
if(isset($_SESSION['id'])){
    if($_SESSION['user_possition'] == 0){
        include_once 'person.php';
    } elseif ($_SESSION['user_possition'] == 1) {
        include_once 'securityPage/security.php';
    }  elseif ($_SESSION['user_possition'] == 2) {
        include_once 'adminPage/admin.php';
    } else {
        echo '<h1>Hatalı Giriş</h1>';
    }
}else{
    header('location: ./index.php');
}
include_once 'footer.php'; 
?>