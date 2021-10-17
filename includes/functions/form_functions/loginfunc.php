<!-- Bu dosya, login.inc.php dosyasına gelen verilerin işleme tabi tutulacağı ve bu işlemlerin yazıldığı fonksiyonların bulunduğu dosyadır. -->

<?php

class login
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

    public function login($email, $password)
    {
        $emailExists = $this->emailExists($email);

        if ($emailExists === true) {
            header("location: ../index.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $emailExists["hashed_password"];
        $checkPwd = password_verify($password, $pwdHashed);

        if ($checkPwd === false) {
            header("location: ../index.php?error=wrongPwd");
            exit();
        } else if ($checkPwd === true) {
            session_start();
            $_SESSION["id"] = $emailExists["id"];
            $_SESSION["user_possition"] = $emailExists["user_possition"];
            header("location: ../main.php?error=success");
            exit();
        }
    }
    function emailExists($email)
    {
        $sql = "SELECT * FROM persons WHERE email = ?;";
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $email,);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } 
        else{
            $sql = "SELECT * FROM admin WHERE email = ?;";
            $stmt = mysqli_stmt_init($this->db->get_conn());
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            mysqli_stmt_bind_param($stmt, "s", $email,);
            mysqli_stmt_execute($stmt);
            $resultData = mysqli_stmt_get_result($stmt);
    
            if ($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            } 
            else{
                $sql = "SELECT * FROM security WHERE email = ?;";
                $stmt = mysqli_stmt_init($this->db->get_conn());
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: ../index.php?error=stmtfailed");
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "s", $email,);
                mysqli_stmt_execute($stmt);
                $resultData = mysqli_stmt_get_result($stmt);
        
                if ($row = mysqli_fetch_assoc($resultData)) {
                    return $row;
                } 
                else{
                    return true;
                }
            }
        }
        
        mysqli_stmt_close($stmt);
    }

    function emptyInputLogin($email, $hashedPwd)
    {

        if (empty($email)  || empty($hashedPwd)) {
            return false;
        } else {
            return true;
        }
    }

    function invalidEmail($email)
    {
        if (!filter_var($email,  FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

}