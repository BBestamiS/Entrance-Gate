<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {

    require_once 'db.inc.php';
    $db = new DBController();

    require_once 'functions/entity_functions/securityfunc.php';
    $securityfunc = new Securityfunc($db);
    
    require_once 'entity/security.php';
    $security = new Security();
    if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['hashed_password'])){
        header("location: ../main.php?id=" . $_POST['gate_id'] ."&error=emptyForm");
        exit();
    }
    
    if ($securityfunc->invalidName($_POST['name']) !== true) {
        header("location: ../main.php?id=" . $_POST['gate_id'] ."&error=invalidName");
        exit();
    }
    if ($securityfunc->invalidSurName($_POST['surname']) !== true) {
        header("location: ../main.php?id=" . $_POST['gate_id'] ."&error=invalidSurName");
        exit();
    }
  
    if ($securityfunc->invalidEmail($_POST['email']) !== true) {
        header("location: ../main.php?id=" . $_POST['gate_id'] ."&error=invalidEmail");
        exit();
    }
   
    if ($securityfunc->emailExists($db->get_conn(), $_POST['email'],$_POST['gate_id']) !== true) {
        header("location: ../main.php?id=" . $_POST['gate_id'] ."&error=epostataken");
        exit();
    }
   
    $security->set_name($_POST['name']);
    $security->set_surname($_POST['surname']);
    
    $security->set_email($_POST['email']);
    
    $security->set_hashed_password($_POST['hashed_password']);
    
    $security->set_gate_id($_POST['gate_id']);
    
    $securityfunc->addSecurity($security);

} else {
    header('location: ../../index.php');
    exit();
}