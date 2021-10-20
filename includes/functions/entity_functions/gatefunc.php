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
}