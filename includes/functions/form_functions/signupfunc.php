<!-- Bu dosya, signup.inc.php dosyasına gelen verilerin işleme tabi tutulacağı ve bu işlemlerin yazıldığı fonksiyonların bulunduğu dosyadır. -->

<?php

class Signup
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if($db->get_conn() === null){
            return null;
        }
        $this->db = $db;
    }

    // Veri tabanı fonksiyonları bundan sonra yazılacak.

    // public function adminRegister($email, $password)
    // {
        
    //     $sql = "INSERT INTO admin (email, hashed_password) VALUES (?, ?);";
        
    //     $stmt = mysqli_stmt_init($this->db->get_conn());
    //     if (!mysqli_stmt_prepare($stmt, $sql)) {
    //         header("location: ../index.php?error=stmtfailed");
    //         exit();
    //     }
    //     $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    //     mysqli_stmt_bind_param($stmt, "ss", $email, $hashedPwd);
    //     mysqli_stmt_execute($stmt);
    //     mysqli_stmt_close($stmt);
    //     header("location: ../index.php?error=success");
    //     exit();
    // }
    
    public function personRegister($person)
    {
        $sql = "INSERT INTO persons (name, surname, email, hashed_password, plate, faculty_id, department_id, possition_id, user_possition) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?);";
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $hashedPwd = password_hash($person->get_hashed_password(), PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssssssss", $person->get_name(), $person->get_surname(), $person->get_email(), $hashedPwd, $person->get_plate(), $person->get_faculty_id(), $person->get_department_id(), $person->get_possition_id(), $person->get_user_possition());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php?error=success");
        exit();
    }

    function invalidPlate($plateleft, $platecenter, $plateright){
        if (preg_match("/^[0123456789\s]*$/", $plateleft)) {
            if (preg_match("/^[a-zA-ZıİöÖçÇşŞğĞüÜ\s]*$/", $platecenter)) {
                if (preg_match("/^[0123456789\s]*$/", $plateright)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else{
            return false;
        }
    }
    function  invalidName($name)
    {
        if (!preg_match("/^[a-zA-ZıİöÖçÇşŞğĞüÜ\s]*$/", $name)) {
            return false;
        } else {
            return true;
        }
    }
    function  invalidSurName($surname)
    {
        if (!preg_match("/^[a-zA-ZıİöÖçÇşŞğĞüÜ]*$/", $surname)) {
            return false;
        } else {
            return true;
        }
    }
    function  invalidEmail($email)
    {
        if (!filter_var($email,  FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
    function  emailExists($conn, $email)
    {
        $sql = "SELECT * FROM persons WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email,);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            return true;
        }
        mysqli_stmt_close($stmt);
    }
    function invalidSelectPossition($selection)
    {
        $sql = "SELECT * FROM possition WHERE id =" . $selection . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else{
            return false;
        }
    }
    function invalidSelectFaculty($selection)
    {
        $sql = "SELECT * FROM faculty WHERE id =" . $selection . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else{
            return false;
        }
    }
    function invalidSelectDepartment($selection)
    {
        $sql = "SELECT * FROM department WHERE id =" . $selection . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else{
            return false;
        }
    }
}