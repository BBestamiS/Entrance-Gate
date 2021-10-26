<!-- Kullanıcılar üzerinden yapılacak işlemler için bu dosya kullanılacak ve bu dosyada fonksiyonlar bulunacak. -->
<?php

class Gatefunc
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if($db->get_conn() === null){
            return null;
        }
        $this->db = $db;
    }
    public function addGate($name)
    {
        $sql = "INSERT INTO gate (gate_name) VALUES (?);";
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?selection=gate");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main.php?selection=gate");
        exit();
    }
    public function getGates(){
        $sql = "SELECT * FROM gate;";
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
    public function getGateStaffInfo($gateid){
        $sql = "SELECT * FROM  staffentry WHERE exit_date IS NULL AND entry_gate_id =" . $gateid . " AND entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultArray = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $resultArray[] = $row;
            }
            $sql = "SELECT * FROM  staffentry WHERE exit_date IS NOT NULL AND entry_gate_id =" . $gateid . " AND entry_date ='" . date("Y-m-d") . "';";
            $result = mysqli_query($this->db->get_conn(), $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $resultArray[] = $row;
                }
                return $resultArray;
    }
    public function getGateGuestInfo($gateid){
        $sql = "SELECT * FROM  guestentry WHERE exit_date IS NULL AND entry_gate_id =" . $gateid . " AND entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultArray = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $resultArray[] = $row;
            }
            $sql = "SELECT * FROM  guestentry WHERE exit_date IS NOT NULL AND entry_gate_id =" . $gateid . " AND entry_date ='" . date("Y-m-d") . "';";
            $result = mysqli_query($this->db->get_conn(), $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $resultArray[] = $row;
                }
                return $resultArray;
    }
    function getGate($id)
    {
        $sql = "SELECT * FROM  gate WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
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
    function getStaffInfo($id)
    {
        $sql = "SELECT * FROM  staffentry WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getGuestInfo($id)
    {
        $sql = "SELECT * FROM  guestentry WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            $row = mysqli_fetch_object($result);
            return $row;
        }
    }
    function getGateConfirmation($id)
    {
        $sql = "SELECT * FROM  gate WHERE id =" . $id . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $resultCheck = mysqli_num_rows($result);
        $resultArray = array();
        if ($resultCheck > 0) {
            return true;
        }else {
            return false;
        }
    }
    function getVehiclesInfo()
    {
        date_default_timezone_set('Europe/Istanbul');
        $tmp = 0;
        $resultArray = array();
        $sql = "SELECT * FROM  guestentry WHERE entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
        $sql = "SELECT * FROM  staffentry WHERE entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[0] = $tmp;
        $sql = "SELECT * FROM  guestentry WHERE exit_date IS NULL AND entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
    
        $sql = "SELECT * FROM  staffentry WHERE exit_date IS NULL AND entry_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[1] = $tmp;
       

        $sql = "SELECT * FROM  guestentry WHERE exit_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
    
        $sql = "SELECT * FROM  staffentry WHERE exit_date ='" . date("Y-m-d") . "';";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[2] = $tmp;

        $sql = "SELECT * FROM  guestentry WHERE exit_date IS NULL;";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
    
        $sql = "SELECT * FROM  staffentry WHERE exit_date IS NULL;";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[3] = $tmp;
        return $resultArray;
    }
    function getGateInfo($gateid)
    {
        date_default_timezone_set('Europe/Istanbul');
        $tmp = 0;
        $resultArray = array();
        $sql = "SELECT * FROM  guestentry WHERE entry_date ='" . date("Y-m-d") . "' AND entry_gate_id = " . $gateid . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
        $sql = "SELECT * FROM  staffentry WHERE entry_date ='" . date("Y-m-d") . "' AND entry_gate_id = " . $gateid . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[0] = $tmp;

        $sql = "SELECT * FROM  guestentry WHERE exit_date ='" . date("Y-m-d") . "' AND exit_gate_id = " . $gateid . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = mysqli_num_rows($result);
    
        $sql = "SELECT * FROM  staffentry WHERE  exit_date ='" . date("Y-m-d") . "' AND exit_gate_id = " . $gateid . ";";
        $result = mysqli_query($this->db->get_conn(), $sql);
        $tmp = $tmp + mysqli_num_rows($result);
        $resultArray[1] = $tmp;
        return $resultArray;
    }
}