<!-- Kullanıcılar üzerinden yapılacak işlemler için bu dosya kullanılacak ve bu dosyada fonksiyonlar bulunacak. -->
<?php

class Personfunc
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if($db->get_conn() === null){
            return null;
        }
        $this->db = $db;
    }


    function getUserPossition($id)
    {
        $sql = "SELECT * FROM  possition WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getUserDepartment($id)
    {
        $sql = "SELECT * FROM department WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray =   array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getStaff($id)
    {
        $sql = "SELECT * FROM persons WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray =   array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getGuest($id)
    {
        $sql = "SELECT * FROM guestentry WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray =   array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getGuests()
    {
        date_default_timezone_set('Europe/Istanbul');
        $sql = "SELECT * FROM  guestentry WHERE exit_date IS NULL ;";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultArray = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $resultArray[] = $row;
            }
            $sql = "SELECT * FROM  guestentry WHERE exit_date IS NOT NULL AND entry_date ='" . date("Y-m-d") . "';";
            $result = mysqli_query($this->db->get_conn(), $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $resultArray[] = $row;
                }
                return $resultArray;
    }
    function getStaffs()
    {
        date_default_timezone_set('Europe/Istanbul');
        $sql = "SELECT * FROM  staffentry WHERE exit_date IS NULL;";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultArray = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $resultArray[] = $row;
            }
            $sql = "SELECT * FROM  staffentry WHERE exit_date IS NOT NULL AND entry_date ='" . date("Y-m-d") . "';";
            $result = mysqli_query($this->db->get_conn(), $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $resultArray[] = $row;
                }
                return $resultArray;
    }
    function getUserFaculty($id)
    {
        $sql = "SELECT * FROM  faculty WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }

    function getGuestConfirmation($id)
    {
        $sql = "SELECT * FROM  guestentry WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else {
            return false;
        }
    }

    function getStaffConfirmation($id)
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
    function getStaffEntryConfirmation($id)
    {
        $sql = "SELECT * FROM  staffentry WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            return true;
        }else {
            return false;
        }
    }

    function getWaitingUsers()
    {
        $sql = "SELECT * FROM persons WHERE confirmation = 0;";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $resultArray[] = $row;
            }
            return $resultArray;
        }
    }
    function updateConfirmation($id , $status)
    {
        if($status == "accept"){
            $sql = "UPDATE persons SET confirmation = 1 WHERE id = (?);";
        }elseif ($status == "cancel") {
            $sql = "UPDATE persons SET confirmation = -1 WHERE id = (?);";
        }
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ./main.php??selection=user&error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ./main.php?selection=user");
        exit();
    }
}