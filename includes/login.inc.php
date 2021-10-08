<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {
    // veri tabanı bağlantısı ve nesnesinin oluşturulması
    require_once 'db.inc.php';
    $db = new DBController();

    // loginfunc.php bağlantısı ve nesnesinin oluşturulması
    require_once 'functions/form_functions/loginfunc.php';
    $login = new login($db);

    // user nesnesinin oluşturulması
    require_once 'entity/persons.php';
    $persons = new persons();

    // atama işlemleri
    $persons->set_email($_POST['email']);
    $persons->set_hashed_password($_POST['hashed_password']);


    if (
        $login->emptyInputLogin($persons->get_email(), $persons->get_hashed_password()) !== true
    ) {
        header("location: ../index.php?error=emptyinput&page=login");
        exit();
    }
    if ($login->invalidEmail($persons->get_email()) !== true) {
        header("location: ../index.php?error=invalidEmail&page=login");
        exit();
    }
    $login->login($persons->get_email(), $persons->get_hashed_password());
} else {
    header('location: ../../index.php');
    exit();
}