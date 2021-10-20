<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {
    // veri tabanı bağlantısı ve nesnesinin oluşturulması
    require_once 'db.inc.php';
    $db = new DBController();

    // loginfunc.php bağlantısı ve nesnesinin oluşturulması
    require_once 'functions/entity_functions/entryfunc.php';
    $entryfunc = new Entryfunc($db);

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
    $entryfunc->staffEntry($_POST['staffId']);
} else {
    header('location: ../../index.php');
    exit();
}