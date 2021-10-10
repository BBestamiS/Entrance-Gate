<!-- Bu kısım, formlardan gelen $_POST değerlerini değişkene atayacağımız kısım. -->
<?php

if (isset($_POST['submit'])) {
    // veri tabanı bağlantısı ve nesnesinin oluşturulması
    require_once 'db.inc.php';
    $db = new DBController();

    // loginfunc.php bağlantısı ve nesnesinin oluşturulması
    require_once 'functions/form_functions/signupfunc.php';
    $signup = new Signup($db);

    // user nesnesinin oluşturulması
    require_once 'entity/persons.php';
    $person = new Persons();

    // atama işlemleri
    if($_POST['section'] == '1' ){
        
        if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['hashed_password']) || empty($_POST['plateleft']) || empty($_POST['platecenter']) || empty($_POST['plateright'])){
            header("location: ../index.php?page=register&section=1&error=emptyForm");
            exit();
        }
        
        if ($signup->invalidName($_POST['name']) !== true) {
            header("location: ../index.php?page=register&section=1&error=invalidName");
            exit();
        }
        if ($signup->invalidSurName($_POST['surname']) !== true) {
            header("location: ../index.php?page=register&section=1&error=invalidSurName");
            exit();
        }
        if ($signup->invalidEmail($_POST['email']) !== true) {
            header("location: ../index.php?page=register&section=1&error=invalidEmail");
            exit();
        }
        if ($signup->emailExists($db->get_conn(), $_POST['email']) !== true) {
            header("location: ../index.php?page=register&section=1&error=epostataken");
            exit();
        }
        if ($signup->invalidPlate($_POST['plateleft'], $_POST['platecenter'], $_POST['plateright']) !== true) {
            header("location: ../index.php?page=register&section=1&error=invalidPlate");
            exit();
        }
        session_start();
        $_SESSION["plate"] = $_POST['plateleft'] . " " . $_POST['platecenter'] . " " . $_POST['plateright'];
        $_SESSION["name"] = $_POST['name'];
        $_SESSION["surname"] = $_POST['surname'];
        $_SESSION["password"] = $_POST['hashed_password'];
        $_SESSION["email"] = $_POST['email'];
        header("location: ../index.php?page=register&section=2");
        exit();
    }
    elseif($_POST['section'] == '2' ){
        if(empty($_POST['selection'])){
            header("location: ../index.php?page=register&section=2&error=emptyForm");
            exit();
        }
        if ($signup->invalidSelectPossition($_POST['selection']) !== true) {
            header("location: ../index.php?page=register&section=2&error=invalidSelect");
            exit();
        }
        session_start();
        $_SESSION["possition_id"] = $_POST['selection'];
        header("location: ../index.php?page=register&section=3");
        exit();
    }
    elseif($_POST['section'] == '3' ){
        if(empty($_POST['selection'])){
            header("location: ../index.php?page=register&section=3&error=emptyForm");
            exit();
        }
        if ($signup->invalidSelectFaculty($_POST['selection']) !== true) {
            header("location: ../index.php?page=register&section=3&error=invalidSelect");
            exit();
        }
        session_start();
        $_SESSION["faculty_id"] = $_POST['selection'];
        header("location: ../index.php?page=register&section=4");
        exit();
    }
    elseif($_POST['section'] == '4' ){
        if(empty($_POST['selection'])){
            header("location: ../index.php?page=register&section=4&error=emptyForm");
            exit();
        }
        if ($signup->invalidSelectDepartment($_POST['selection']) !== true) {
            header("location: ../index.php?page=register&section=3&error=invalidSelect");
            exit();
        }
        session_start();
        $_SESSION["department_id"] = $_POST['selection'];
        $person->set_plate($_SESSION["plate"]);
        $person->set_name($_SESSION["name"]);
        $person->set_surname($_SESSION["surname"]);
        $person->set_hashed_password($_SESSION["password"]);
        $person->set_email($_SESSION["email"]);
        $person->set_possition_id($_SESSION["possition_id"]);
        $person->set_faculty_id($_SESSION["faculty_id"]);
        $person->set_department_id($_SESSION["department_id"]);
        $person->set_user_possition("0");
        session_unset();
        session_destroy();
        $signup->personRegister($person);
        header("location: ../index.php?signup=success");
        exit();
    }
}
else {
    header('location: ../index.php');
    exit();
}