<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {
    // veri tabanı bağlantısı ve nesnesinin oluşturulması
    require_once 'db.inc.php';
    $db = new DBController();

    // loginfunc.php bağlantısı ve nesnesinin oluşturulması
    require_once 'functions/entity_functions/entryfunc.php';
    $entryfunc = new Entryfunc($db);
    
    require_once 'functions/entity_functions/securityfunc.php';
    $securityfunc = new Securityfunc($db);

    if($_POST['possition'] == "staff"){
        if($_POST['section'] == "1"){
            if(empty($_POST['staffId'])){
                header("location: ../main.php?selection=staff&error=emptyId");
                exit();
            }
            if($entryfunc->invalidId($_POST['staffId']) !== true){
                header("location: ../main.php?selection=staff&error=invalidId");
                exit();
            }
            
            if ($entryfunc->idConfirmation($_POST['staffId']) !== true) {
                header("location: ../main.php?selection=staff&error=notFoundId");
                exit();
            }
            header('location: ../main.php?selection=staff&id=' . $_POST['staffId']);
            exit();
        }elseif ($_POST['section'] == "2") {
            if($entryfunc->invalidId($_POST['staffId']) !== true){
                header("location: ../main.php?selection=staff&error=invalidId");
                exit();
            }
            if ($entryfunc->idConfirmation($_POST['staffId']) !== true) {
                header("location: ../main.php?selection=staff&error=notFoundId");
                exit();
            }
            session_start();
            $security = $securityfunc->getSecurity($_SESSION['id']);
            $entryfunc->staffEntry($_POST['staffId'],$security->gate_id ,$_SESSION['id'] );
        }
        
    } elseif ($_POST['possition'] == "guest") {
        if(empty($_POST['name']) && empty($_POST['surname']) && empty($_POST['plateleft']) && empty($_POST['platecenter']) && empty($_POST['plateright'])){
            header("location: ../main.php?selection=guest&error=emptyInput");
            exit();
        }
        if ($entryfunc->invalidName($_POST['name']) !== true) {
            header("location: ../main.php?selection=guest&error=invalidName");
            exit();
        }
        if ($entryfunc->invalidSurName($_POST['surname']) !== true) {
            header("location: ../main.php?selection=guest&error=invalidSurName");
            exit();
        }
        if ($entryfunc->invalidPlate($_POST['plateleft'], $_POST['platecenter'], $_POST['plateright']) !== true) {
            header("location: ../main.php?selection=guest&error=invalidPlate");
            exit();
        }
        $plate = strtolower($_POST['plateleft'] . " " . $_POST['platecenter'] . " " . $_POST['plateright']);
        session_start();
        $security = $securityfunc->getSecurity($_SESSION['id']);
        $entryfunc->guestEntry($_POST['name'],$_POST['surname'], $plate, $security->gate_id ,$_SESSION['id']);
        
    } elseif ($_POST['possition'] == "exit") {
        if(empty($_POST['plateleft']) && empty($_POST['platecenter']) && empty($_POST['plateright'])){
            header("location: ../main.php?selection=exit&error=emptyInput");
            exit();
        }
        
        if ($entryfunc->noFoundPlate($_POST['plateleft'], $_POST['platecenter'], $_POST['plateright']) !== true) {
            header("location: ../main.php?selection=exit&error=invalidPlate");
            exit();
        }
        $plate = strtolower($_POST['plateleft'] . " " . $_POST['platecenter'] . " " . $_POST['plateright']);
        session_start();
        $security = $securityfunc->getSecurity($_SESSION['id']);
        $entryfunc->exitGate($plate, $security->gate_id ,$_SESSION['id']);
        
    }elseif ($_POST['possition'] == "update") {
        if(empty($_POST['plateleft']) && empty($_POST['platecenter']) && empty($_POST['plateright'])){
            header("location: ../main.php?selection=exit&error=emptyInput");
            exit();
        }
        
        if ($entryfunc->noFoundPlate($_POST['plateleft'], $_POST['platecenter'], $_POST['plateright']) == true) {
            header("location: ../main.php?selection=exit&error=invalidPlate");
            exit();
        }
        $plate = strtolower($_POST['plateleft'] . " " . $_POST['platecenter'] . " " . $_POST['plateright']);
        session_start();
        $entryfunc->updatePlate($plate,$_SESSION['id']);
        
    }
    else{
        header('location: ../../index.php');
        exit();
    }
} else {
    header('location: ../../index.php');
    exit();
}