<article class="selection-user-article">
<div class="selection-user-bg">
        <div class="user-bg">
<?php
    if(isset($_GET['guestid']) || isset($_GET['staffid'])){
        
        if($_GET['guestid'] !== null){
            if(getGuestConfirmation($_GET['guestid']) == true){?>
            <div class="staff-gate-info-header-possition">
            <?php
                $guest = getGuest($_GET['guestid']);
                ?>
                <div class="staff-gate-info-first-div">
                <div class="staff-gate-info-header-div">
                    <p class="staff-info-header-p">Adı</p>
                    <p class="staff-info-p"><?php echo $guest->name ?></p>
                    <p class="staff-info-header-p">Soyadı</p>
                    <p class="staff-info-p"><?php echo $guest->surname ?></p>
                    <p class="staff-info-header-p">Plakası</p>
                    <p class="staff-info-p"><?php echo $guest->plate ?></p>
                </div>
                
                </div>
                <div class="staff-gate-info-second-div">
                <div class="staff-gate-info-header-div">
                    <p class="staff-info-header-p">Giriş Kapısı</p>
                    <p class="staff-info-p"><?php echo getGate($guest->entry_gate_id)->gate_name?></p>
                    <p class="staff-info-header-p">Giriş Zamanı</p>
                    <p class="staff-info-p"><?php echo $guest->entry_date. " ".$guest->entry_time  ?></p>
                    <p class="staff-info-header-p">Girişi Sağlayan Güvenlik</p>
                    <p class="staff-info-p"><?php echo getSecurity($guest->entry_security_id)->name ?></p>
                    <p class="staff-info-header-p">Çıkış Kapısı</p>
                    <p class="staff-info-p"><?php 
                    if($guest->exit_gate_id == null){
                        echo "Çıkış Yapılmamış";
                    }else{
                        echo getGate($guest->exit_gate_id)->gate_name;
                    }
                    ?></p>
                    <p class="staff-info-header-p">Çıkış Zamanı</p>
                    <p class="staff-info-p"><?php 
                    if($guest->exit_date == null){
                        echo "Çıkış Yapılmamış";
                    }else{
                        echo $guest->exit_date. " ".$guest->exit_time ;
                    }
                    ?></p>
                    <p class="staff-info-header-p">Çıkışı Sağlayan Güvenlik</p>
                    <p class="staff-info-p"><?php
                    if($guest->exit_security_id == null){
                        echo "Çıkış Yapılmamış";
                    }else{
                        echo getSecurity($guest->exit_security_id)->name ;
                    }
                    ?></p>
                </div>
                </div>
               
            </div>
                
                <div class="staff-gate-info-div">
                    
                </div>
            <?php
            }else {
                include_once 'getallinfo.php';
            }
        }elseif ($_GET['staffid'] !== null) {
            if(getStaffEntryConfirmation($_GET['entryid']) == true){
                if(getStaffConfirmation($_GET['staffid']) == true){?>
                    <div class="staff-gate-info-header-possition">
                    <?php
                        $staff = getStaff($_GET['staffid']);
                        ?>
                        <div class="staff-gate-info-first-div">
                        <div class="staff-gate-info-header-div">
                            <p class="staff-info-header-p">Adı</p>
                            <p class="staff-info-p"><?php echo $staff->name ?></p>
                            <p class="staff-info-header-p">Soyadı</p>
                            <p class="staff-info-p"><?php echo $staff->surname ?></p>
                            <p class="staff-info-header-p">e-Mail'i</p>
                            <p class="staff-info-p"><?php echo $staff->email ?></p>
                            <p class="staff-info-header-p">Plakası</p>
                            <p class="staff-info-p"><?php echo $staff->plate ?></p>
                            <p class="staff-info-header-p">Fakültesi</p>
                            <p class="staff-info-p"><?php echo getUserFaculty($staff->faculty_id)->name ?></p>
                            <p class="staff-info-header-p">Bölümü</p>
                             <p class="staff-info-p"><?php echo getUserDepartment($staff->department_id)->name ?></p>
                            <p class="staff-info-header-p">Pozisyonu</p>
                            <p class="staff-info-p"><?php echo getUserPossition($staff->possition_id)->name ?></p>
                        </div>
                        
                        </div>
                        <div class="staff-gate-info-second-div">
                        <div class="staff-gate-info-header-div">
                             <?php
                             $staffinfo = getStaffInfo($_GET['entryid']);
                             ?>
                            <p class="staff-info-header-p">Giriş Kapısı</p>
                            <p class="staff-info-p"><?php echo getGate($staffinfo->entry_gate_id)->gate_name?></p>
                            <p class="staff-info-header-p">Giriş Zamanı</p>
                            <p class="staff-info-p"><?php echo $staffinfo->entry_date. " ".$staffinfo->entry_time  ?></p>
                            <p class="staff-info-header-p">Girişi Sağlayan Güvenlik</p>
                            <p class="staff-info-p"><?php echo getSecurity($staffinfo->entry_security_id)->name ?></p>
                            <p class="staff-info-header-p">Çıkış Kapısı</p>
                            <p class="staff-info-p"><?php 
                            if($staffinfo->exit_gate_id == null){
                                echo "Çıkış Yapılmamış";
                            }else{
                                echo getGate($staffinfo->exit_gate_id)->gate_name;
                            }
                            ?></p>
                            <p class="staff-info-header-p">Çıkış Zamanı</p>
                            <p class="staff-info-p"><?php 
                            if($staffinfo->exit_date == null){
                                echo "Çıkış Yapılmamış";
                            }else{
                                echo $staffinfo->exit_date. " ".$staffinfo->exit_time ;
                            }
                            ?></p>
                            <p class="staff-info-header-p">Çıkışı Sağlayan Güvenlik</p>
                            <p class="staff-info-p"><?php
                            if($staffinfo->exit_security_id == null){
                                echo "Çıkış Yapılmamış";
                            }else{
                                echo getSecurity($staffinfo->exit_security_id)->name ;
                            }
                            ?></p>
                        </div>
                        </div>
                       
                    </div>
                        
                        <div class="staff-gate-info-div">
                            
                        </div>
                    <?php
            }else{
                include_once 'getallinfo.php';
            }
            
            }else {
                include_once 'getallinfo.php';
            }
            
        }else{
            include_once 'getallinfo.php';
        }
    }else {
        include_once 'getallinfo.php';
    }
    ?>
    
        
        </div>
    </div>
</article>