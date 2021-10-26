<!-- Kullanıcılar üzerinden yapılacak işlemler için bu dosya kullanılacak ve bu dosyada fonksiyonlar bulunacak. -->
<?php

class Securityfunc
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if($db->get_conn() === null){
            return null;
        }
        $this->db = $db;
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
    function  emailExists($conn, $email, $gateid)
    {
        $sql = "SELECT * FROM security WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?id=" . $gateid . "&error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email,);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
           return false;
        } else {
            $sql = "SELECT * FROM persons WHERE email = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../main.php?id=" . $gateid . "&error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $email,);
            mysqli_stmt_execute($stmt);
            $resultData = mysqli_stmt_get_result($stmt);
    
            if ($row = mysqli_fetch_assoc($resultData)) {
                return false;
            } else {
                return true;
            }
        }
        mysqli_stmt_close($stmt);
    }
    public function addSecurity($security)
    {
        $sql = "INSERT INTO security (name, surname, email, hashed_password, gate_id) VALUES (?, ?, ?, ?, ?);";
        
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?id=" . $security->get_gate_id() . "&error=stmtfailed");
            exit();
        }
        
        $hashedPwd = password_hash($security->get_hashed_password(), PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssssi", $security->get_name(), $security->get_surname(), $security->get_email(), $hashedPwd,  $security->get_gate_id());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main.php?id=" . $security->get_gate_id() . "&error=success");
        exit();
    }
    function getSecurity($id)
    {
        $sql = "SELECT * FROM  security WHERE id =" . $id . ";";
        
        $result = mysqli_query($this->db->get_conn(), $sql);
     
        $resultCheck = mysqli_num_rows($result);
          
        $resultArray = array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
}