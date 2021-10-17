<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {
    require_once 'db.inc.php';
    $db = new DBController();

    require_once 'functions/entity_functions/gatefunc.php';
    $gate = new Gatefunc($db);
    $gate->addGate($_POST['gatename']);
} else {
    header('location: ../../index.php');
    exit();
}