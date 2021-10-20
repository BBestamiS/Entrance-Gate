<!-- Kullanıcılar üzerinden yapılacak işlemler için bu dosya kullanılacak ve bu dosyada fonksiyonlar bulunacak. -->
<?php

class Entryfunc
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if($db->get_conn() === null){
            return null;
        }
        $this->db = $db;
    }
    function idConfirmation($id)
    {
        $sql = "SELECT * FROM  persons WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else {
            return false;
        }
    }
    function  invalidId($id)
    {
        if (!preg_match("/^[1-9]*$/", $id)) {
            return false;
        } else {
            return true;
        }
    }
    public function staffEntry($staffId)
    {
        $sql = "INSERT INTO staffentry (entry_time, staff_id) VALUES (CURRENT_TIMESTAMP(),?);";
        
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?selection=staff&error=stmterror");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "i",$staffId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main.php?selection=staff&error=success");
        exit();
    }

}