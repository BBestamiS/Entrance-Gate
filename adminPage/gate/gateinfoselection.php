            <section class="color-info">
                            <div class="color-div">
                                <div class="color-entry"></div>
                                <p class="color-text">= Halihazırda içeride</p>
                            </div>
                            <div class="color-div">
                                <div class="color-exit"></div>
                                <p class="color-text">= Çıkış yapmış</p>
                            </div>
                            
                            </section>
                        <div class="entry-list-div">
                            <section class="staff-info-section">
                                <h1 class="staff-info-h1">Personeller</h1>
                                <?php
                                foreach(getGateStaffInfo($_GET['id']) as $item){
                                    $staff = getStaff($item['staff_id']);
                                    ?>
                                    <div class="staff-info-list-div">
                                        <?php
                                        if($item['exit_date'] == null){?>
                                            <a href="main.php?selection=entry&id=<?php echo $_GET['id'] ?>&staffid=<?php echo $staff->id ?>&entryid=<?php echo $item['id'] ?>" class="staff-info-list-bg">
                                                <?php
                                        } else {?>
                                            <a href="main.php?selection=entry&id=<?php echo $_GET['id'] ?>&staffid=<?php echo $staff->id ?>&entryid=<?php echo $item['id'] ?>" class="staff-info-list-bg1">
                                                <?php
                                        }
                                        ?>
                                        
                                            <div class="staff-name-surname-div">
                                                <div class="staff-name-div">
                                                    <p class="staff-name-p">Adı: <?php echo $staff->name ?></p>
                                                    <p class="staff-name-p">Soyadı: <?php echo $staff->surname ?></p>
                                            </div>
                                        </div>
                                        <div class="staff-info-plate">
                                            <p class="staff-info-p">Araç Plakası</p>
                                            <p class="staff-info-p"><?php echo strtoupper($staff->plate) ?></p>
                                        </div>
                                        </a>
                                </div>
                                <?php
                                }
                                ?>
                                
                            </section>
                            <section class="guest-info-section">
                                <h1 class="guest-info-h1">Misafirler</h1>
                                <?php
                                foreach(getGateGuestInfo($_GET['id']) as $item){
                                    ?>
                                    <div class="staff-info-list-div">
                                    <?php
                                        if($item['exit_date'] == null){?>
                                            <a href="main.php?selection=entry&id=<?php echo $_GET['id'] ?>&guestid=<?php echo $item['id'] ?>"  class="staff-info-list-bg">
                                                <?php
                                        } else {?>
                                            <a href="main.php?selection=entry&id=<?php echo $_GET['id'] ?>&guestid=<?php echo $item['id'] ?>"  class="staff-info-list-bg1">
                                                <?php
                                        }
                                        ?>
                                            <div class="staff-name-surname-div">
                                                <div class="staff-name-div">
                                                    <p class="staff-name-p">Adı: <?php echo $item['name'] ?></p>
                                                    <p class="staff-name-p">Soyadı: <?php echo $item['surname'] ?></p>
                                            </div>
                                        </div>
                                        <div class="staff-info-plate">
                                            <p class="staff-info-p">Araç Plakası</p>
                                            <p class="staff-info-p"><?php echo strtoupper($item['plate']) ?></p>
                                        </div>
                                        </a>
                                </div>
                                <?php
                                }
                                ?>
                            </section>
                        </div>
            
            
        