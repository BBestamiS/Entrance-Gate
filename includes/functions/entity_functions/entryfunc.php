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
    public function staffEntry($staffId, $entryGateId, $securityId)
    {
        $sql = "INSERT INTO staffentry (entry_date, entry_time, entry_gate_id, entry_security_id, staff_id) VALUES (CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP(),?,?,?);";
        
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?selection=staff&error=stmterror");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "iii",$entryGateId, $securityId,$staffId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main.php?selection=staff&error=success");
        exit();
    }
    public function guestEntry($name,$surname, $plate, $entryGateId, $securityId)
    {
        $sql = "INSERT INTO guestentry (entry_date, entry_time, name, surname, plate, entry_gate_id, entry_security_id) VALUES (CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP(),?,?,?,?,?);";
        $stmt = mysqli_stmt_init($this->db->get_conn());
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?selection=guest&error=stmterror");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "sssii",$name,$surname,$plate, $entryGateId,$securityId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../main.php?selection=guest&error=success");
        exit();
    }
    function  updatePlate($plate, $id)
    {
        $sql = "UPDATE persons SET plate = ? WHERE id = ?;";

        $stmt = mysqli_stmt_init($this->db->get_conn());
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../main.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "si", $plate, $id);
        mysqli_stmt_execute($stmt);
        header('location: ../main.php?error=plateUpdated');
        exit();
        mysqli_stmt_close($stmt);
    }
    
    public function  exitGate($plate, $exitGateId, $securityId)
    {
        $sql = "SELECT * FROM  guestentry WHERE plate ='" . $plate . "';";
                    
                    $result = mysqli_query($this->db->get_conn(), $sql);
                 
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        $sql = "UPDATE guestentry SET exit_time = CURRENT_TIMESTAMP(), exit_date = CURRENT_TIMESTAMP(), exit_gate_id = ?, exit_security_id = ? WHERE plate =?;";
                
                        $stmt = mysqli_stmt_init($this->db->get_conn());
                        
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("location: ../main.php?selection=exit&error=stmtfailed");
                            exit();
                        }
                        mysqli_stmt_bind_param($stmt, "iis", $exitGateId, $securityId, $plate);
                        mysqli_stmt_execute($stmt);
                        header("location: ../main.php?selection=exit&error=success");
                        exit();
                        mysqli_stmt_close($stmt);
                    }else {
                        $sql = "SELECT * FROM  persons WHERE plate ='" . $plate . "';";
        
                        $result = mysqli_query($this->db->get_conn(), $sql);
                   
                        $resultCheck = mysqli_num_rows($result);
                          
                        $resultArray = array();
                        if ($resultCheck > 0) {
                            $row = mysqli_fetch_object($result);

                            $sql = "SELECT * FROM  staffentry WHERE staff_id =" . $row->id . ";";
        
                             $result = mysqli_query($this->db->get_conn(), $sql);
                        
                            $resultCheck = mysqli_num_rows($result);
                            
                            $resultArray = array();
                            if ($resultCheck > 0) {
                                $sql = "UPDATE staffentry SET exit_time = CURRENT_TIMESTAMP(), exit_date = CURRENT_TIMESTAMP(),  exit_gate_id = ?, exit_security_id = ? WHERE staff_id =?;";
                                $stmt = mysqli_stmt_init($this->db->get_conn());
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    header("location: ../main.php?selection=exit&error=stmtfailed");
                                    exit();
                                }
                                mysqli_stmt_bind_param($stmt, "iis", $exitGateId, $securityId, $row->id);
                                mysqli_stmt_execute($stmt);
                                header("location: ../main.php?selection=exit&error=success");
                                exit();
                                mysqli_stmt_close($stmt);
                            }else {
                                return false;
                            }
                        }else {
                            return false;
                        }
                    }
       
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
    function noFoundPlate($plateleft, $platecenter, $plateright){
        if (preg_match("/^[0123456789\s]*$/", $plateleft)) {
            if (preg_match("/^[a-zA-ZıİöÖçÇşŞğĞüÜ\s]*$/", $platecenter)) {
                if (preg_match("/^[0123456789\s]*$/", $plateright)) {
                    $plate = strtolower($plateleft . " " . $platecenter . " " . $plateright);

                    $sql = "SELECT * FROM  guestentry WHERE plate ='" . $plate . "';";
                    
                    $result = mysqli_query($this->db->get_conn(), $sql);
                 
                    $resultCheck = mysqli_num_rows($result);
                    
                    if ($resultCheck > 0) {
                        return true;
                    }else {
                        $sql = "SELECT * FROM  persons WHERE plate ='" . $plate . "';";
        
                        $result = mysqli_query($this->db->get_conn(), $sql);
                   
                        $resultCheck = mysqli_num_rows($result);
                          
                        $resultArray = array();
                        if ($resultCheck > 0) {
                            $row = mysqli_fetch_object($result);

                            $sql = "SELECT * FROM  staffentry WHERE staff_id =" . $row->id . ";";
        
                             $result = mysqli_query($this->db->get_conn(), $sql);
                        
                            $resultCheck = mysqli_num_rows($result);
                            
                            $resultArray = array();
                            if ($resultCheck > 0) {
                                return true;
                            
                            }else {
                                return false;
                            }
                        }else {
                            return false;
                        }
                    }
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
}